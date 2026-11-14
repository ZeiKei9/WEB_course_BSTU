<?php

namespace App\Services;

use App\Models\Camera;
use App\Repositories\CameraRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CameraService
{
    public function __construct(private CameraRepository $repository) {}

    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }

    public function findById(string $id): Camera
    {
        $camera = $this->repository->findById($id);

        if ($camera === null) {
            throw new NotFoundHttpException('Камера не найдена.');
        }

        return $camera;
    }

    public function create(array $data): Camera
    {
        return $this->repository->create($this->validateData($data));
    }

    public function update(string $id, array $data): Camera
    {
        $camera = $this->findById($id);

        return $this->repository->update($camera, $this->validateData($data, $camera));
    }

    public function delete(string $id): void
    {
        $this->repository->delete($this->findById($id));
    }

    private function validateData(array $data, ?Camera $camera = null): array
    {
        return Validator::make($data, [
            'model' => ['required', 'string', 'max:255', Rule::unique('cameras', 'model')->ignore($camera?->id)],
            'description' => ['required', 'string'],
            'resolution' => ['required', 'integer', 'min:1', 'max:32767'],
            'interface_type' => ['required', 'string', 'max:255'],
            'sensor' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0', 'max:99999999.99', 'decimal:0,2'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'brand_id' => ['required', 'integer', 'exists:brands,id'],
        ])->validate();
    }
}
