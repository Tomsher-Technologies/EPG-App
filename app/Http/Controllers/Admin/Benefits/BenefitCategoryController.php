<?php

namespace App\Http\Controllers\Admin\Benefits;

use App\Http\Controllers\Controller;
use App\Models\Benefits\BenefitCategory;
use App\Http\Requests\StoreBenefitCategoryRequest;
use App\Http\Requests\UpdateBenefitCategoryRequest;

class BenefitCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.benifits.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.benifits.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBenefitCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBenefitCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Benefits\BenefitCategory  $benefitCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BenefitCategory $benefitCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Benefits\BenefitCategory  $benefitCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BenefitCategory $category)
    {
        return view('admin.benifits.category.edit')->with([
            'benefitCategory' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBenefitCategoryRequest  $request
     * @param  \App\Models\Benefits\BenefitCategory  $benefitCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBenefitCategoryRequest $request, BenefitCategory $benefitCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Benefits\BenefitCategory  $benefitCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BenefitCategory $benefitCategory)
    {
        //
    }
}
