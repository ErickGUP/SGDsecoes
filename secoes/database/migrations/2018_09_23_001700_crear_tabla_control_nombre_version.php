<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaControlNombreVersion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_nombre_version', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('cnv_id');
            $table->string('cnv_nom_actual',100);
            $table->string('cnv_nom_antiguo',100);
            $table->string('cnv_tipo',100);
            $table->integer('cnv_operando');
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
        Schema::dropIfExists('control_nombre_version');
    }
}
