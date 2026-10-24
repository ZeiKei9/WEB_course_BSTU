<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class CameraController extends Controller
{
    private array $cameras = [
        [
            'id' => 1,
            'brand' => 'Hikrobot',
            'model' => 'MV-CS050-10GC',
            'description' => 'Цветная CMOS-камера для систем машинного зрения.',
            'resolution' => 5,
            'interfaceType' => 'GigE',
            'sensor' => 'CMOS',
            'price' => 48900,
        ],
        [
            'id' => 2,
            'brand' => 'Daheng Imaging',
            'model' => 'MER2-503-36U3M',
            'description' => 'Монохромная камера с интерфейсом USB3.',
            'resolution' => 5,
            'interfaceType' => 'USB3',
            'sensor' => 'Mono CMOS',
            'price' => 42500,
        ],
        [
            'id' => 3,
            'brand' => 'Basler',
            'model' => 'ace 2',
            'description' => 'Компактная промышленная камера для высокоскоростной съёмки.',
            'resolution' => 2,
            'interfaceType' => 'USB3',
            'sensor' => 'CMOS',
            'price' => 61000,
        ],
        [
            'id' => 4,
            'brand' => 'Hikrobot',
            'model' => 'MV-CH120-10GM',
            'description' => 'Камера высокого разрешения для контроля деталей.',
            'resolution' => 12,
            'interfaceType' => 'GigE',
            'sensor' => 'Mono CMOS',
            'price' => 74900,
        ],
    ];

    public function index(): JsonResponse
    {
        return response()->json($this->cameras);
    }

    public function show(string $id): JsonResponse
    {
        foreach ($this->cameras as $camera) {
            if ($camera['id'] === (int) $id) {
                return response()->json($camera);
            }
        }

        return response()->json(['message' => 'Камера не найдена.'], 404);
    }
}
