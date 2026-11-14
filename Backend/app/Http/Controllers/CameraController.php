<?php

namespace App\Http\Controllers;

use App\Services\CameraService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CameraController extends Controller
{
    public function __construct(private CameraService $service) {}

    public function index(): JsonResponse
    {
        return response()->json($this->service->findAll());
    }

    public function show(string $id): JsonResponse
    {
        return response()->json($this->service->findById($id));
    }

    public function store(Request $request): JsonResponse
    {
        return response()->json($this->service->create($request->all()), 201);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        return response()->json($this->service->update($id, $request->all()));
    }

    public function destroy(string $id): Response
    {
        $this->service->delete($id);

        return response()->noContent();
    }
}
