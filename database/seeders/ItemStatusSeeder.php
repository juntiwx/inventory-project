<?php

namespace Database\Seeders;

use App\Models\ItemStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $csvData = fopen(storage_path('app/public/data/item_status.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                ItemStatus::query()->create([
                    'id' => $data['0'],
                    'name_th' => $data['1'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
