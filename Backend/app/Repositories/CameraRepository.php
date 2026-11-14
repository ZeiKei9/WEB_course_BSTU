<?php

namespace App\Repositories;

use App\Models\Camera;
use Illuminate\Database\Eloquent\Collection;

class CameraRepository
{
    public function findAll(): Collection
    {
        return Camera::with(['category', 'brand'])->orderBy('id')->get();
    }

    public function findById(string $id): ?Camera
    {
        return Camera::with(['category', 'brand'])->find($id);
    }

    public function create(array $data): Camera
    {
        $camera = Camera::create($data);

        return $camera->fresh(['category', 'brand']);
    }

    public function update(Camera $camera, array $data): Camera
    {
        $camera->update($data);

        return $camera->fresh(['category', 'brand']);
    }

    public function delete(Camera $camera): void
    {
        $camera->delete();
    }
}
