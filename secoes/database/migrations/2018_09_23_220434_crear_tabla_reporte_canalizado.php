<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaReporteCanalizado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_canalizado', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('reportecan_id');
            $table->unsignedInteger('reportecan_doc_id');
            $table->string('reportecan_folio');
            $table->string('reportecan_asunto');
            $table->integer('reportecan_cant_ane');
            $table->date('reportecan_fechacanalizado');
            $table->unsignedInteger('reportecan_unid_cnv_id');
            $table->unsignedInteger('reportecan_uni_cnv_id');
            
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
        Schema::dropIfExists('reporte_canalizado');
    }
}