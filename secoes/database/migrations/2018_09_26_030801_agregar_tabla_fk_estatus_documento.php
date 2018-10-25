<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkEstatusDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estatus_documento', function (Blueprint $table) {
            
            

            /*Llave foraneas*/
            
            $table->foreign('edoc_conc_id')->references('conc_id')->on('control_catalogo')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estatus_documento', function (Blueprint $table) {
            $table->dropForeign('estatus_documento_edoc_conc_id_foreign');
        });
    }
}
