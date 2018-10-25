<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaFolio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folio', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('folio_id');
            $table->integer('folio_num');
            $table->unsignedInteger('folio_unid_cnv_id');
            $table->integer('folio_anio');
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
        Schema::dropIfExists('folio');
    }
}
