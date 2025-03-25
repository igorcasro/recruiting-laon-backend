<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmeSerieAtorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_serie_ator', function (Blueprint $table) {
            $table->foreignId('id_filme_serie')->constrained('filme_serie', 'id_filme_serie');
            $table->foreignId('id_ator_diretor')->constrained('ator_diretor', 'id_ator_diretor');
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
        Schema::dropIfExists('filme_serie_ator');
    }
}
