<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkHistorialSeguimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('historial_seguimiento', function (Blueprint $table) {
            
            

            /*Llave foraneas*/

            $table->foreign('his_req_id')->references('req_id')->on('requerimientos_takpool')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historial_seguimiento', function (Blueprint $table) {
            $table->dropForeign('historial_seguimiento_his_req_id_foreign');
        });
    }
}
