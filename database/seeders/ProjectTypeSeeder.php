<?php

namespace Database\Seeders;

use App\Models\ProjectType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        ProjectType::seed(storage_path('app/public/data/project_types.csv'));
        /*$csvData = fopen(storage_path('app/public/data/project_types.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                ProjectType::query()->create([
                    'id' => $data['0'],
                    'name_th' => $data['1'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);*/
    }
}
