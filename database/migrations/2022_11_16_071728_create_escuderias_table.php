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
        Schema::create('escuderias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('fecha_creacion');
            $table->integer('num_pilotos');
            $table->boolean('sobre_presupuesto');
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
        Schema::dropIfExists('escuderias');
    }
};
