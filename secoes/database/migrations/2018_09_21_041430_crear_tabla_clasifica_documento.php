<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaClasificaDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasifica_documento', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('clas_id');
            $table->string('clas_descripcion',200);
            $table->unsignedInteger('clas_conc_id');
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
        Schema::dropIfExists('clasifica_documento');
    }
}
