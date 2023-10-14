<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Department;
use App\Models\HarddiskType;
use App\Models\Item;
use App\Models\ItemType;
use App\Models\Location;
use App\Models\Objective;
use App\Models\OperatingSystem;
use App\Models\ProjectType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Brand::seed(storage_path('app/public/files/brands.csv'));
        HarddiskType::seed(storage_path('app/public/files/harddisk_types.csv'));
        Item::seed(storage_path('app/public/files/items.csv'));
        ItemType::seed(storage_path('app/public/files/item_types.csv'));
        Location::seed(storage_path('app/public/files/locations.csv'));
        Objective::seed(storage_path('app/public/files/objectives.csv'));
        OperatingSystem::seed(storage_path('app/public/files/operating_system.csv'));
        ProjectType::seed(storage_path('app/public/files/project_types.csv'));
        Department::seed(storage_path('app/public/files/departments.csv'));

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
