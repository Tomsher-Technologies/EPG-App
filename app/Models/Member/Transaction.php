<?php

namespace App\Models\Member;

use App\Models\Benefits\Benefit;
use App\Models\Location\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function member()
    {
        return $this->belongsTo(User::class);
    }

    public function receptionist()
    {
        return $this->belongsTo(User::class, 'id', 'receptionist_id');
    }

    public function benefit()
    {
        return $this->belongsTo(Benefit::class)->withTrashed();
    }
    
    public function location()
    {
        return $this->belongsTo(Location::class)->withTrashed();
    }
}
