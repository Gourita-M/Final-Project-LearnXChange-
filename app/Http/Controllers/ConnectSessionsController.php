<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeconnect_sessionsRequest;
use App\Http\Requests\Updateconnect_sessionsRequest;
use App\Models\connect_sessions;

class ConnectSessionsController extends Controller
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
    public function store(Storeconnect_sessionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(connect_sessions $connect_sessions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateconnect_sessionsRequest $request, connect_sessions $connect_sessions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(connect_sessions $connect_sessions)
    {
        //
    }
}
