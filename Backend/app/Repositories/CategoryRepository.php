<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository
{
    public function findAll(): Collection
    {
        return Category::orderBy('id')->get();
    }
}
