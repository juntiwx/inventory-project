<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        $csvData = fopen(storage_path('app/public/data/departments.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Department::query()->create([
                    'id' => $data['0'],
                    'name_th' => $data['1'],
                    'name_en' => $data['2'],
                    'shortness' => $data['3'],
                    'group_en' => $data['4'],
                    'group_th' => $data['5'],
                    'under' => $data['6'],
                    'level' => $data['7'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
