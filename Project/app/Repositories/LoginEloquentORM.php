<?php 

namespace App\Repositories;
use stdClass;
use App\Models\Support;
use App\Models\User;
use App\Repositories\PaginationInterface;

class LoginEloquentORM implements LoginRepositoryInterface{

    public function __construct(protected User $model){}
    public function paginateC(int $page=1, int $perPage=20,string $filter=null): PaginationInterface{
        $result =  $this->model
                        ->where(function($query) use ($filter){
                            if($filter){
                                $query->where('email',$filter);
                                $query->orWhere('email','like',"%{$filter}%");
                            }
                        })
                        ->paginate($perPage,["*"],"page", $page);
                    
        return new PaginationPresenter($result);
                    
    }
    public function getAll(string $filter = null): array {
        return $this->model
                        ->where(function($query) use ($filter){
                            if($filter){
                                $query->where('email',$filter);
                                $query->orWhere('email','like',"%{$filter}%");
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
}