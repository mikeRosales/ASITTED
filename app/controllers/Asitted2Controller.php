<?php

class Asitted2Controller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /asitted2
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('asitted2.masterPage');
	}
	

	public function materiaPrima(){
		$materia = RecepcionMatPrima::All();
		return View::make('asitted2.inventarioMateriaPrima')->with('materia',$materia);
	}

	public function buscarMateria(){
		$materia = Input::get('nombre');
		$resultado = RecepcionMatPrima::buscar($materia);
		return View::make('asitted2.inventarioMateriaPrima')->with('materia',$resultado);
	}

	public function productoTerminado(){
		$producto = ProductosTerminados::All();
		return View::make('asitted2.inventarioProductoTerminado')->with('productos',$producto);
	}
	public function buscarProductoTerminado(){
		$producto = Input::get('nombre');
		$resultado = ProductosTerminados::camisas($producto);
		return View::make('asitted2.inventarioProductoTerminado')->with('productos',$resultado);
	}
	public function camisas(){
		$resultado = ProductosTerminados::camisas();
		return View::make('asitted2.inventarioProductoTerminado')->with('productos',$resultado);
	}
	public function pantalones(){
		$resultado = ProductosTerminados::pantalones();
		return View::make('asitted2.inventarioProductoTerminado')->with('productos',$resultado);
	}
	public function chamarras(){
		$resultado = ProductosTerminados::chamarras();
		return View::make('asitted2.inventarioProductoTerminado')->with('productos',$resultado);
	}

	public function regMatPrima(){
		return View::make('asitted2.registroMateriaPrima');
	}
	public function nuevaMateriaPrima(){
			$rules = array(
			'nombre'	       => 'required',
			'unidad'				=> 'required',
			'cantidad'			=> 'required|numeric',
			'descripcion'		   => 'required',
			'observaciones'		 => 'required'
			);
		$validator = Validator::make(Input::all(), $rules);

        // process the login
		if ($validator->fails()) {

			return Redirect::back()->withErrors($validator)->withInput(Input::all());
		} else {
			$materia = new RecepcionMatPrima;
			$materia->nombre = Input::get('nombre');
			$materia->unidad = Input::get('unidad');
			$materia->cantidad = Input::get('cantidad');
			$materia->descripcion = Input::get('descripcion');
			$materia->observaciones = Input::get('observaciones');
			$materia->save();
			return Redirect::to('/registroMateriaPrima')->withInput()->with('success', 'Insumo agregado correctamente.');
		}
	}
	public function regProdTerminado(){
		$talleres = Talleres::All()->lists('nombre_taller', 'id');		
		$selected = array();
		return View::make('asitted2.registroProductoTerminado', compact('talleres', 'selected'));
	}
	public function nuevoProductoTerminado(){
			$rules = array(
			'nombre'	       => 'required',
			'taller'				=> 'required',
			'tipo'			=> 'required',
			'talla'		   => 'required',
			'cantidad'		 => 'required|numeric',
			'numero_bolsa'		 => 'required|numeric',
			'numero_bulto'		 => 'required|numeric'
			);
		$validator = Validator::make(Input::all(), $rules);

        // process the login
		if ($validator->fails()) {

			return Redirect::back()->withErrors($validator)->withInput(Input::all());
		} else {
			$producto = new ProductosTerminados;
			$producto->nombre = Input::get('nombre');
			$producto->id_taller = Input::get('taller');
			$producto->tipo = Input::get('tipo');
			$producto->talla = Input::get('talla');
			$producto->cantidad = Input::get('cantidad');
			$producto->num_bolsa = Input::get('numero_bolsa');
			$producto->num_bulto = Input::get('numero_bulto');
			$producto->save();
			return Redirect::to('/registroProductoTerminado')->withInput()->with('success', 'Insumo agregado correctamente.');
		}
	}

}