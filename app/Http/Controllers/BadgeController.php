<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBadgesRequest;
use App\Http\Requests\UpdateBadgesRequest;
use App\Models\Badges;

class BadgesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBadgesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Badges $badges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBadgesRequest $request, Badges $badges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Badges $badges)
    {
        //
    }
}
