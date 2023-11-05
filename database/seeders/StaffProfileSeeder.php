<?php

namespace Database\Seeders;

use App\Models\StaffProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
//        StaffProfile::seed(storage_path('app/public/data/staff_profile.csv'));

        DB::unprepared(file_get_contents(storage_path('app/public/data/staff_profiles.sql')));

    }
}
