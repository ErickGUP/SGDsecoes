<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkInformacionCanalizada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('informacion_canalizada', function (Blueprint $table) {
            
            

            /*Llave foraneas*/

            $table->foreign('ican_doc_id')->references('doc_id')->on('documento')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('ican_clas_conc_id')->references('conc_id')->on('control_catalogo')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('ican_aten_conc_id')->references('conc_id')->on('control_catalogo')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('ican_edoc_conc_id')->references('conc_id')->on('control_catalogo')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('ican_unid_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('ican_cdes_id')->references('cdes_id')->on('control_destinatario')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('ican_crem_id')->references('crem_id')->on('control_remitente')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('ican_usu_id')->references('usu_id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('informacion_canalizada', function (Blueprint $table) {
            $table->dropForeign('informacion_canalizada_ican_doc_id_foreign');
            $table->dropForeign('informacion_canalizada_ican_clas_conc_id_foreign');
            $table->dropForeign('informacion_canalizada_ican_aten_conc_id_foreign');
            $table->dropForeign('informacion_canalizada_ican_edoc_conc_id_foreign');
            $table->dropForeign('informacion_canalizada_ican_unid_cnv_id_foreign');
            $table->dropForeign('informacion_canalizada_ican_cdes_id_foreign');
            $table->dropForeign('informacion_canalizada_ican_crem_id_foreign');
            $table->dropForeign('informacion_canalizada_ican_usu_id_foreign');

        });
    }
}
