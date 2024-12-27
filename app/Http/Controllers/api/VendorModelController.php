<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vendor\ModelStoreRequest;
use App\Http\Resources\VendorModelResource;
use App\Http\Resources\VendorResource;
use App\Models\Vendor;
use App\Models\VendorModel;
use Illuminate\Http\Request;

class VendorModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Vendor $vendor)
    {   
        return VendorModelResource::collection(
            $vendor->models
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModelStoreRequest $request, Vendor $vendor)
    {
        $model = $vendor->models()->create($request->all());
        return $model;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Vendor $vendor, VendorModel $model)
    {
        return new VendorModelResource($model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModelStoreRequest $request, Vendor $vendor, VendorModel $model)
    {
        $model->update($request->all());
        return $model;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor, VendorModel $model)
    {
        dd($model);
        $id = $model->id;
        $model->delete();
        return response()->json(
            [
                'message'=> 'Model ID='.$id .' has been deleted'
            ],
            204
        );
    }
}
