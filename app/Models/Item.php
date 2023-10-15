<?php

namespace App\Models;

use App\Traits\CSVLoadable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory, CSVLoadable;

    protected $fillable = [
        'asset_number',
        'serial_number',
        'asset_name',
        'asset_status',
        'asset_group',
        'asset_date',
        'objective',
        'project_service',
        'owner',
        'department_owner',
        'location',
        'asset_type',
        'brand',
        'generation',
        'ram_type',
        'ram_unit',
        'asset_os',
        'harddisk',
    ];

}
