<?php

// app/Http/Controllers/Api/PaisController.php

namespace App\Http\Controllers\Api;

use App\Models\Pais;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaisController extends Controller
{
    public function index()
    {
        return response()->json(Pais::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_de_pais' => 'required|string|max:255',
            'region' => 'required|string|max:255',
        ]);

        $pais = Pais::create($request->all());
        return response()->json($pais, 201);
    }

    public function show(Pais $id)
    {
        $pais = Pais::find($id);
        if (!$pais) {
            return response()->json(['message' => 'Pais not found'], 404);
        }
        return response()->json($pais);
    }

    public function update(Request $request, $id)
    {
        $pais = Pais::findOrFail($id);
        $pais->update($request->all());
        return response()->json($pais, 200);
    }

    public function destroy(Pais $id)
    {
        Pais::destroy($id);
        return response()->json(null, 204);
    }
}
