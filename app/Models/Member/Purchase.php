<?php

namespace App\Models\Member;

use App\Models\Location\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    
    public function member()
    {
        return $this->belongsTo(User::class);
    }
}
