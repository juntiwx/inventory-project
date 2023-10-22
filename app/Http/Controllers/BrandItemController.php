<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BrandItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(): \Inertia\Response
    {
        $brands = Brand::query()->get()->transform(function ($brand) {
            return [
                'id' => $brand->id,
                'brand_name' => $brand->brand_name,
            ];
        });

        return Inertia::render('Inventory/BrandTable', [
            'brands' => $brands
        ]);
    }
}
