<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location\Location;
use App\Models\Member\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        $membersCount = Cache::rememberForever('memberCount', function () {
            return User::whereIs('member')->count();
        });

        $stafCount = Cache::rememberForever('recptionistCount', function () {
            return User::whereIs('receptionist')->count();
        });

        $locationCount = Cache::rememberForever('locationCount', function () {
            return Location::count();
        });

        $recentMembers = Cache::rememberForever('recentMembers', function () {
            return User::whereIs('member')->latest()->with('member_details')->limit(10)->get();
        });

        return view('admin.dashboard')
            ->with([
                'membersCount' => $membersCount,
                'locationCount' => $locationCount,
                'stafCount' => $stafCount,
                'recentMembers' => $recentMembers,
            ]);
    }
}
