<?php

namespace App\Repositories;

use App\DTO\Consulta\CreateConsultaDTO;
use App\DTO\Consulta\UpdateConsultaDTO;
use App\Repositories\PaginationInterface;
use stdClass;

Interface ConsultaRepositoryInterface{
    public function paginateC(int $page=1, int $perPage=20, string $filter): PaginationInterface;
    public function getAll(string $filter = null): array ;
    public function findONE(string $id):  stdClass|null;
    public function delete(string $id): void;
    public function new(CreateConsultaDTO $dto): stdClass;
    public function update(UpdateConsultaDTO $dto): stdClass|null;
}