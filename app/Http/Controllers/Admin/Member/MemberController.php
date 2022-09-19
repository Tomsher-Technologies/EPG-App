<?php

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Location\Location;
use App\Models\Location\Package;
use App\Models\User;
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
    public function show(User $member)
    {
        $member->load(['member_details', 'member_details.package', 'member_details.package']);
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
    public function edit(User $member)
    {
        $member->load(['member_details']);
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
    public function update(UpdateMemberRequest $request, User $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $member)
    {
        //
    }

    public function transactions(User $member)
    {
        return view('admin.members.transactions')->with([
            'member' => $member
        ]);
    }

    public function logins(User $member)
    {
        return view('admin.members.logins')->with([
            'member' => $member
        ]);
    }

    public function qrscan($slug)
    {
        $user = User::whereStatus(true)
            ->whereHas('member_details', function ($q) use ($slug) {
                $q->where('slug', $slug);
            })
            ->with('member_details')
            ->firstOrFail();
        return redirect()->route('members.show', $user);
    }
}
