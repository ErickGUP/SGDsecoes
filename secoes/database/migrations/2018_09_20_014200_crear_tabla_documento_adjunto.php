<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDocumentoAdjunto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_adjunto', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';

            $table->increments('docad_id');
            $table->unsignedInteger('docad_doc_id');
            $table->string('docad_nombre',100);
            $table->string('docad_clas',100);
            $table->string('docad_palclaves',100);
            $table->string('docad_ubica',200);
            $table->timestamps();

            /*Llave foraneas*/

            //Sin llaves foraneas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_adjunto');
    }
}
