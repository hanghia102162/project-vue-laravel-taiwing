<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Http\Requests\StorecoursesRequest;
use App\Http\Requests\UpdatecoursesRequest;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecoursesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecoursesRequest $request, courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(courses $courses)
    {
        //
    }
}
