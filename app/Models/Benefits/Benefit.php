<?php

namespace App\Models\Benefits;

use App\Models\Location\Location;
use App\Models\Location\Package;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Benefit extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    protected $guarded = ['id'];

    public function package()
    {
        return $this->belongsToMany(Package::class, 'benefits_packages');
    }

    public function location()
    {
        return $this->belongsTo(Location::class,'location_id')->withTrashed();
    }

    public function isLimited()
    {
        return $this->validity_type == 'limited';
    }
    
    public function isUnlimited()
    {
        return $this->validity_type == 'unlimited';
    }
}
