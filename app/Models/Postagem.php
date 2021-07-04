<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    use HasFactory;

    protected $fillable=['titulo', 'autor', 'conteudo']; //os valores que podem ser preenchidos pelo usuário
}
