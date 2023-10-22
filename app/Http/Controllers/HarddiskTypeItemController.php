<?php

namespace App\Http\Controllers;

use App\Models\HarddiskType;
use Inertia\Inertia;

class HarddiskTypeItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(): \Inertia\Response
    {
        $harddisks = HarddiskType::query()->get()->transform(function ($harddisk) {
            return [
                'id' => $harddisk->id,
                'harddisk_type' => $harddisk->harddisk_type,
                'harddisk_unit' => $harddisk->harddisk_unit,
            ];
        });

        return Inertia::render('Inventory/HarddiskTypeTable', [
            'harddisks' => $harddisks
        ]);
    }
}
