<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Item;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Inertia\Inertia;

class DashboardController extends Controller
{

    protected function countYearWithLocations($location, $start, $end): int
    {
        return Item::query()
            ->whereRaw('item_type_id IN (1,2,4,6,21) AND asset_status LIKE "กำลังใช้งาน" AND asset_date IS NOT NULL')
            ->whereIn('location_id', $location)
            ->whereBetween('asset_date', [$start, $end])
            ->count();
    }

    protected function overSevenYearWithLocations($location, $end): int
    {
        return Item::query()
            ->whereRaw('item_type_id IN (1,2,4,6,21) AND asset_status LIKE "กำลังใช้งาน" AND asset_date IS NOT NULL')
            ->whereIn('location_id', $location)
            ->whereDate('asset_date', '<', $end)
            ->count();
    }

    protected function countYearWithOutLocations($start, $end): int
    {
        return Item::query()
            ->whereRaw('item_type_id IN (1,2,4,6,21) AND asset_status LIKE "กำลังใช้งาน" AND asset_date IS NOT NULL')
            ->whereBetween('asset_date', [$start, $end])
            ->count();
    }

    protected function overSevenYearWithOutLocations($end): int
    {
        return Item::query()
            ->whereRaw('item_type_id IN (1,2,4,6,21) AND asset_status LIKE "กำลังใช้งาน" AND asset_date IS NOT NULL')
            ->whereDate('asset_date', '<', $end)
            ->count();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(): \Inertia\Response
    {

        /**
         * computer with location
         */

        //for location muic building
        $location_muic_building = Location::query()
            ->whereRaw('building_name LIKE "building_1" OR
                        building_name LIKE "building_2" OR
                        building_name LIKE "building_3" OR
                        building_name LIKE "hld"')
            ->pluck('id');

        //for location aditayathorn building
        $location_aditayathorn_building = Location::query()
            ->whereRaw('building_name LIKE "aditayathorn"')
            ->pluck('id');

        //for location other building
        $location_other_building = Location::query()
            ->whereRaw('building_name LIKE "other"')
            ->pluck('id');

        $computer_with_location = [
            'computers_both_buildings' => Item::query()->whereRaw('item_type_id IN (1,2,4,6,21) AND asset_status LIKE "กำลังใช้งาน"')->count(),
            'pc_muic_building' => Item::query()->whereRaw('item_type_id = 1 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_muic_building)->count(),
            'notebooks_muic_building' => Item::query()->whereRaw('item_type_id = 2 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_muic_building)->count(),
            'monitors_muic_building' => Item::query()->whereRaw('item_type_id = 4 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_muic_building)->count(),
            'all_in_one_muic_building' => Item::query()->whereRaw('item_type_id = 6 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_muic_building)->count(),
            'workstations_muic_building' => Item::query()->whereRaw('item_type_id = 21 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_muic_building)->count(),
            'count_muic_building' => Item::query()->whereRaw('item_type_id IN (1,2,4,6,21) AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_muic_building)->count(),
            'pc_aditayathorn_building' => Item::query()->whereRaw('item_type_id = 1 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_aditayathorn_building)->count(),
            'notebooks_aditayathorn_building' => Item::query()->whereRaw('item_type_id = 2 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_aditayathorn_building)->count(),
            'monitors_aditayathorn_building' => Item::query()->whereRaw('item_type_id = 4 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_aditayathorn_building)->count(),
            'all_in_one_aditayathorn_building' => Item::query()->whereRaw('item_type_id = 6 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_aditayathorn_building)->count(),
            'workstations_aditayathorn_building' => Item::query()->whereRaw('item_type_id = 21 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_aditayathorn_building)->count(),
            'count_aditayathorn_building' => Item::query()->whereRaw('item_type_id IN (1,2,4,6,21) AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_aditayathorn_building)->count(),
            'pc_other_building' => Item::query()->whereRaw('item_type_id = 1 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_other_building)->count(),
            'notebooks_other_building' => Item::query()->whereRaw('item_type_id = 2 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_other_building)->count(),
            'monitors_other_building' => Item::query()->whereRaw('item_type_id = 4 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_other_building)->count(),
            'all_in_one_other_building' => Item::query()->whereRaw('item_type_id = 6 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_other_building)->count(),
            'workstations_other_building' => Item::query()->whereRaw('item_type_id = 21 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_other_building)->count(),
            'count_other_building' => Item::query()->whereRaw('item_type_id IN (1,2,4,6,21) AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location_id', $location_other_building)->count(),
        ];

        /**
         * computer count
         */
        $computers = [
            'all_inventory' => Item::query()->count(),
            'pc' => Item::query()->whereRaw('item_type_id = 1 AND asset_status LIKE "กำลังใช้งาน"')->count(),
            'notebooks' => Item::query()->whereRaw('item_type_id = 2 AND asset_status LIKE "กำลังใช้งาน"')->count(),
            'monitors' => Item::query()->whereRaw('item_type_id = 4 AND asset_status LIKE "กำลังใช้งาน"')->count(),
            'all_in_one' => Item::query()->whereRaw('item_type_id = 6 AND asset_status LIKE "กำลังใช้งาน"')->count(),
            'workstations' => Item::query()->whereRaw('item_type_id = 21 AND asset_status LIKE "กำลังใช้งาน"')->count(),
        ];


        /**
         * computer with years
         */


        $computers_with_departments = [];
        $query_departments = Department::query()->get();

        $now = Carbon::now()->format('Y-m-d');
        $three = Carbon::now()->subYears(3)->format('Y-m-d');
        $five = Carbon::now()->subYears(5)->format('Y-m-d');
        $seven = Carbon::now()->subYears(7)->format('Y-m-d');

        $asset_computer_with_asset_date_count = Item::query()->whereRaw('item_type_id IN (1,2,4,6,21) AND asset_status LIKE "กำลังใช้งาน" AND asset_date IS NOT NULL')->count();

//        dd($asset_computer_with_asset_date_count);
        $count_year_computer = [
            'less_three_years' => $this->countYearWithOutLocations($three, $now),
            'three_years' => $this->countYearWithOutLocations($five, $three),
            'five_years' => $this->countYearWithOutLocations($seven, $five),
            'seven_years' => $this->overSevenYearWithOutLocations($seven),
        ];

        $year_computer_for_building = [
            'less_three_years_computer_muic_building' => $this->countYearWithLocations($location_muic_building, $three, $now),
            'three_years_computer_muic_building' => $this->countYearWithLocations($location_muic_building, $five, $three),
            'five_years_computer_muic_building' => $this->countYearWithLocations($location_muic_building, $seven, $five),
            'sever_years_computer_muic_building' => $this->overSevenYearWithLocations($location_muic_building, $seven),
            'less_three_years_computer_aditayathorn_building' => $this->countYearWithLocations($location_aditayathorn_building, $three, $now),
            'three_years_computer_aditayathorn_building' => $this->countYearWithLocations($location_aditayathorn_building, $five, $three),
            'five_years_computer_aditayathorn_building' => $this->countYearWithLocations($location_aditayathorn_building, $seven, $five),
            'sever_years_computer_aditayathorn_building' => $this->overSevenYearWithLocations($location_aditayathorn_building, $seven),
            'less_three_years_computer_other_building' => $this->countYearWithLocations($location_other_building, $three, $now),
            'three_years_computer_other_building' => $this->countYearWithLocations($location_other_building, $five, $three),
            'five_years_computer_other_building' => $this->countYearWithLocations($location_other_building, $seven, $five),
            'sever_years_computer_other_building' => $this->overSevenYearWithLocations($location_other_building, $seven),
        ];

        /*$tmp = [];
        for ($i = 0; $i < $query_departments->count(); $i++) {
            $tmp['id'] = $query_departments[$i]['id'];
            $computers_with_departments[] = $tmp;
        }
        dd($computers_with_departments);*/

        return Inertia::render('App',[
            'computer_with_location' => $computer_with_location,
            'computers' => $computers,
            'count_year_computer' => $count_year_computer,
            'year_computer_for_building' => $year_computer_for_building,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
