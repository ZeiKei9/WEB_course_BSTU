<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    public function __construct(private CategoryRepository $repository) {}

    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }
}
