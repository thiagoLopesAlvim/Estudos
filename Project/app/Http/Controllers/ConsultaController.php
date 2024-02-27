<?php

namespace App\Http\Controllers;
use App\Models\Consulta;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConsultaRequest;
use App\DTO\Consulta\CreateConsultaDTO;
use App\DTO\Consulta\UpdateConsultaDTO;
use App\Services\ConsultaService;

class ConsultaController extends Controller
{
    //
    public function __construct(protected ConsultaService $service){
        
    }
    public function index(Request $request){
        $consultas =$this->service->paginateC(
            page: $request->get('page',1),
            perPage: $request->get('per_page',20),
        );
        return view("consultas/index", compact("consultas"));
    }

    public function show(string|int $id){
       if(!$consulta= $this->service->findONE($id)){
         return back();
       };
       return view("consultas/show", compact("consulta"));

    }

    public function create(){
        return view("consultas/create");
    }

    public function store(StoreConsultaRequest $request){

        $this->service->new(CreateConsultaDTO::makeFromRequest($request)
        );

        return redirect()->route("consultas.index");
    }

    public function edit(Consulta $support, string $id){
        if(!$consulta= $this->service->findONE($id)){
            return back();
          };
          return view("consultas.edit", compact("consulta"));
    }

    public function update( StoreConsultaRequest $request, string $id){
        
        $support =  $this->service->update(UpdateConsultaDTO::makeFromRequest($request));
        
        if(!$support){
            return back();
        };


        return redirect()->route('consultas.index');
        
    }

    public function destroy(Consulta $support, string|int $id, Request $request){
        $this->service->delete($id);

        return redirect()->route('consultas.index');
    }
}