<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_episodio';

    protected $fillable = [
        'titulo',
        'numero_temporada',
        'numero_episodio',
        'duracao',
        'data_lancamento',
        'sinopse',
        'id_serie',
    ];

    //Todo: Implement Eloquent ORM to stablish the table connections
}
