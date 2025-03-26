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

    //Todo: Implement Eloquent ORM to stablish the table connections
}
