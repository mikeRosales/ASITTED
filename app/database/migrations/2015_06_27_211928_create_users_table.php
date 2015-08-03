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
            $table->increments('id');

            $table->integer('id_nivel_acceso')->unsigned();
            $table->string('nombre_usuario', 100);
            $table->string('password', 255);            
            $table->integer('id_personal')->unsigned();     

            $table->timestamps();
        });
		Schema::table('usuarios', function($table) {
        	$table->foreign('id_nivel_acceso')->references('id')->on('niveles_acceso');
   		});
   		Schema::table('usuarios', function($table) {
        	$table->foreign('id_personal')->references('id')->on('personal');
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
