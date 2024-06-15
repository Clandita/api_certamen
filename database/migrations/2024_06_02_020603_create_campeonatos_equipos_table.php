<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campeonatos_equipos', function (Blueprint $table) {
            $table->tinyInteger('posicion')->default(0);
            $table->unsignedBigInteger('equipo_id');
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->unsignedBigInteger('campeonato_id');
            $table->foreign('campeonato_id')->references('id')->on('campeonatos');
            $table->primary(['equipo_id', 'campeonato_id']);
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
        Schema::dropIfExists('campeonatos_equipos');
    }
};
