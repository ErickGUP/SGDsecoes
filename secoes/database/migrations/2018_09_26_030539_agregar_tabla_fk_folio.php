<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkFolio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('folio', function (Blueprint $table) {

            $table->foreign('folio_unid_cnv_id')->references('cnv_id')->on('control_nombre_version')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('folio', function (Blueprint $table) {
            $table->dropForeign('folio_folio_unid_cnv_id_foreign');
        });
    }
}
