<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaBorradoDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrado_documento', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('docbitacora_id');
            $table->unsignedInteger('docbitacora_doc_id');
            $table->unsignedInteger('docbitacora_docad_id');
            $table->unsignedInteger('docbitacora_usu_id');
            
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
        Schema::dropIfExists('borrado_documento');
    }
}
