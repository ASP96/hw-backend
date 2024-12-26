<?php

namespace App\Http\Controllers\api\report\rs\services;

use App\Http\Controllers\Controller;
use App\Models\Report\RS\Services\OperationSystem;
use Illuminate\Http\Request;

class OSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return OperationSystem::all()->sortBy('name');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OperationSystem $os)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OperationSystem $os)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OperationSystem $os)
    {
        //
    }
}
