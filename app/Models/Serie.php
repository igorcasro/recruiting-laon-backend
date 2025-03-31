<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $table = 'series';
    //Since the id comes from the filmes_series table, the PK cannot autoincrement
    public $incrementing = false;
    protected $primaryKey = 'id_serie';

    protected $fillable = [
        'id_serie',
        'numero_temporadas',
    ];

    public function filmeSerie() {
        return $this->belongsTo(FilmeSerie::class, 'id_filme_serie', 'id_serie');
    }

    public function episodios() {
        return $this->hasMany(Episodio::class, 'id_episodio');
    }
}
