<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Location\LocationCategory;
use App\Http\Requests\StoreLocationCategoryRequest;
use App\Http\Requests\UpdateLocationCategoryRequest;

class LocationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.location.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLocationCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocationCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location\LocationCategory  $locationCategory
     * @return \Illuminate\Http\Response
     */
    public function show(LocationCategory $locationCategory)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location\LocationCategory  $locationCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(LocationCategory $locationCategory)
    {
        return view('admin.location.category.edit')->with('locationCategory', $locationCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocationCategoryRequest  $request
     * @param  \App\Models\Location\LocationCategory  $locationCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocationCategoryRequest $request, LocationCategory $locationCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location\LocationCategory  $locationCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocationCategory $locationCategory)
    {
        //
    }
}
