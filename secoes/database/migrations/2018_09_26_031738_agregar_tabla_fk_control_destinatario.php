<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkControlDestinatario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_destinatario', function (Blueprint $table) {

            

            /*Llave foraneas*/

            $table->foreign('cdes_gra_id')->references('gra_id')->on('grado_estudio')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('cdes_inst_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('cdes_concar_id')->references('concar_id')->on('control_cargo')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('cdes_unid_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('control_destinatario', function (Blueprint $table) {
            $table->dropForeign('control_destinatario_cdes_gra_id_foreign');
            $table->dropForeign('control_destinatario_cdes_inst_cnv_id_foreign');
            $table->dropForeign('control_destinatario_cdes_concar_id_foreign');
            $table->dropForeign('control_destinatario_cdes_unid_cnv_id_foreign');
        });
    }
}
