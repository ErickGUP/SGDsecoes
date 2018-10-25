<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaHistorialSeguimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_seguimiento', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';

            $table->increments('hist_id');
            $table->unsignedInteger('his_req_id');
            $table->integer('his_uni_id');
            $table->integer('his_folioseguimiento');
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
        Schema::dropIfExists('historial_seguimiento');
    }
}
