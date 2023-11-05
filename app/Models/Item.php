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

    public function locationName(): Attribute
    {
        return Attribute::make(
            get: fn() => '(' . $this->location['id'] . ') - ' . $this->location['building_name'] .' : '. $this->location['room_name'],
        );
    }

    public function projectType(): BelongsTo
    {
        return $this->belongsTo(ProjectType::class);
    }

    public function projectTypeName(): Attribute
    {
        return Attribute::make(
            get: fn() => '(' . $this->projectType['id'] . ') - ' . $this->projectType['name_th'],
        );
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function departmentName(): Attribute
    {
        return Attribute::make(
            get: fn() => '(' . $this->department['id'] . ') - ' . $this->department['name_th'],
        );
    }

    public function profile()
    {
        return $this->belongsTo(StaffProfile::class,'staff_profile_id','id');
    }

    public function owners(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->profile !== NULL ? '(' . $this->profile->code . ') - ' . $this->profile->name_th . ' ' . $this->profile->surname_th
                : '',
        );
    }

    public function type()
    {
        return $this->belongsTo(ItemType::class,'item_type_id','id');
    }

    public function typeName(): Attribute
    {
        return Attribute::make(
            get: fn() => '(' . $this->type->id . ') - ' . $this->type->name_th,
        );
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function brandName(): Attribute
    {
        return Attribute::make(
            get: fn() => '(' . $this->brand->id . ') - ' . $this->brand->brand_name,
        );
    }

    public function os()
    {
        return $this->belongsTo(OperatingSystem::class,'os_id','id');
    }

    public function osName(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->os !== NULL ? '(' . $this->os->id . ') - ' . $this->os->os_name
                : '',
        );
    }

}
