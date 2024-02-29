<?php

namespace App\Services;
use App\DTO\Consulta\CreateConsultaDTO;
use App\DTO\Consulta\UpdateConsultaDTO;
use App\Repositories\PaginationInterface;
use App\Repositories\ConsultaRepositoryInterface;
use stdClass;

class ConsultaService{


    public function __construct(protected  ConsultaRepositoryInterface $repository){
        
    }
    public function getAll(string $filter = null): array|null{
       return $this->repository->getAll($filter);
    }

    public function paginateC(int $page=1, int $perPage=20, string $filter=null): PaginationInterface{
        return $this->repository->paginateC(
            page: $page,
            perPage: $perPage,
            filter: $filter
        );
     }

     public function paginateN(int $page=1, int $perPage=20, string $filter=null): PaginationInterface{
        return $this->repository->paginateN(
            page: $page,
            perPage: $perPage,
            filter: $filter
        );
     }

    public function findONE(string $id): stdClass|null{
        return $this->repository->findONE($id);
    }

    public function findSOME(string $name): stdClass|null{
        return  $this->repository->findSOME($name);
    }

    public function new(CreateConsultaDTO $dto): stdClass{
        return $this->repository->new($dto);
    }

    public function update(UpdateConsultaDTO $dto): stdClass|null{
        return $this->repository->update($dto);
    }

    public function delete(string $id): void{
        $this->repository->delete($id);
    }
}