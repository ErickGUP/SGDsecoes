<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkUnidadRemitente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unidad_remitente', function (Blueprint $table) {
            
            

            /*Llave foraneas*/

            $table->foreign('urem_inst_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('urem_id_depende')->references('urem_id')->on('unidad_remitente')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('urem_uni_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unidad_remitente', function (Blueprint $table) {
            $table->dropForeign('unidad_remitente_urem_inst_cnv_id_foreign');
            $table->dropForeign('unidad_remitente_urem_id_depende_foreign');
            $table->dropForeign('unidad_remitente_urem_uni_cnv_id_foreign');
        });
    }
}
