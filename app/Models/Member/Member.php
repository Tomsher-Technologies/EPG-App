<?php

namespace App\Models\Member;

use App\Models\Location\Package;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Member extends Model
{
    use HasFactory, Userstamps;

    protected $guarded = ['id'];

    function package()
    {
        return $this->belongsTo(Package::class);
    }
}
