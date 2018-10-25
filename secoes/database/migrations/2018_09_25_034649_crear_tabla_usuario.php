<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('usu_id');
            $table->string('usu_nombre',100);
            $table->string('usu_contrasena',100);
            $table->unsignedInteger('usu_uni_id');
            $table->unsignedInteger('usu_permisos_id');

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
        Schema::dropIfExists('usuario');
    }
}
