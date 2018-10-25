<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaFkReporteMinuta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reporte_minuta', function (Blueprint $table) {
            
            

            /*Llave foraneas*/
            
            $table->foreign('reportemin_doc_id')->references('doc_id')->on('documento')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reporte_minuta', function (Blueprint $table) {
            $table->dropForeign('reporte_minuta_reportemin_doc_id_foreign');
        });
    }
}
