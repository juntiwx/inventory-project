<?php

namespace App\Models;

use App\Traits\CSVLoadable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StaffProfile extends Model
{
    use HasFactory, CSVLoadable;

    public function item(): HasOne
    {
        return $this->hasOne(Item::class,'id','staff_profile_id');
    }
}
