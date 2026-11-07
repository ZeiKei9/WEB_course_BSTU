<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        foreach (['Hikrobot', 'Daheng Imaging', 'Basler'] as $name) {
            Brand::firstOrCreate(['name' => $name]);
        }
    }
}
