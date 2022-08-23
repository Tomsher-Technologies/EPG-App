<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;


class Location extends Model
{
    use HasFactory, Userstamps;

    protected $guarded = ['id'];

    function packages()
    {
        return $this->belongsToMany(Package::class, 'location_to_package', 'location_id', 'package_id');
    }
}
