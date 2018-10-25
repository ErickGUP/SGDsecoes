<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documento', function (Blueprint $table) {
            

            $table->foreign('doc_crem_id')
            ->references('crem_id')
            ->on('control_remitente')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('doc_conc_id')
            ->references('conc_id')
            ->on('control_catalogo')
            ->onDelete('restrict')
            ->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documento', function (Blueprint $table) {
            $table->dropForeign('documento_doc_crem_id_foreign');
            $table->dropForeign('documento_doc_conc_id_foreign');
            //
        });
    }
}
