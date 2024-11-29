<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medallas;
use Illuminate\Http\Request;

class MedallaController extends Controller{
    public function index()
    {
      $medallass=Medallas::all();
      return $medallass;
    }
    public function show(Medallas $id)
    {
      return response()->json($id);
    }
    public function store(Request $request)
    {
      $medallass=Medallas::create([
          'tipo_de_medallas'=>$request->tipo_de_medallas,
          'id_eventos'=>$request->id_eventos,
      ]);
      return response()->json([$medallass]);
    }
    public function update(Request $request,Medallas $id)
    {
     $id->tipo_de_medallas=$request->tipo_de_medallas;
     $id->id_evento=$request->id_evento;
     return response()->json($id);
    }
    public function destroy(Medallas $id)
    {
     $id->delete();
      return response()->json(["REGISTRO ELIMINADO"]);
    }
}
