<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmeSerie extends Model
{
    use HasFactory;

    protected $table = 'filmes_series';
    protected $primaryKey = 'id_filme_serie';

    protected $fillable = [
        'status',
        'ano_lancamento',
        'id_ator_diretor',
        'titulo_original',
        'titulo_traduzido',
        'sinopse',
        'duracao',
        'tipo',
    ];

    protected $attributes = [
        'status' => 'ativo',
        'tipo' => 'filme',
    ];

    //Todo: Implement Eloquent ORM to stablish the table connections
}
