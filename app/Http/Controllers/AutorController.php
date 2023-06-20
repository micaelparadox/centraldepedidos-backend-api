<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function apiIndex()
    {
        $autores = Autor::all();

        return response()->json($autores, 200);
    }

    public function apiShow($id)
    {
        $autor = Autor::find($id);

        if (!$autor) {
            return response()->json(['error' => 'Autor não encontrado'], 404);
        }

        return response()->json($autor, 200);
    }

    public function apiStore(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'data_nascimento' => 'required|date',
            'nacionalidade' => 'required|max:255',
        ]);

        $autor = Autor::create($validated);

        return response()->json(['message' => 'Autor criado com sucesso', 'autor' => $autor], 201);
    }

    public function apiUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'data_nascimento' => 'required|date',
            'nacionalidade' => 'required|max:255',
        ]);

        $autor = Autor::find($id);

        if (!$autor) {
            return response()->json(['error' => 'Autor não encontrado'], 404);
        }

        $autor->update($validated);

        return response()->json(['message' => 'Autor atualizado com sucesso', 'autor' => $autor], 200);
    }

    public function apiDestroy($id)
    {
        $autor = Autor::find($id);

        if (!$autor) {
            return response()->json(['error' => 'Autor não encontrado'], 404);
        }

        $autor->delete();

        return response()->json(['message' => 'Autor deletado com sucesso'], 200);
    }
}
