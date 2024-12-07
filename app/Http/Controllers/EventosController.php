<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\Pais;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Eventos::all();
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
        return Eventos::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Eventos::FindOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evento = Eventos::findOrFail($id);
        $evento->nombre_evento = $request->nombre_evento;
        $evento->fecha_del_evento = $request->fecha_del_evento;
        $evento->update();
        return $evento;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evento = Eventos::findOrFail($id);
        $evento->delete();
    }
}
