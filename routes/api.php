<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeSerieController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Rotas públicas
Route::post('/cadastrar', [UsuarioController::class, 'cadastrar']);
Route::post('/login', [UsuarioController::class, 'login']);


// Rotas autenticadas
Route::middleware('auth-sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/filmes-series', [FilmeSerieController::class, 'listar']);
    Route::get('/filmes-series/{id_filme_serie}', [FilmeSerieController::class, 'showTitulo']);

    Route::post('/logout', [UsuarioController::class, 'sair']);
});

// Rotas para Filmes/Series
