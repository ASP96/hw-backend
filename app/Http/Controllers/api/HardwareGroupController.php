<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\HardwareGroupStoreRequest;
use App\Http\Resources\HardwareGroupResource;
use App\Models\HardwareGroup;
use Illuminate\Http\Request;

class HardwareGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return HardwareGroupResource::collection(
            HardwareGroup::where('parent_id', '=', null)
            ->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $hardwareGroup = HardwareGroup::create($request->all());
        
        return $hardwareGroup;
    }

    /**
     * Display the specified resource.
     */
    public function show(HardwareGroup $hardwareGroup)
    {
        return new HardwareGroupResource($hardwareGroup);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(HardwareGroupStoreRequest $request, HardwareGroup $hardwareGroup)
    {
        $hardwareGroup->update($request->all());
        return ($hardwareGroup);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HardwareGroup $hardwareGroup)
    {
        $id = $hardwareGroup->id;
        $hardwareGroup->delete();
        return response()->json(
            [
                'message'=> "HardwareGroup ID={$id} has been deleted"
            ]
        );
    }
}
