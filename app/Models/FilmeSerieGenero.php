<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmeSerieGenero extends Model
{
    use HasFactory;

    protected $table = 'filmes_series_generos';

    protected $fillable = [
        'id_filme_serie',
        'id_genero'
    ];

    //Todo: Implement Eloquent ORM to stablish the table connections
}
