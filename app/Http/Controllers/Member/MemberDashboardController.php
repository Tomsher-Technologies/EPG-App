<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberDashboardController extends Controller
{
    public function dashboard()
    {
        return view('members.dashboard');
    }
}
