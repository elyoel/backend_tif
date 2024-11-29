<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Disciplinas;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
      public function index()
  {
    $disciplinas=Disciplinas::all();
    return $disciplinas;
  }
  public function show(Disciplinas $id)
  {
    return response()->json($id);
  }
  public function store(Request $request)
  {
    $disciplinas=Disciplinas::create([
        'nombre_disciplina'=>$request->nombre_disciplinas,
        'tipo_de_disciplina'=>$request->tipo_de_disciplinas,
    ]);
    return response()->json([$disciplinas]);
  }
  public function update(Request $request,Disciplinas $id)
  {
   $id->nombre_disciplinas=$request->nombre_disciplinas;
   $id->tipo_de_disciplinas=$request->tipo_de_disciplinas;
  }
  public function destroy(Disciplinas $id)
  {
   $id->delete();
    return response()->json(["REGISTRO ELIMINADO"]);
  }
}
