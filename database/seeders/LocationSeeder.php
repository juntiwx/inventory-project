<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
//        Location::truncate();
        $csvData = fopen(storage_path('app/public/data/locations.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Location::query()->create([
                    'id' => $data['0'],
                    'building_name' => $data['1'],
                    'room_name' => $data['2'],
                    'room_number' => $data['3'],
                    'floor' => $data['4'],
                    'normal_seat' => $data['5'],
                    'max_seat' => $data['6'],
                    'exam_seat' => $data['7'],
                    'room_type' => $data['8'],
                    'use_group' => $data['9'],
                    'remark' => $data['10'],
                    'status' => $data['11'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
