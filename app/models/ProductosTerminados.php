<?php

class ProductosTerminados extends \Eloquent {
	protected $table = 'productos_terminados';

		public function scopeBuscar($query,$materia){
		$materia = DB::table('productos_terminados')
			->where('productos_terminados.nombre','LIKE','%'.$materia.'%')
			->get();
		return ($materia);
	}
	public function scopeCamisas($query2){
		$materia = DB::table('productos_terminados')
			->where('productos_terminados.tipo','=','camisa')
			->get();
		return ($materia);
	}
	public function scopePantalones($query3){
		$materia = DB::table('productos_terminados')
			->where('productos_terminados.tipo','=','pantalon')
			->get();
		return ($materia);
	}
	public function scopeChamarras($query4){
		$materia = DB::table('productos_terminados')
			->where('productos_terminados.tipo','=','chamarra')
			->get();
		return ($materia);
	}
}