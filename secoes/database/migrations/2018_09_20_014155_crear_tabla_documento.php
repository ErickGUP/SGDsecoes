<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('doc_id');
            $table->integer('doc_num_oficio');
            $table->integer('doc_folio');
            $table->unsignedInteger('doc_crem_id');
            $table->date('doc_ejercicio');
            $table->date('doc_fecha_ela');
            $table->date('doc_fecha_rec');
            $table->string('doc_asunto',200);
            $table->integer('doc_ciudadano');
            $table->integer('doc_cantidad_anexos');
            $table->unsignedInteger('doc_conc_id');
            
            
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
        Schema::dropIfExists('documento');
    }
}
