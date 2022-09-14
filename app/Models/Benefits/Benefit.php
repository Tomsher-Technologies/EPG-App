<?php

namespace App\Models\Benefits;

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
        return $this->belongsToMany(Package::class,'benefits_packages');
    }
}
