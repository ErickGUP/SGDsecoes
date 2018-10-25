<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkIncidenciaCanalizado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incidencia_canalizado', function (Blueprint $table) {

            

            /*Llave foraneas*/

            $table->foreign('incican_doc_id')->references('doc_id')->on('documento')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('incican_uni_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incidencia_canalizado', function (Blueprint $table) {
            $table->dropForeign('incidencia_canalizado_incican_doc_id_foreign');
            $table->dropForeign('incidencia_canalizado_incican_uni_cnv_id_foreign');
        });
    }
}
