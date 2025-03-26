<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    //Since the id comes from the filmes_series table, the PK cannot autoincrement
    public $incrementing = false;
    protected $primaryKey = 'id_serie';

    protected $fillable = [
        'id_serie',
        'numero_temporadas',
    ];

    //Todo: Implement Eloquent ORM to stablish the table connections
}
