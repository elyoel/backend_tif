<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Eventos;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
      $eventos=Eventos::all();
      return $eventos;
    }
    public function show(Eventos $id)
    {
      return response()->json($id);
    }
    public function store(Request $request)
    {
      $eventos=Eventos::create([
          'nombre_evento'=>$request->nombre_evento,
          'fecha_evento'=>$request->fecha_evento,
      ]);
      return response()->json([$eventos]);
    }
    public function update(Request $request,Eventos $id)
    {
     $id->nombre_evento=$request->nombre_evento;
     $id->fecha_evento=$request->fecha_evento;
     return response()->json($id);
    }
    public function destroy(Eventos $id)
    {
     $id->delete();
      return response()->json(["REGISTRO ELIMINADO"]);
    }
}
