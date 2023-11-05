<?php

namespace Database\Seeders;

use App\Models\ItemType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
//        ItemType::seed(storage_path('app/public/data/item_types.csv'));

        $csvData = fopen(storage_path('app/public/data/item_types.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                ItemType::query()->create([
                    'id' => $data['0'],
                    'name_th' => $data['1'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
