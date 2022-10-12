<?php

namespace App\Models;

use App\Models\Location\Location;
use App\Models\Location\Package;
use App\Models\Member\Member;
use App\Models\Member\Purchase;
use App\Models\Member\Transaction;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\URL;
use Laravel\Sanctum\HasApiTokens;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Wildside\Userstamps\Userstamps;
use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRolesAndAbilities, SoftDeletes, Userstamps, AuthenticationLoggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'status',
        'location_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'purchase_date' => 'datetime',
        'expiry_date' => 'datetime',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function member_details()
    {
        return $this->hasOne(Member::class);
    }

    function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function getQRUrl()
    {
        return URL::to('/storage/qr-code/img-' . $this->id . '.svg');
    }

    public function getExpiryDateString()
    {
        return $this->created_at->diffInDays($this->created_at->add('1 Y'));
    }

    public function getFullNameAttribute()
    {
        return $this->name . " " . $this->last_name;
    }
}
