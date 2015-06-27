<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTerminadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos_terminados', function(Blueprint $table)
		{
			$table->increments('id_producto');

			$table->integer('num_bolsa');
        	$table->integer('num_bulto');
        	$table->enum('choices', array('chamarra', 'pantalon'));
            $table->string('apellido_materno', 100);
            $table->string('talla', 20);
            $table->integer('cantidad');
            $table->integer('id_taller')->unsigned();            

            $table->timestamps();
        });
        Schema::table('productos_terminados', function($table) {
        	$table->foreign('id_taller')->references('id_taller')->on('talleres');
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productos_terminados');
	}

}
