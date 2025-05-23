<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmesSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes_series', function (Blueprint $table) {
            $table->id('id_filme_serie');
            $table->enum('status',  ['ativo','inativo'])->default('ativo');
            $table->unsignedInteger('ano_lancamento');
            $table->foreignId('id_ator_diretor')
            ->constrained('atores_diretores', 'id_ator_diretor');
            $table->string('titulo_original', 255);
            $table->string('titulo_traduzido', 255);
            $table->text('sinopse');
            $table->unsignedInteger('duracao');
            $table->enum('tipo', ['filme', 'serie'])->default('filme');
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
        Schema::dropIfExists('filmes_series');
    }
}
