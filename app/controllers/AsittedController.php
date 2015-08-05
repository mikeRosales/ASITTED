<?php

class AsittedController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /asitted
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('asitted.masterPage');
	}
	

	public function materiaPrima(){
		$materia = RecepcionMatPrima::All();
		return View::make('asitted.inventarioMateriaPrima')->with('materia',$materia);
	}

	public function buscarMateria(){
		$materia = Input::get('nombre');
		$resultado = RecepcionMatPrima::buscar($materia);
		return View::make('asitted.inventarioMateriaPrima')->with('materia',$resultado);
	}

	public function productoTerminado(){
		$producto = ProductosTerminados::All();
		return View::make('asitted.inventarioProductoTerminado')->with('productos',$producto);
	}
	public function buscarProductoTerminado(){
		$producto = Input::get('nombre');
		$resultado = ProductosTerminados::camisas($producto);
		return View::make('asitted.inventarioProductoTerminado')->with('productos',$resultado);
	}
	public function camisas(){
		$resultado = ProductosTerminados::camisas();
		return View::make('asitted.inventarioProductoTerminado')->with('productos',$resultado);
	}
	public function pantalones(){
		$resultado = ProductosTerminados::pantalones();
		return View::make('asitted.inventarioProductoTerminado')->with('productos',$resultado);
	}
	public function chamarras(){
		$resultado = ProductosTerminados::chamarras();
		return View::make('asitted.inventarioProductoTerminado')->with('productos',$resultado);
	}

	public function regMatPrima(){
		return View::make('asitted.registroMateriaPrima');
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
		return View::make('asitted.registroProductoTerminado', compact('talleres', 'selected'));
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
	public function empaquePorEnviar(){
		$talleres = Talleres::All()->lists('nombre_taller', 'id');		
		$selected = array();
		return View::make('asitted.empaquePorEnviar', compact('talleres', 'selected'));
	}
	public function registroTaller(){
		return View::make('asitted.registroTaller');
	}
	public function salidaMateriaPrima(){
		$talleres = Talleres::All()->lists('nombre_taller', 'id');		
		$selected = array();
		return View::make('asitted.salidaMateriaPrima', compact('talleres', 'selected'));
	}
	public function envioMateriaPrima(){
			$rules = array(
			'taller'	       => 'required',
			'via_envio'				=> 'required',
			'producto'			=> 'required',
			'cajas'		   => 'required',
			'unidad'		 => 'required',
			'cantidad'		 => 'required|numeric',
			'descripcion'		 => 'required',
			'corte'		 => 'required',
			'observaciones'		 => 'required',
			);
		$validator = Validator::make(Input::all(), $rules);

        // process the login
		if ($validator->fails()) {

			return Redirect::back()->withErrors($validator)->withInput(Input::all());
		} else {
			$envio = new SalidaMateriaPrima;
			$envio->id_taller = Input::get('taller');
			$envio->via_envio = Input::get('via_envio');
			$envio->producto = Input::get('producto');
			$envio->cajas = Input::get('cajas');
			$envio->unidad = Input::get('unidad');
			$envio->cantidad = Input::get('cantidad');
			$envio->descripcion = Input::get('descripcion');
			$envio->corte = Input::get('corte');
			$envio->observaciones = Input::get('observaciones');
			$envio->save();
			return Redirect::to('/salidaMateriaPrima')->withInput()->with('success', 'Insumo agregado correctamente.');
		}
	}
	public function envioProductoTerminado(){
			$rules = array(
			'corte'	       => 'required',
			'talla'				=> 'required',
			'color'			=> 'required',
			'taller'		   => 'required',
			'paquetes'		 => 'required|numeric',
			'cajas'		 => 'required|numeric',
			'observaciones'		 => 'required'
			);
		$validator = Validator::make(Input::all(), $rules);

        // process the login
		if ($validator->fails()) {

			return Redirect::back()->withErrors($validator)->withInput(Input::all());
		} else {
			$terminado = new ProductoEntregado;
			$terminado->corte = Input::get('corte');
			$terminado->talla = Input::get('talla');
			$terminado->paquetes = Input::get('paquetes');
			$terminado->id_taller = Input::get('taller');
			$terminado->cajas = Input::get('cajas');
			$terminado->color = Input::get('color');
			$terminado->observaciones = Input::get('observaciones');
			$terminado->save();
			return Redirect::to('/empaquePorEnviar')->withInput()->with('success', 'Insumo agregado correctamente.');
		}
	}
	public function nuevoTaller(){
			$rules = array(
			'nombre'	       => 'required|unique:talleres,nombre_taller',
			'direccion'				=> 'required',
			'encargado'			=> 'required'
			);
		$validator = Validator::make(Input::all(), $rules);

        // process the login
		if ($validator->fails()) {

			return Redirect::back()->withErrors($validator)->withInput(Input::all());
		} else {
			$taller = new Talleres;
			$taller->nombre_taller = Input::get('nombre');
			$taller->direccion = Input::get('direccion');
			$taller->encargado = Input::get('encargado');
			$taller->save();
			return Redirect::to('/registroTaller')->withInput()->with('success', 'Insumo agregado correctamente.');
		}
	}
}