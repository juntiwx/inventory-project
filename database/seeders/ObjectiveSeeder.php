<?php

namespace Database\Seeders;

use App\Models\Objective;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        Objective::seed(storage_path('app/public/data/objectives.csv'));

        /*$csvData = fopen(storage_path('app/public/data/objectives.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Objective::query()->create([
                    'id' => $data['0'],
                    'name_th' => $data['1'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);*/
    }
}
