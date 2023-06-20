<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function apiIndex()
    {
        return Autor::all();
    }

    public function apiStore(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'data_nascimento' => 'required|date',
            'nacionalidade' => 'required|max:255',
        ]);

        $autor = Autor::create($validated);
        return response()->json($autor, 201);
    }

    public function apiUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'data_nascimento' => 'required|date',
            'nacionalidade' => 'required|max:255',
        ]);

        $autor = Autor::findOrFail($id);
        $autor->update($validated);
        return response()->json($autor, 200);
    }

    public function apiDestroy($id)
    {
        $autor = Autor::findOrFail($id);
        $autor->delete();
        return response()->json(null, 204);
    }
}
