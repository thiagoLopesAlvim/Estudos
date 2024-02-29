<?php 

namespace App\Repositories;
use App\Repositories\ConsultaRepositoryInterface;
use stdClass;
use App\DTO\Consulta\CreateConsultaDTO;
use App\DTO\Consulta\UpdateConsultaDTO;
use App\Models\Consulta;
use App\Repositories\PaginationInterface;

class ConsultaEloquentORM implements ConsultaRepositoryInterface{

    public function __construct(protected Consulta $model){}
    public function paginateC(int $page=1, int $perPage=20,string $filter=null): PaginationInterface{
        $result =  $this->model
                        ->where(function($query) use ($filter){
                            if($filter){
                                $query->where('nomecliente',$filter);
                                $query->orWhere('nomecliente','like',"%{$filter}%");
                            }
                        })
                        ->paginate($perPage,["*"],"page", $page);
                    
        return new PaginationPresenter($result);
                    
    }
    public function getAll(string $filter = null): array {
        return $this->model
                        ->where(function($query) use ($filter){
                            if($filter){
                                $query->where('tipconsulta',$filter);
                                $query->orWhere('observacao','like',"%{$filter}%");
                            }
                        })
                        ->get()
                        ->toArray();
    }
    
    public function findONE(string $id):  stdClass|null{
      $support = $this->model->find($id);
      if(!$support){
        return null;
      }
     return (object) $support->toArray();

    }

    public function findSOME(string $name): stdClass|null{
        $support = $this->model->where('nomecliente','like','%'.$name.'%')->get();
            if($support == null){
                return null;
            }
            return (object) $support->toArray();


   
    }
    public function delete(string $id): void{
        $this->model->findOrFail($id)->delete();
    }
    public function new(CreateConsultaDTO $dto): stdClass{
        
        $support = $this->model->create((array)$dto);
        return (object) $support->toArray();
    }

    
    public function update(UpdateConsultaDTO $dto): stdClass|null {
        
        if(!$support = $this->model->find($dto->id)){
            return null;
        }
       $this->model->findOrFail($dto->id)->update((array)$dto);
        return (object) $support->toArray();
        
    }
}