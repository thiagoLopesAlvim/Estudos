<?php

namespace App\Repositories;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use stdClass;

Interface SupportRepositotyInterface{
    public function paginateC(int $page=1, int $perPage=20, string $filter): PaginationInterface;
    public function getAll(string $filter = null): array ;
    public function findONE(string $id):  stdClass|null;
    public function delete(string $id): void;
    public function new(CreateSupportDTO $dto): stdClass;
    public function update(UpdateSupportDTO $dto): stdClass|null;
}