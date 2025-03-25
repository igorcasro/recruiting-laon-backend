<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodio', function (Blueprint $table) {
            $table->id('id_episodio');
            $table->string('titulo', 255);
            $table->unsignedInteger('numero_temporada');
            $table->unsignedInteger('numero_episodio');
            $table->unsignedInteger('duracao');
            $table->date('data_lancamento');
            $table->string('sinopse');
            $table->foreignId('id_serie')->constrained('serie', 'id_serie');
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
        Schema::dropIfExists('episodio');
    }
}
