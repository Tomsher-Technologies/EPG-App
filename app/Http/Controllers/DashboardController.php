<?php

namespace App\Http\Controllers;

use App\Models\Location\Location;
use App\Models\Member\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        $membersCount = Cache::rememberForever('memberCount', function () {
            return Member::count();
        });
        return view('admin.dashboard')
            ->with([
                'membersCount' => $membersCount
            ]);
    }
}
