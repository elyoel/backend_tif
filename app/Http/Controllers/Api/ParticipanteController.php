<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Participantes;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
  public function index()
  {
    $participantes=Participantes::all();
    return $participantes;
  }
  public function show(Participantes $id)
  {
    return response()->json($id);
  }
  public function store(Request $request)
  {
    $participantes=Participantes::create([
        'nombre'=>$request->nombre,
        'apellido'=>$request->apellido,
        'edad'=>$request->edad,
    ]);
    return response()->json([$participantes]);
  }
  public function update(Request $request,Participantes $id)
  {
   $id->nombre=$request->nombre;
   $id->apellido=$request->apellido;
   $id->edad=$request->edad;
  }
  public function destroy(Participantes $id)
  {
   $id->delete();
    return response()->json(["REGISTRO ELIMINADO"]);
  }
}
