<?php

namespace Database\Seeders;

use App\Models\OperatingSystem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperatingSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //

        $csvData = fopen(storage_path('app/public/data/operating_systems.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                OperatingSystem::query()->create([
                    'id' => $data['0'],
                    'os_name' => $data['1'],
                    'os_group' => $data['1'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
