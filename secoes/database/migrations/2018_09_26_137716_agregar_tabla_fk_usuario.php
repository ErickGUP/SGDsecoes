<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuario', function (Blueprint $table) {
            
            

            /*Llave foraneas*/

            $table->foreign('usu_uni_id')->references('uni_id')->on('unidad_destinatario')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('usu_permisos_id')->references('permisos_id')->on('permisos')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario', function (Blueprint $table) {
            $table->dropForeign('usuario_usu_uni_id_foreign');
            $table->dropForeign('usuario_usu_permisos_id_foreign');
        });
    }
}
