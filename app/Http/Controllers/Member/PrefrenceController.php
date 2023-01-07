<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Location\Location;
use App\Models\Member\Preference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrefrenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        $preference = Auth::user()->preference()->latest()->with('location')->get();

        return view('members.preference')->with([
            'locations' => $locations,
            'preference' => $preference,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        return view('members.preference-add')->with([
            'locations' => $locations,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required',
            'preference' => 'required|min:5',
        ], [
            'location.required' => "Please select a location",
            'preference.required' => "Please enter your preference",
            'preference.min' => "Please elaborate your preference",
        ]);

        $preference = Auth()->user()->preference()->create([
            'location_id' => $request->location,
            'preference' => $request->preference,
        ]);

        return redirect()->route('member.preference.index')->with([
            'status' => "Preference create"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Preference $preference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Preference $preference)
    {
        $locations = Location::all();
        return view('members.preference-edit')->with([
            'locations' => $locations,
            'preference' => $preference,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preference $preference)
    {
        $request->validate([
            'location' => 'required',
            'preference' => 'required|min:5',
        ], [
            'location.required' => "Please select a location",
            'preference.required' => "Please enter your preference",
            'preference.min' => "Please elaborate your preference",
        ]);

        $preference->update([
            'preference' => $request->preference,
            'location_id' => $request->location,
        ]);

        return redirect()->route('member.preference.index')->with([
            'status' => "Preference updated"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preference $preference)
    {
        $preference->delete();
        return back()->with([
            'status' => "Preference Deleted",
        ]);
    }
}
