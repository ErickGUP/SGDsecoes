<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDestinatario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinatario', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('des_id');
            $table->unsignedInteger('des_gra_id');
            $table->string('des_nombre',100);
            $table->unsignedInteger('des_inst_cnv_id');
            $table->unsignedInteger('des_concar_id');
            $table->unsignedInteger('des_unid_cnv_id');
            $table->unsignedInteger('des_cdes_id');
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
        Schema::dropIfExists('destinatario');
    }
}
