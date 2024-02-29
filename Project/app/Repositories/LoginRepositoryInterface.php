<?php

namespace App\Repositories;


use stdClass;

Interface LoginRepositoryInterface{
    public function paginateC(int $page=1, int $perPage=20, string $filter): PaginationInterface;
    public function getAll(string $filter = null): array ;
    public function findONE(string $id):  stdClass|null;

}