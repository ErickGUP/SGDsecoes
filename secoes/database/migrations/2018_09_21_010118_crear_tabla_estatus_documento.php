<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEstatusDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatus_documento', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('edoc_id');
            $table->string('edoc_descripcion',200);
            $table->unsignedInteger('edoc_conc_id');
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
        Schema::dropIfExists('estatus_documento');
    }
}
