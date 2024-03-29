<?php

namespace App\Http\Controllers;
use App\Models\Consulta;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConsultaRequest;
use App\DTO\Consulta\CreateConsultaDTO;
use App\DTO\Consulta\UpdateConsultaDTO;
use App\Services\ConsultaService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

use function Laravel\Prompts\alert;
use function Laravel\Prompts\search;
use Illuminate\Support\Facades\Session;

class ConsultaController extends Controller
{
    //
    public function __construct(protected ConsultaService $service){
        
    }
    public function index(Request $request){

        if(!auth()->check()){
            return view("login/login");
        }

        $search = $request->get('search'); 
        
            $consultas =$this->service->paginateC(
                page: $request->get('page',1),
                perPage: $request->get('per_page',20),
                filter: $search
            );
        return view("consultas/index", compact("consultas"));
    }

    public function attmdados(Request $request){
        if(!auth()->check()){
            return view("login/login");
        }

        $search = $request->get('search'); 
        
            $consultas =$this->service->paginateC(
                page: 1,
                perPage: 5,
                filter: $search
            );
        return view("consultas/att/attdados", compact("consultas"));

    }

    public function day(Request $request){
        if(!auth()->check()){
            return view("login/login");
        }
        $search = Carbon::now()->format('d/m/Y'); 
            $consultas =$this->service->paginateN(
                page: $request->get('page',1),
                perPage: $request->get('per_page',20),
                filter: $search
            );
            return view("consultas/day", compact("consultas"));

    }


    public function birthd(Request $request){
        if(!auth()->check()){
            return view("login/login");
        }
        $search = '/'.Carbon::now()->format('m/'); 

        $consultas =$this->service->paginateB(
            page: $request->get('page',1),
            perPage: $request->get('per_page',20),
            filter: $search
        );
        return view("consultas/birthd", compact("consultas"));
    }

    public function birthdapi(Request $request){
        if(!auth()->check()){
            return view("login/login");
        }
        $search = '/'.Carbon::now()->format('m/'); 

        $consultas =$this->service->paginateB(
            page: $request->get('page',1),
            perPage: $request->get('per_page',20),
            filter: $search
        );
        foreach($consultas->items() as $consulta){
                $removecarac = ['-','(',')'];
                $aux = $consulta->telefone;
                $auxsemc = str_replace($removecarac,'', $aux);
                $stringSemEspacos = preg_replace('/\s+/', '', $auxsemc);
                $stringfinal= '55'.$stringSemEspacos;
            $response= Http::asForm()->post('localhost:8000/zdg-message',[
                'number' =>$stringfinal,
                'message' =>$request->message
            ]);
            
            if($response->successful()){
                Session::flash('success', 'Ação realizada com sucesso!');

            }else{
                Session::flash('error', 'Mensagem nao enviada!');
            }
    
        }
            return redirect()->back(); 
    }

    public function testeapi(Request $request){ 
        $response= Http::asForm()->post('localhost:8000/zdg-message',[
            'number' =>$request->telefonewp,
            'message' =>$request->message
        ]);
        if($response->successful()){
            Session::flash('success', 'Ação realizada com sucesso!');

        }else{
            Session::flash('error', 'Mensagem nao enviada!');
        }
        
            return redirect()->back(); 
        //view('consultas/teste');
    }

    public function show(string|int $id){
       if(!$consulta= $this->service->findONE($id)){
         return back();
       };
       return view("consultas/show", compact("consulta"));

    }

    public function create(Request $request){
        if(!auth()->check()){
            return view("login/login");
        }
        $search = $request->get('search');
        $consultas= $this->service->paginateC(
            page: 1,
            perPage: 2,
            filter: $search);
        return view("consultas/create", compact("consultas"));
    }

    public function store(StoreConsultaRequest $request){
   
        if($request->pathImg){
        $path = $request->pathImg->store('prontuarios');
         //  $request->pathImg = $path;
        }else{
            $path= 'null';
        }
         
        
        $this->service->new(CreateConsultaDTO::makeFromRequest($request, $path)
        );

        return redirect()->route("consultas.index");
    }

    public function edit(Consulta $support, string $id){
        if(!$consulta= $this->service->findONE($id)){
            return back();
          };
          return view("consultas.edit", compact("consulta"));
    }

    public function updatem(Request $request){
        $auxs = Consulta::where("CPF",$request->CPF)->get();
       
        foreach($auxs as $aux){

            $aux->endereco = $request->endereco;
            $aux->telefone = $request->telefone;
            $aux->save();
        }

        return redirect()->route("consultas.index");
    }

    public function update( StoreConsultaRequest $request, string $id){
        if($request->pathImg){
            $path = $request->pathImg->store('prontuarios');
             //  $request->pathImg = $path;
        }
        else{
            $path= 'null';
        }
        
        $support =  $this->service->update(UpdateConsultaDTO::makeFromRequest($request, $path));
        
        if(!$support){
            return back();
        };


        return redirect()->route('consultas.index');
        
    }

    public function destroy(Consulta $support, string|int $id, Request $request){
        $this->service->delete($id);

        return redirect()->route('consultas.index');
    }

     public function gerapdf(){
      return view('consultas/relatorio');
     }
}
