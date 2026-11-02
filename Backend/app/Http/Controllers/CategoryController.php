<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            [
                'id' => 1,
                'name' => 'GigE камеры',
                'description' => 'Для подключения по Ethernet и работы на большом расстоянии от компьютера.',
            ],
            [
                'id' => 2,
                'name' => 'USB3 камеры',
                'description' => 'Для систем, где нужна высокая скорость передачи данных и простое подключение.',
            ],
            [
                'id' => 3,
                'name' => 'Монохромные камеры',
                'description' => 'Для технического зрения, измерений и задач, где цвет не является главным параметром.',
            ],
        ]);
    }
}
