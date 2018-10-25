<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaControlDestinatario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_destinatario', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('cdes_id');
            $table->unsignedInteger('cdes_gra_id');
            $table->string('cdes_nombre',100);
            $table->unsignedInteger('cdes_inst_cnv_id');
            $table->unsignedInteger('cdes_concar_id');
            $table->unsignedInteger('cdes_unid_cnv_id');

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
        Schema::dropIfExists('control_destinatario');
    }
}
