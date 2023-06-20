<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function apiIndex()
    {
        $livros = Livro::all();

        return response()->json($livros, 200);
    }

    public function apiShow($id)
    {
        $livro = Livro::find($id);

        if (!$livro) {
            return response()->json(['error' => 'Livro não encontrado'], 404);
        }

        return response()->json($livro, 200);
    }

    public function apiStore(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'ano_publicacao' => 'required|integer',
            'autor_id' => 'required|exists:autors,id',
        ]);

        $livro = Livro::create($validated);

        return response()->json(['message' => 'Livro criado com sucesso', 'livro' => $livro], 201);
    }

    public function apiUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'ano_publicacao' => 'required|integer',
            'autor_id' => 'required|exists:autors,id',
        ]);

        $livro = Livro::find($id);

        if (!$livro) {
            return response()->json(['error' => 'Livro não encontrado'], 404);
        }

        $livro->update($validated);

        return response()->json(['message' => 'Livro atualizado com sucesso', 'livro' => $livro], 200);
    }

    public function apiDestroy($id)
    {
        $livro = Livro::find($id);

        if (!$livro) {
            return response()->json(['error' => 'Livro não encontrado'], 404);
        }

        $livro->delete();

        return response()->json(['message' => 'Livro deletado com sucesso'], 200);
    }
}
