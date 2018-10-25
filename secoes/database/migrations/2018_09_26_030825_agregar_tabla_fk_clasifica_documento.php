<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkClasificaDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clasifica_documento', function (Blueprint $table) {
            
            

            /*Llave foraneas*/
            
            $table->foreign('clas_conc_id')->references('conc_id')->on('control_catalogo')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clasifica_documento', function (Blueprint $table) {
            $table->dropForeign('clasifica_documento_clas_conc_id_foreign');
        });
    }
}
