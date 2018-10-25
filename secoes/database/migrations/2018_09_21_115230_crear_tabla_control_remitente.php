<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaControlremitente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_remitente', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('crem_id');
            $table->unsignedInteger('crem_gra_id');
            $table->string('crem_nombre',200);
            $table->unsignedInteger('crem_inst_cnv_id');
            $table->unsignedInteger('crem_uni_cnv_id');
            $table->unsignedInteger('crem_concar_id');
            $table->timestamps();

            /*Llave foraneas*/

            //$table->foreign('crem_rem_id')->references('rem_id')->on('remitente');

            //$table->foreign('crem_cnv_id')->references('cnv_id')->on('control_nombre_version');

            //$table->foreign('crem_cnv_id')->references('cnv_id')->on('control_nombre_version');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('control_remitente');
    }
}
