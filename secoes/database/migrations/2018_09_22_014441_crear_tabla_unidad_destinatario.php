<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUnidadDestinatario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_destinatario', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('uni_id');
            $table->unsignedInteger('uni_inst_cnv_id');
            $table->string('uni_nombre',100);
            $table->unsignedInteger('uni_id_depende');
            $table->unsignedInteger('uni_jer_id');
            $table->unsignedInteger('uni_unid_cnv_id');

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
        Schema::dropIfExists('unidad_destinatario');
    }
}
