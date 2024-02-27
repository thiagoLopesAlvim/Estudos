<?php 

namespace App\Repositories;
use App\Repositories\SupportRepositotyInterface;
use stdClass;
use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Models\Support;
use App\Repositories\PaginationInterface;

class SupportEloquentORM implements SupportRepositotyInterface{

    public function __construct(protected Support $model){}
    public function paginateC(int $page=1, int $perPage=20,string $filter=null): PaginationInterface{
        $result =  $this->model
                        ->where(function($query) use ($filter){
                            if($filter){
                                $query->where('subject',$filter);
                                $query->orWhere('body','like',"%{$filter}%");
                            }
                        })
                        ->paginate($perPage,["*"],"page", $page);
                    
        return new PaginationPresenter($result);
                    
    }
    public function getAll(string $filter = null): array {
        return $this->model
                        ->where(function($query) use ($filter){
                            if($filter){
                                $query->where('subject',$filter);
                                $query->orWhere('body','like',"%{$filter}%");
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
    public function delete(string $id): void{
        $this->model->findOrFail($id)->delete();
    }
    public function new(CreateSupportDTO $dto): stdClass{
        
        $support = $this->model->create((array)$dto);
        return (object) $support->toArray();
    }
    public function update(UpdateSupportDTO $dto): stdClass|null {
        
        if(!$support = $this->model->find($dto->id)){
            return null;
        }
       $this->model->findOrFail($dto->id)->update((array)$dto);
        return (object) $support->toArray();
        
    }
}