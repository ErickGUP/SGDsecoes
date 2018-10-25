<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaControlCargo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_cargo', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('concar_id');
            $table->string('concar_nombre_actual',100);
            $table->string('concar_nombre_antiguo',100);
            $table->integer('concar_operando');


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
        Schema::dropIfExists('control_cargo');
    }
}
