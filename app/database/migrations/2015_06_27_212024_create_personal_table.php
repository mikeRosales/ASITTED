<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal', function(Blueprint $table)
		{
			$table->increments('id_personal');
			
            $table->string('nombres', 255);
            $table->string('apellido_paterno', 100);
            $table->string('apellido_materno', 100);
            $table->string('direccion', 255);
            $table->string('telefono', 255); 
            $table->integer('id_usuario')->unsigned();           

            $table->timestamps();
		});
		Schema::table('personal', function($table) {
        	$table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personal');
	}

}
