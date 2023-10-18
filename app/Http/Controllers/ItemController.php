<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Department;
use App\Models\HarddiskType;
use App\Models\Item;
use App\Models\ItemType;
use App\Models\Location;
use App\Models\Objective;
use App\Models\OperatingSystem;
use App\Models\ProjectType;
use App\Models\StaffProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(): \Inertia\Response
    {
        $asset_computers = Item::query()->get()->transform(function ($asset_computer) {
            return [
                'id' => $asset_computer->id,
                'asset_number' => $asset_computer->asset_number,
                'serial_number' => $asset_computer->serial_number,
                'asset_name' => $asset_computer->asset_name,
                'asset_status' => $asset_computer->asset_status,
                'asset_group' => $asset_computer->asset_group,
                'asset_date' => $asset_computer->asset_date,
                'objective' => $asset_computer->objective,
                'project_service' => $asset_computer->project_service,
                'owner' => $asset_computer->owners,
                'department_owner' => $asset_computer->department_owner,
                'location' => $asset_computer->location,
                'asset_type' => $asset_computer->asset_type,
                'brand' => $asset_computer->brand,
                'generation' => $asset_computer->generation,
                'ram_type' => $asset_computer->ram_type,
                'ram_unit' => $asset_computer->ram_unit,
                'asset_os' => $asset_computer->asset_os,
                'harddisk' => $asset_computer->harddisk,
            ];
        });

        return Inertia::render('ItemTable', [
            'asset_computers' => $asset_computers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        $objectives = Objective::query()->get()->transform(function ($objective) {
            return [
                'id' => $objective->id,
                'label' => '(' . $objective->id . ') - ' . $objective->objective_name,
            ];
        });

        $projects = ProjectType::query()->get()->transform(function ($project) {
            return [
                'id' => $project->id,
                'label' => '(' . $project->id . ') - ' . $project->project_name,
            ];
        });

        $staff_profiles = StaffProfile::query()->get()->transform(function ($staff_profile) {
            return [
                'id' => $staff_profile->id,
                'label' => '(' . $staff_profile->code . ') - ' . $staff_profile->name_thai . ' ' . $staff_profile->surname_thai,
            ];
        });

        $departments = Department::query()->get()->transform(function ($department) {
            return [
                'id' => $department->id,
                'label' => '(' . $department->id . ') - ' . $department->name_thai,
            ];
        });

        $locations = Location::query()->get()->transform(function ($location) {
            return [
                'id' => $location->id,
                'label' => '(' . $location->id . ') - ' . $location->building_name . ' : ห้อง ' . $location->room_number . ' ' . $location->room_name,
            ];
        });

        $item_types = ItemType::query()->get()->transform(function ($item_type) {
            return [
                'id' => $item_type->id,
                'label' => '(' . $item_type->id . ') - ' . $item_type->type_name,
            ];
        });

        $brands = Brand::query()->get()->transform(function ($brand) {
            return [
                'id' => $brand->id,
                'label' => '(' . $brand->id . ') - ' . $brand->brand_name,
            ];
        });

        $operating_systems = OperatingSystem::query()->get()->transform(function ($operating_system) {
            return [
                'id' => $operating_system->id,
                'label' => '(' . $operating_system->id . ') - ' . $operating_system->os_name,
            ];
        });

        $harddisks = HarddiskType::query()->get()->transform(function ($harddisk) {
            return [
                'id' => $harddisk->id,
                'label' => '(' . $harddisk->id . ') - ' . $harddisk->harddisk_type . ' (' . $harddisk->harddisk_unit . ')',
            ];
        });

        return Inertia::render('AddItem', [
            'objectives' => $objectives,
            'projects' => $projects,
            'staff_profiles' => $staff_profiles,
            'departments' => $departments,
            'locations' => $locations,
            'item_types' => $item_types,
            'brands' => $brands,
            'operating_systems' => $operating_systems,
            'harddisks' => $harddisks,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated['asset_number'] = $request->asset_number;
        $validated['serial_number'] = $request->serial_number;
        $validated['asset_name'] = $request->asset_name;
        $validated['asset_status'] = $request->asset_status['id'];
        $validated['asset_group'] = $request->asset_group['id'];
        $validated['asset_date'] = Carbon::create($request->asset_date)->format('Y-m-d');
        $validated['objective'] = $request->objective['id'];
        $validated['project_service'] = $request->project_service['id'];
        $validated['owner'] = $request->owner['id'];
        $validated['department_owner'] = $request->department_owner['id'];
        $validated['location'] = $request->location['id'];
        $validated['asset_type'] = $request->asset_type['id'];
        $validated['brand'] = $request->brand['id'];
        $validated['generation'] = $request->generation;
        $validated['ram_type'] = $request->ram_type['id'];
        $validated['ram_unit'] = $request->ram_unit;
        $validated['asset_os'] = $request->asset_os['id'];
        $validated['harddisk'] = $request->harddisk['id'];

//        return $validated;
        Item::query()->create($validated);

        return redirect()->route('items');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
