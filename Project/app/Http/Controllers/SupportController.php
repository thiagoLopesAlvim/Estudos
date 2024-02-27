<?php

namespace App\Http\Controllers;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Requests\StoreSupportRequest;
use App\Http\Controllers\Controller;
use App\Models\Support;
use App\Services\SupportService;
use DateTime;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(protected SupportService $service){
        
    }
    public function index(Request $request){
        $supports =$this->service->paginateC(
            page: $request->get('page',1),
            perPage: $request->get('per_page',20),
        );
        return view("supports/index", compact("supports"));
    }

    public function show(string|int $id){
       if(!$support= $this->service->findONE($id)){
         return back();
       };
       return view("supports/show", compact("support"));

    }

    public function create(){
        return view("supports/create");
    }

    public function store(StoreSupportRequest $request){

        $this->service->new(CreateSupportDTO::makeFromRequest($request)
        );

        return redirect()->route("supports.index");
    }

    public function edit(Support $support, string $id){
        if(!$support= $this->service->findONE($id)){
            return back();
          };
          return view("supports.edit", compact("support"));
    }

    public function update( StoreSupportRequest $request, string $id){
        
        $support =  $this->service->update(UpdateSupportDTO::makeFromRequest($request));
        
        if(!$support){
            return back();
        };


        return redirect()->route('supports.index');
        
    }

    public function destroy(Support $support, string|int $id, Request $request){
        $this->service->delete($id);

        return redirect()->route('supports.index');
    }
}
