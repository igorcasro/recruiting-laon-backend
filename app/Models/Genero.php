<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_genero';

    protected $fillable = [
        'nome',
    ];

    public function filmesSeries() {
        return $this->belongsToMany(FilmeSerie::class, 'filmes_series_generos', 'id_filme_serie', 'id_filme_serie');
    }
}
