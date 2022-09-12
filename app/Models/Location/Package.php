<?php

namespace App\Models\Location;

use App\Models\Member\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Package extends Model
{
    use HasFactory, Userstamps, SoftDeletes;

    protected $guarded = ['id'];

    function location()
    {
        return $this->belongsToMany(Location::class, 'location_to_package', 'package_id', 'location_id');
    }

    function members()
    {
        return $this->hasMany(Member::class);
    }

    public function getPrice()
    {
        return number_format($this->price, 0, '.', ',');
    }
}
