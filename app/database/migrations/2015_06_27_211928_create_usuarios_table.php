<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('usuarios', function(Blueprint $table)
		 {
            $table->increments('id_usuario');

            $table->integer('id_nivel_acceso')->unsigned();
            $table->string('nombre_usuario', 100);
            $table->string('contrasena', 255);            

            $table->timestamps();
        });
		Schema::table('usuarios', function($table) {
        	$table->foreign('id_nivel_acceso')->references('id_nivel_acceso')->on('niveles_acceso');
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::drop('usuarios');
	}

}
