<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmeSerieGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_serie_genero', function (Blueprint $table) {
            $table->foreignId('id_filme_serie')->constrained('filme_serie', 'id_filme_serie');
            $table->foreignId('id_genero')->constrained('genero', 'id_genero');
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
        Schema::dropIfExists('filme_serie_genero');
    }
}
