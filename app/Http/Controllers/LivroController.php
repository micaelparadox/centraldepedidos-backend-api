<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Autor;

class LivroController extends Controller
{
    public function apiIndex()
    {
        return Livro::all();
    }

    public function apiStore(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'ano_publicacao' => 'required|integer',
            'autor_id' => 'required|exists:autors,id',
        ]);

        $livro = Livro::create($validated);
        return response()->json($livro, 201);
    }

    public function apiUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'ano_publicacao' => 'required|integer',
            'autor_id' => 'required|exists:autors,id',
        ]);

        $livro = Livro::findOrFail($id);
        $livro->update($validated);
        return response()->json($livro, 200);
    }

    public function apiDestroy($id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return response()->json(null, 204);
    }
}
