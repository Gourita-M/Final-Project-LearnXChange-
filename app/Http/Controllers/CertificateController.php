<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCertificatesRequest;
use App\Http\Requests\UpdateCertificatesRequest;
use App\Models\Certificates;

class CertificatesController extends Controller
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
    public function store(StoreCertificatesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificates $certificates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificatesRequest $request, Certificates $certificates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificates $certificates)
    {
        //
    }
}
