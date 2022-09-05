<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Member\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Location\Location;
use App\Models\Location\Package;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.members.index');
    }
    // public function index(Request $request)
    // {
    //     $filter_search = $request->search ?? "";

    //     $query = Member::select('*');
    //     if ($filter_search) {
    //         $query->where('name', 'LIKE', '%' . $filter_search . '%')
    //             ->orWhere('email', 'LIKE', '%' . $filter_search . '%')
    //             ->orWhere('phone', 'LIKE', '%' . $filter_search . '%');
    //     }
    //     $query->with('package');

    //     $members = $query->get();

    //     // dd($members);
    //     return view('admin.members.index')
    //         ->with(['members' => $members]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        $member->load(['transaction', 'transaction.location']);
        return view('admin.members.show')->with([
            'member' => $member
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('admin.members.edit')->with([
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemberRequest  $request
     * @param  \App\Models\Member\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
