<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizationStoreRequest;
use App\Http\Resources\OrganizationResource;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return OrganizationResource::collection(
            Organization::where('parent_id', '=', null)
            ->orderBy('name')
            ->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrganizationStoreRequest $request)
    {
        $organization = Organization::create($request->all());
        return $organization;
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        return new OrganizationResource($organization);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizationStoreRequest $request, Organization $organization)
    {
        $organization->update($request->all());
        return $organization;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        $id = $organization->id;
        // die($organization->children()->count());
        $child_count = $organization->children()->count();
        if ($child_count > 0)
        {
            return response()->json(
                [
                    'message'=> "Organization ID={$id} has children organization ({$child_count}). Remove imposssible."
                ],
                405
            );
        }
        //$organization->delete();
        return response()->json(
            [
                'message'=> "Organization ID={$id} has been deleted"
            ]
        );
    }
}
