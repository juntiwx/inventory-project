<?php

namespace App\Models;

use App\Traits\CSVLoadable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemType extends Model
{
    use HasFactory, CSVLoadable;

    public function item(): HasMany
    {
        return $this->hasMany(Item::class,'id','item_type_id');
    }
}
