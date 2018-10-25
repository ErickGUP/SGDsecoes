<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkDestinatario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('destinatario', function (Blueprint $table) {
            
            

            /*Llave foraneas*/

            $table->foreign('des_gra_id')->references('gra_id')->on('grado_estudio')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('des_inst_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('des_concar_id')->references('concar_id')->on('control_cargo')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('des_unid_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('des_cdes_id')->references('cdes_id')->on('control_destinatario')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('destinatario', function (Blueprint $table) {
            $table->dropForeign('destinatario_des_gra_id_foreign');
            $table->dropForeign('destinatario_des_inst_cnv_id_foreign');
            $table->dropForeign('destinatario_des_concar_id_foreign');
            $table->dropForeign('destinatario_des_unid_cnv_id_foreign');
            $table->dropForeign('destinatario_des_cdes_id_foreign');
        });
    }
}
