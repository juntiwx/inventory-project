<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
//        Brand::seed(storage_path('app/public/data/brands.csv'));

        $csvData = fopen(storage_path('app/public/data/brands.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Brand::query()->create([
                    'id' => $data['0'],
                    'brand_name' => $data['1'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
