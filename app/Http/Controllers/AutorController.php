<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::all();
        return view('autores.index', compact('autores'));
    }

    public function create()
    {
        return view('autores.create');
    }

    public function store(Request $request)
    {
        $autor = Autor::create($request->all());
        return redirect()->route('autores.index');
    }

    // Os outros métodos do controlador de recursos podem ser deixados em branco.
    //...
}
