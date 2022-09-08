<?php

namespace App\Http\Controllers;

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
            return Member::count();
        });

        $stafCount = Cache::rememberForever('recptionistCount',function(){
            return User::whereIs('receptionist')->count();
        });

        return view('admin.dashboard')
            ->with([
                'membersCount' => $membersCount,
                'stafCount' => $stafCount
            ]);
    }
}
