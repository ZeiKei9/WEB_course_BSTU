<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Camera;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CameraSeeder extends Seeder
{
    public function run(): void
    {
        $gige = Category::where('name', 'GigE камеры')->firstOrFail();
        $usb3 = Category::where('name', 'USB3 камеры')->firstOrFail();
        $hikrobot = Brand::where('name', 'Hikrobot')->firstOrFail();
        $daheng = Brand::where('name', 'Daheng Imaging')->firstOrFail();
        $basler = Brand::where('name', 'Basler')->firstOrFail();

        $cameras = [
            [
                'model' => 'MV-CS050-10GC',
                'description' => 'Цветная CMOS-камера для систем машинного зрения.',
                'resolution' => 5,
                'interface_type' => 'GigE',
                'sensor' => 'CMOS',
                'price' => 48900,
                'category_id' => $gige->id,
                'brand_id' => $hikrobot->id,
            ],
            [
                'model' => 'MER2-503-36U3M',
                'description' => 'Монохромная камера с интерфейсом USB3.',
                'resolution' => 5,
                'interface_type' => 'USB3',
                'sensor' => 'Mono CMOS',
                'price' => 42500,
                'category_id' => $usb3->id,
                'brand_id' => $daheng->id,
            ],
            [
                'model' => 'ace 2',
                'description' => 'Компактная промышленная камера для высокоскоростной съёмки.',
                'resolution' => 2,
                'interface_type' => 'USB3',
                'sensor' => 'CMOS',
                'price' => 61000,
                'category_id' => $usb3->id,
                'brand_id' => $basler->id,
            ],
            [
                'model' => 'MV-CH120-10GM',
                'description' => 'Камера высокого разрешения для контроля деталей.',
                'resolution' => 12,
                'interface_type' => 'GigE',
                'sensor' => 'Mono CMOS',
                'price' => 74900,
                'category_id' => $gige->id,
                'brand_id' => $hikrobot->id,
            ],
        ];

        foreach ($cameras as $camera) {
            Camera::updateOrCreate(['model' => $camera['model']], $camera);
        }
    }
}
