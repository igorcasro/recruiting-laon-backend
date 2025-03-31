<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtorDiretor extends Model
{
    use HasFactory;

    protected $table = 'atores_diretores';
    protected $primaryKey = 'id_ator_diretor';
    protected $fillable = [
        'nome',
        'is_diretor',
    ];

    public function filmeSerie() {
        $this->belongsToMany(FilmeSerie::class, 'filmes_series_atores', 'id_filme_serie', 'id_filme_serie');
    }

    public function filmesDirigidos() {
        $this->hasMany(FilmeSerie::class, 'diretor');
    }
}
