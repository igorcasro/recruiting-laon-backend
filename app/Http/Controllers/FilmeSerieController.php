<?php

namespace App\Http\Controllers;

use App\Models\FilmeSerie;
use Illuminate\Http\Request;

class FilmeSerieController extends Controller
{
    public function listar() {
        // $filmesSeries = FilmeSerie::with(['generos', 'atores', 'episodios' => function($query) {
        //     $query->where('tipo', 'serie');
        // }])->get();

        // return response()->json([$filmesSeries], 200);
        dd(FilmeSerie::all());
    }

    public function showTitulo($id_filme_serie) {
        $filmeSerie =  FilmeSerie::with(['generos', 'atores', 'episodios'=> function($query) {
            $query->where('tipo', 'serie');
        }])->findOrFail($id_filme_serie);

        return response()->json($filmeSerie);
    }
}
