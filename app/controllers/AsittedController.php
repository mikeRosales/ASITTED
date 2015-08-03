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

	/**
	 * Show the form for creating a new resource.
	 * GET /asitted/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /asitted
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /asitted/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /asitted/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /asitted/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /asitted/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function materiaPrima(){
		$materia = RecepcionMatPrima::All();
		return View::make('asitted.inventarioMateriaPrima')->with('materia',$materia);
	}

	public function productoTerminado(){
		$producto = ProductosTerminados::All();
		return View::make('asitted.inventarioProductoTerminado')->with('productos',$producto);
	}

	public function regMatPrima(){
		return View::make('asitted.registroMateriaPrima');
	}
	public function regProdTerminado(){
		return View::make('asitted.registroProductoTerminado');
	}
	public function empaquePorEnviar(){
		return View::make('asitted.empaquePorEnviar');
	}
	public function registroTaller(){
		return View::make('asitted.registroTaller');
	}
	public function salidaMateriaPrima(){
		return View::make('asitted.salidaMateriaPrima');
	}
}