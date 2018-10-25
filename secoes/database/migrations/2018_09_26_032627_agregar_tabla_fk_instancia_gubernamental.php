<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkInstanciaGubernamental extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instancia_gubernamental', function (Blueprint $table) {

            

            /*Llave foraneas*/

            $table->foreign('inst_tipodep_id')->references('tipodep_id')->on('tipo_dependencia')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('inst_inst_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instancia_gubernamental', function (Blueprint $table) {
            $table->dropForeign('instancia_gubernamental_inst_tipodep_id_foreign');
            $table->dropForeign('instancia_gubernamental_inst_inst_cnv_id_foreign');
        });
    }
}
