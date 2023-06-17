<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'data_nascimento', 'nacionalidade'];

    public function livros()
    {
        return $this->hasMany(Livro::class);
    }
}
