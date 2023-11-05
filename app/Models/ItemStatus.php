<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemStatus extends Model
{
    use HasFactory;

    public function item(): HasMany
    {
        return $this->hasMany(Item::class,'id','item_status_id');
    }
}
