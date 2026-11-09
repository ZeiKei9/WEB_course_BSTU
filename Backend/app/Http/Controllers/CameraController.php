<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\JsonResponse;

class CameraController extends Controller
{
    public function index(): JsonResponse
    {
        $cameras = Camera::with(['category', 'brand'])->orderBy('id')->get();

        return response()->json($cameras);
    }

    public function show(string $id): JsonResponse
    {
        $camera = Camera::with(['category', 'brand'])->find($id);

        if (! $camera) {
            return response()->json(['message' => 'Камера не найдена.'], 404);
        }

        return response()->json($camera);
    }
}
