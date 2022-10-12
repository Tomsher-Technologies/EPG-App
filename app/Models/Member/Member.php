<?php

namespace App\Models\Member;

use App\Models\Location\Package;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Member extends Model
{
    use HasFactory, Userstamps;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    function package()
    {
        return $this->belongsTo(Package::class);
    }

    protected $casts = [
        'purchase_date' => 'date',
        'expiry_date' => 'date',
    ];

}
