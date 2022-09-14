<?php

namespace App\Http\Controllers\Admin\Benefits;

use App\Http\Controllers\Controller;
use App\Models\Benefits\Benefit;
use App\Http\Requests\StoreBenefitRequest;
use App\Http\Requests\UpdateBenefitRequest;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.benifits.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.benifits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBenefitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBenefitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Benefits\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function show(Benefit $benefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Benefits\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function edit(Benefit $benefit)
    {
        return view('admin.benifits.edit')
            ->with([
                'benefit' => $benefit
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBenefitRequest  $request
     * @param  \App\Models\Benefits\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBenefitRequest $request, Benefit $benefit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Benefits\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Benefit $benefit)
    {
        //
    }
}
