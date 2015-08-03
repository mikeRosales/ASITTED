<?php

class Personal extends \Eloquent {
	protected $table = 'personal';

	public  function scopeBuscar($persona,$id_personal){
			$persona = DB::table('personal')
			->where('personal.id_personal','=',$id_personal)
			->get();
			
			return (array) $persona;
	}
}