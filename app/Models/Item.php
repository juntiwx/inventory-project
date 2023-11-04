<?php

namespace App\Models;

use App\Traits\CSVLoadable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'objective_id',
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

    public function objective(): BelongsTo
    {
        return $this->belongsTo(Objective::class);
    }

    public function objectiveName() :Attribute
    {
        return Attribute::make(
            get: fn() => '(' . $this->objective['id'] . ') - ' . $this->objective['name_th'],
        );
    }

    public function itemDate() :Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::parse($this->asset_date)->format('d-m-Y'),
        );
    }

    public function itemGroup() :Attribute
    {
        return Attribute::make(
            get: fn() => $this->asset_group === 'buy' || $this->asset_group === 'Buy' ? "เครื่องซื้อ"
                : 'เครื่องสัญญาเช่า',
        );
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function LocationName() :Attribute
    {
        return Attribute::make(
            get: fn() => '(' . $this->location['id'] . ') - ' . $this->location['building_name'] .' : '. $this->location['room_name'],
        );
    }

    public function staffProfile(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(StaffProfile::class, 'owner', 'code');
    }

    public function owners(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->staffProfile !== NULL ? '(' . $this->staffProfile->code . ') - ' . $this->staffProfile->name_thai . ' ' . $this->staffProfile->surname_thai
                : '',
        );
    }

    public function departments()
    {
        return $this->belongsTo(Department::class, 'department_owner', 'id');
    }



    public function ownerDepartment()
    {
        return Attribute::make(
            get: fn() => $this->department !== NULL ? '(' . $this->department->id . ') - ' . $this->department->name_thai
                : '',
        );
    }

}
