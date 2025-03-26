<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtorDiretor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ator_diretor';

    protected $fillable = [
        'nome',
        'is_diretor',
    ];

    //Todo: Implement Eloquent ORM to stablish the tables connections
}
