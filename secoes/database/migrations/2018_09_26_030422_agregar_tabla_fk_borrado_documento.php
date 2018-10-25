<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkBorradoDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('borrado_documento', function (Blueprint $table) {

            

            /*Llave foraneas*/

            $table->foreign('docbitacora_doc_id')->references('doc_id')->on('documento')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('docbitacora_docad_id')->references('docad_id')->on('documento_adjunto')->onDelete('restrict')->onUpdate('restrict');

            $table->foreign('docbitacora_usu_id')->references('usu_id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('borrado_documento', function (Blueprint $table) {
            $table->dropForeign('borrado_documento_docbitacora_doc_id_foreign');
            $table->dropForeign('borrado_documento_docbitacora_docad_id_foreign');
            $table->dropForeign('borrado_documento_docbitacora_usu_id_foreign');
        });
    }
}
