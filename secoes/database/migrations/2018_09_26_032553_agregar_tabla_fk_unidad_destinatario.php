<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkUnidadDestinatario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unidad_destinatario', function (Blueprint $table) {
            
            

            /*Llave foraneas*/

            $table->foreign('uni_inst_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('uni_id_depende')->references('uni_id')->on('unidad_destinatario')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('uni_jer_id')->references('jer_id')->on('jerarquia')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('uni_unid_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unidad_destinatario', function (Blueprint $table) {
            $table->dropForeign('unidad_destinatario_uni_inst_cnv_id_foreign');
            $table->dropForeign('unidad_destinatario_uni_id_depende_foreign');
            $table->dropForeign('unidad_destinatario_uni_jer_id_foreign');
            $table->dropForeign('unidad_destinatario_uni_unid_cnv_id_foreign');
        });
    }
}
