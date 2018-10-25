<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRequerimientosTakpool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requerimientos_takpool', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('req_id');
            $table->unsignedInteger('req_doc_id');
            $table->integer('req_oficio');
            $table->string('req_asunto',100);
            $table->integer('req_anexos');
            $table->string('folio_seguimiento',100);
            $table->string('req_status',100);
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
        Schema::dropIfExists('requerimientos_takpool');
    }
}
