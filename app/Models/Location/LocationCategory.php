<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationCategory extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $guarded = ['id'];

    public function location()
    {
        return $this->hasMany(Location::class);
    }
}
