<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilacticaStoreRequest;
use App\Http\Resources\ProfilacticaResource;
use App\Models\Profilactica;
use Illuminate\Http\Request;

class ProfilacticaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProfilacticaResource::collection(
            Profilactica::orderBy('name')
            ->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfilacticaStoreRequest $request)
    {
        $profilactica = Profilactica::create($request->all());
        return $profilactica;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Profilactica $profilactica)
    {
        return new ProfilacticaResource($profilactica);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(ProfilacticaStoreRequest $request, Profilactica $profilactica)
    {
        $profilactica->update($request->all());
        return $profilactica;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profilactica $profilactica)
    {
        $id = $profilactica->id;
        
        $profilactica->delete();
        return response()->json(
            [
                'message'=> "Profilactica ID={$id} has been deleted"
            ]
        );
    }
}
