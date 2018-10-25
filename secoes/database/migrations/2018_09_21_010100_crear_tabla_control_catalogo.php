<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaControlCatalogo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_catalogo', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('conc_id');
            $table->string('conc_nom_actual',100);
            $table->string('conc_nom_antiguo',100);
            $table->integer('conc_operando');
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
        Schema::dropIfExists('control_catalogo');
    }
}
