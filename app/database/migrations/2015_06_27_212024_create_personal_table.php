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
			$table->increments('id');
			
            $table->string('nombres', 255);
            $table->string('apellido_paterno', 100);
            $table->string('apellido_materno', 100);
            $table->string('direccion', 255);
            $table->string('telefono', 255);            

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
		Schema::drop('personal');
	}

}
