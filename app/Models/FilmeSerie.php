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

    public function generos() {
        // Passing the arguments like this because I'm using a pivot table called 'filmes_series_generos'
        return $this->belongsToMany(Genero::class, 'filmes_series_generos', 'id_filme_serie', 'id_genero')->withTimestamps();
    }

    public function serie() {
        return $this->hasOne(Serie::class, 'id_serie', 'id_filme_serie');
    }

    public function atores() {
        return $this->belongsToMany(AtorDiretor::class, 'filmes_series_atores', 'id_filme_serie', 'id_ator_diretor')->withTimestamps();
    }

    public function diretor() {
        return $this->belongsTo(AtorDiretor::class, 'id_ator_diretor', 'id_ator_diretor');
    }
}
