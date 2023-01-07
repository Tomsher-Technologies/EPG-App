<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Common\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberDashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $memeber = $user->member_details;
        $transactions = $user->transaction;
        $transactions->load(['benefit', 'benefit.location']);

        $plan = $memeber->package;
        $remaining_days = $memeber->expiry_date->diffInDays();
        $locations = $transactions->unique('location_id')->count();

        return view('members.dashboard')->with([
            'plan' => $plan->name,
            'lcoations_visited' => $locations,
            'transactions' => $transactions,
            'remaining_days' => $remaining_days,
        ]);
    }

    public function prodileEditView()
    {
        $details = Auth::user()->member_details;
        $countries = Country::all();
        return view('members.profile-edit')->with([
            'details' => $details,
            'countries' => $countries,
        ]);
    }
    public function prodileEdit(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'nationality' => 'required',
            'password' => 'nullable|confirmed|min:6'
        ], [
            'phone.required' => 'Please enter yur phone number',
            'nationality.required' => 'Please select your nationality',
            'password.confirmed' => 'The passwords does not match',
            'password.min' => 'The password must be atleast 6 characters long',
        ]);

        Auth::user()->member_details->update([
            'phone' => $request->phone,
            'nationality' => $request->nationality,
        ]);

        if ($request->password) {
            Auth::user()->update([
                'password' => Hash::make($request->password)
            ]);
        }

        return back()->with([
            'status' => "Profile Updated",
        ]);
    }
}
