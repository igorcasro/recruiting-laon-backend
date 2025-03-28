<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmesSeriesAtoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes_series_atores', function (Blueprint $table) {
            // Inserting the column id to avoid conflict on the model for not having a PK
            // It seems like Laravel can handle well with a table without PK, so, let's give it a try
            // $table->id();
            $table->foreignId('id_filme_serie')->constrained('filmes_series', 'id_filme_serie');
            $table->foreignId('id_ator_diretor')->constrained('atores_diretores', 'id_ator_diretor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmes_series_atores');
    }
}
