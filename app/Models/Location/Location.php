<?php

namespace App\Models\Location;

use App\Models\Member\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;


class Location extends Model
{
    use HasFactory, Userstamps, SoftDeletes;

    protected $guarded = ['id'];

    function packages()
    {
        return $this->belongsToMany(Package::class, 'location_to_package', 'location_id', 'package_id');
    }
    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'location_id');
    }

    public function receptionists()
    {
        return $this->hasMany(User::class);
    }
}
