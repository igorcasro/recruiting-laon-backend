<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmeSerieAtor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_filme_serie',
        'id_ator_diretor',
    ];

    //Todo: Implement Eloquent ORM to stablish the table connections
}
