<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkReporteCanalizado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reporte_canalizado', function (Blueprint $table) {
            
            
            /*Llave foraneas*/

            $table->foreign('reportecan_doc_id')->references('doc_id')->on('documento')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('reportecan_unid_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('reportecan_uni_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reporte_canalizado', function (Blueprint $table) {
            $table->dropForeign('reporte_canalizado_reportecan_doc_id_foreign');
            $table->dropForeign('reporte_canalizado_reportecan_unid_cnv_id_foreign');
            $table->dropForeign('reporte_canalizado_reportecan_uni_cnv_id_foreign');

        });
    }
}
