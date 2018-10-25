<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaIncidenciaCanalizado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencia_canalizado', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('incican_id');
            $table->unsignedInteger('incican_doc_id');
            $table->integer('incican_folio');
            $table->string('incican_palclaves',100);
            $table->date('incican_fecha_canalizado');
            $table->unsignedInteger('incican_uni_cnv_id');
            
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencia_canalizado');
    }
}
