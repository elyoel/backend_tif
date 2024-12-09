<?php

namespace App\Http\Controllers;

use App\Models\Medallas;
use Illuminate\Http\Request;

class MedallasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Medallas::all();
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
    public function store(Request $request)
    {
        return Medallas::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Medallas::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $medalla = Medallas::findOrFail($id);
        $medalla->tipo_de_medalla = $request->tipo_de_medalla;
        $medalla->id_evento= $request->id_evento;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medalla = Medallas::findOrFail($id);
        $medalla->delete();
    }
}
