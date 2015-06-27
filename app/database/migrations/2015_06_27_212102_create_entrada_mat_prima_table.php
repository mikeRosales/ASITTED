<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntradaMatPrimaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recepcion_mat_prima', function(Blueprint $table)
		{
			$table->increments('id_item');

			$table->integer('item');
			$table->integer('unidad');
			$table->integer('cantidad');
            $table->string('descripcion', 255);
            $table->string('observaciones', 255);
      		
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
		Schema::drop('recepcion_mat_prima');
	}

}
