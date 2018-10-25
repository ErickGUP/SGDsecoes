<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRemitente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remitente', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('rem_id');
            $table->unsignedInteger('rem_gra_id');
            $table->string('rem_nombre',200);
            $table->unsignedInteger('rem_inst_cnv_id');
            $table->unsignedInteger('rem_uni_cnv_id');
            $table->unsignedInteger('rem_concar_id');
            $table->unsignedInteger('rem_crem_id'); 
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
        Schema::dropIfExists('remitente');
    }
}
