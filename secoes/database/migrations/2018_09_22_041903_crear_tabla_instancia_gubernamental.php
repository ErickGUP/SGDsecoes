<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInstanciaGubernamental extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instancia_gubernamental', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('inst_id');
            $table->string('inst_nombre',100);
            $table->unsignedInteger('inst_tipodep_id');
            $table->unsignedInteger('inst_inst_cnv_id');
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
        Schema::dropIfExists('instancia_gubernamental');
    }
}
