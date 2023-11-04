<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        Item::seed(storage_path('app/public/data/items.csv'));

        /*$csvData = fopen(storage_path('app/public/data/items.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Item::query()->create([
                    'id' => $data['0'],
                    'asset_number' => $data['1'],
                    'serial_number' => $data['2'],
                    'asset_name' => $data['3'],
                    'asset_status' => $data['4'],
                    'asset_group' => $data['5'],
                    'asset_date' => $data['6'],
                    'objective_id' => $data['7'],
                    'project_service' => $data['8'],
                    'owner' => $data['9'],
                    'department_owner' => $data['10'],
                    'location' => $data['11'],
                    'asset_type' => $data['12'],
                    'brand' => $data['13'],
                    'generation' => $data['14'],
                    'ram_type' => $data['15'],
                    'ram_unit' => $data['16'],
                    'asset_os' => $data['17'],
                    'harddisk' => $data['18'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);*/
    }
}
