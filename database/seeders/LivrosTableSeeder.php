<?php

namespace Database\Seeders;

use App\Models\Livro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivrosTableSeeder extends Seeder
{
    public function run()
    {
        Livro::create([
            'titulo' => 'A Game of Thrones',
            'ano_publicacao' => 1996,
            'autor_id' => 1, // Supondo que George R. R. Martin é o primeiro autor na tabela de autores.
        ]);

        // Adicione mais livros conforme necessário...
    }
}
