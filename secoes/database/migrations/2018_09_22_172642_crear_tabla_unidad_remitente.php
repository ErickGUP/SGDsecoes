<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUnidadRemitente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_remitente', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('urem_id');
            $table->string('urem_nombre',100);
            $table->unsignedInteger('urem_inst_cnv_id');
            $table->unsignedInteger('urem_id_depende');
            $table->unsignedInteger('urem_uni_cnv_id');
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
        Schema::dropIfExists('unidad_remitente');
    }
}
