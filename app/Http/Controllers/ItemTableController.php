<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ItemTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(): \Inertia\Response
    {
        $asset_computers = Item::query()->get()->transform(function ($asset_computer){
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
                'owner' => $asset_computer->owner,
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

        return Inertia::render('ItemTable',[
            'asset_computers' => $asset_computers
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
