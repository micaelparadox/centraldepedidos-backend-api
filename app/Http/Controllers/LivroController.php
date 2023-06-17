<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Autor;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        $autores = Autor::all();
        return view('livros.create', compact('autores'));
    }

    public function store(Request $request)
    {
        $livro = Livro::create($request->all());
        return redirect()->route('livros.index');
    }

    // Os outros métodos do controlador de recursos podem ser deixados em branco.
    //...
}
