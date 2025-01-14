<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vendor\VendorStoreRequest;
use App\Http\Resources\VendorResource;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return VendorResource::collection(
            Vendor::with('models')
                ->get()
            ->sortBy('name')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VendorStoreRequest $request)
    {
        $vendor = Vendor::create($request->all());
        return $vendor;
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {
        // dd($vendor);
        return new VendorResource($vendor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VendorStoreRequest $request, Vendor $vendor)
    {
        $vendor->update($request->all());
        return $vendor;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor)
    {
        $id = $vendor->id;
        $vendor->delete();
        return response()->json(
            [
                'message'=> "Vendor ID={$id} has been deleted"
            ]
        );
    }
}
