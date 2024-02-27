<?php

namespace App\Services;
use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Repositories\PaginationInterface;
use App\Repositories\SupportRepositotyInterface;
use stdClass;

class SupportService{


    public function __construct(protected SupportRepositotyInterface $repository){
        
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

    public function findONE(string $id): stdClass|null{
        return $this->repository->findONE($id);
    }

    public function new(CreateSupportDTO $dto): stdClass{
        return $this->repository->new($dto);
    }

    public function update(UpdateSupportDTO $dto): stdClass|null{
        return $this->repository->update($dto);
    }

    public function delete(string $id): void{
        $this->repository->delete($id);
    }
}