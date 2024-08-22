<?php

namespace App\Http\Controllers;

use App\Models\CompanyKeypoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyKeypointController extends Controller
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
    public function store(CompanyKeypoint $request)
    {
        DB::transaction(function() use ($request){
            $validated = $request->validated();
            $newDataRecord = CompanyKeypoint::create($validated);
        });
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyKeypoint $companyKeypoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyKeypoint $companyKeypoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyKeypoint $companyKeypoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyKeypoint $companyKeypoint)
    {
        //
    }
}
