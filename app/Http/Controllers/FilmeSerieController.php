<?php

namespace App\Http\Controllers;

use App\Models\FilmeSerie;
use Illuminate\Http\Request;

class FilmeSerieController extends Controller
{
    public function listar() {
        return FilmeSerie::with(['generos', 'atores', 'episodios' => function($query) {
            $query->where('tipo', 'serie');
        }])->get();
    }

    public function showTitulo($id_filme_serie) {
        return FilmeSerie::with(['generos', 'atores', 'episodios'=> function($query) {
            $query->where('tipo', 'serie');
        }])->findOrFail($id_filme_serie);
    }
}
