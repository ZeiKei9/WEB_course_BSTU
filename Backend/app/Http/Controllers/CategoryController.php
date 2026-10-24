<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            ['id' => 1, 'name' => 'GigE камеры'],
            ['id' => 2, 'name' => 'USB3 камеры'],
            ['id' => 3, 'name' => 'Монохромные камеры'],
        ]);
    }
}
