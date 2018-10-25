<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkRemitente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('remitente', function (Blueprint $table) {
            
            

            /*Llave foraneas*/


            $table->foreign('rem_gra_id')->references('gra_id')->on('grado_estudio')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('rem_inst_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('rem_uni_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('rem_concar_id')->references('concar_id')->on('control_cargo')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('rem_crem_id')->references('crem_id')->on('control_remitente')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('remitente', function (Blueprint $table) {
            $table->dropForeign('remitente_rem_gra_id_foreign');
            $table->dropForeign('remitente_rem_inst_cnv_id_foreign');
            $table->dropForeign('remitente_rem_uni_cnv_id_foreign');
            $table->dropForeign('remitente_rem_concar_id_foreign');
            $table->dropForeign('remitente_rem_crem_id_foreign');
        });
    }
}
