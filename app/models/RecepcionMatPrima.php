<?php

class RecepcionMatPrima extends \Eloquent {
	protected $table = 'recepcion_mat_prima';

	public function scopeBuscar($query,$materia){
		$materia = DB::table('recepcion_mat_prima')
			->where('recepcion_mat_prima.nombre','LIKE','%'.$materia.'%')
			->get();
		return ($materia);
	}
}