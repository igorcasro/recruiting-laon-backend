<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;

    protected $table = 'episodios';
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
   
    public function serie() {
        // Probably I'll have to pass the 'id_serie' attribute, dont know
        return $this->belongsTo(Serie::class, 'id_serie');
    }
}
