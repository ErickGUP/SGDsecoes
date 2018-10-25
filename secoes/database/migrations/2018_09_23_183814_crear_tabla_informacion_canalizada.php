<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInformacionCanalizada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_canalizada', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('ican_id');
            $table->unsignedInteger('ican_doc_id');
            $table->unsignedInteger('ican_clas_conc_id');
            $table->unsignedInteger('ican_aten_conc_id');
            $table->unsignedInteger('ican_edoc_conc_id');
            $table->unsignedInteger('ican_unid_cnv_id');
            $table->unsignedInteger('ican_cdes_id');
            $table->unsignedInteger('ican_crem_id');
            $table->unsignedInteger('ican_usu_id');
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
        Schema::dropIfExists('informacion_canalizada');
    }
}
