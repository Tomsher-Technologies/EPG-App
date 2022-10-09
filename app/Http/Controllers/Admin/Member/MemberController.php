<?php

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use setasign\Fpdi\Fpdi;

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

    public function printQr(User $member)
    {
        // $qr = URL::to('storage/qr-code/img-' . $member->id . '.svg');

        $qr = storage_path('qr-code/img-' . $member->id . '.svg');

        $qr = Storage::disk('public')->path('qr-code/img-' . $member->id . '.png');

        $cerificate = Storage::disk('public')->path('sample.pdf');
        $pdf = new Fpdi();
        $pdf->setSourceFile($cerificate);
        $tplId = $pdf->importPage(1);
        $size = $pdf->getTemplateSize($tplId);
        // dd($size);
        $pdf->AddPage($size['orientation'], array($size['width'], $size['height']));
        $pdf->SetMargins(0, 0, 0);
        $pdf->SetXY(0, 0);
        $pdf->SetCompression(false);
        $pdf->useTemplate($tplId, null, null, $size['width'], $size['height'], FALSE);
        $pdf->Image($qr, ($size['width'] / 2 ) - 20 , ( $size['height'] / 2) - 20);
        return response($pdf->Output('I', $member->name . '.pdf'))
            ->header('Content-Type', 'application/pdf');
        // $pdf->Output('I', 'generated.pdf');
    }
}
