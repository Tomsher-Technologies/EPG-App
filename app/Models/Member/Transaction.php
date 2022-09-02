<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
