<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutoresTableSeeder extends Seeder
{
    public function run()
    {
        Autor::create([
            'nome' => 'George R. R. Martin',
            'data_nascimento' => '1948-09-20',
            'nacionalidade' => 'Americano',
        ]);

        // Adicione mais autores conforme necessário...
    }
}
