<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'GigE камеры',
                'description' => 'Для подключения по Ethernet и работы на большом расстоянии от компьютера.',
            ],
            [
                'name' => 'USB3 камеры',
                'description' => 'Для систем, где нужна высокая скорость передачи данных и простое подключение.',
            ],
            [
                'name' => 'Монохромные камеры',
                'description' => 'Для технического зрения, измерений и задач, где цвет не является главным параметром.',
            ],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(['name' => $category['name']], $category);
        }
    }
}
