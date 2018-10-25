<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkDocumentoAdjunto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documento_adjunto', function (Blueprint $table) {
            

            //Llave foranea//
            $table->foreign('docad_doc_id')->references('doc_id')->on('documento')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documento_adjunto', function (Blueprint $table) {
            $table->dropForeign('documento_adjunto_docad_doc_id_foreign');
        });
    }
}
