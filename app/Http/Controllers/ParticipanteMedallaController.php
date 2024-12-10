<?php

namespace App\Http\Controllers;

use App\Models\Participante_Medalla;
use Illuminate\Http\Request;

class ParticipanteMedallaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Participante_Medalla::all();
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
        return  Participante_Medalla::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Participante_Medalla::findOrFail($id);
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
        $participante = Participante_Medalla::findOrFail($id);
        $participante->id_participantes = $request->id_participantes;
        $participante->id_medallas = $request->id_medallas;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $participante = Participante_Medalla::findOrFail($id);
        $participante->delete();
    }
}
