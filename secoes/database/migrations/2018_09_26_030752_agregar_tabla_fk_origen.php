<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkOrigen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('origen', function (Blueprint $table) {
            
            $table->foreign('ori_conc_id')->references('conc_id')->on('control_catalogo')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('origen', function (Blueprint $table) {
            $table->dropForeign('origen_ori_conc_id_foreign');
        });
    }
}
