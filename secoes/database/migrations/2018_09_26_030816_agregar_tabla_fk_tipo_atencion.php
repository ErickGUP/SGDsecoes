<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkTipoAtencion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipo_atencion', function (Blueprint $table) {
            
            

            /*Llave foraneas*/
            
            $table->foreign('aten_conc_id')->references('conc_id')->on('control_catalogo')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipo_atencion', function (Blueprint $table) {
            $table->dropForeign('tipo_atencion_aten_conc_id_foreign');
        });
    }
}
