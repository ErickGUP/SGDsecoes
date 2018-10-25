<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkRequerimientosTakpool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requerimientos_takpool', function (Blueprint $table) {

           

            /*Llave foraneas*/

            $table->foreign('req_doc_id')->references('doc_id')->on('documento')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requerimientos_takpool', function (Blueprint $table) {
            $table->dropForeign('requerimientos_takpool_req_doc_id_foreign');
        });
    }
}
