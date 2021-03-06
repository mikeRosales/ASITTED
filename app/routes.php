<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','SessionController@index');
Route::get('/login','SessionController@index');
Route::post('/login','SessionController@getSession');
Route::get('/logout','SessionController@logout');

Route::group(array('before' => 'auth'),function() {
	Route::get('/index','AsittedController@index');
	Route::get('/materiaPrima','AsittedController@materiaPrima');
	Route::get('/productoTerminado','AsittedController@productoTerminado');
	Route::get('/registroProductoTerminado','AsittedController@regProdTerminado');
	Route::get('/registroMateriaPrima','AsittedController@regMatPrima');
	Route::get('/empaquePorEnviar','AsittedController@empaquePorEnviar');
	Route::get('/registroTaller','AsittedController@registroTaller');
	Route::get('/salidaMateriaPrima','AsittedController@salidaMateriaPrima');
	Route::post('/buscarMateria','AsittedController@buscarMateria');
	Route::post('/buscarProductoTerminado','AsittedController@buscarProductoTerminado');
	Route::get('/camisas','AsittedController@camisas');
	Route::get('/chamarras','AsittedController@chamarras');
	Route::get('/pantalones','AsittedController@pantalones');
	Route::post('/nuevaMateriaPrima','AsittedController@nuevaMateriaPrima');
	Route::post('/nuevoProductoTerminado','AsittedController@nuevoProductoTerminado');
	Route::post('/salidaMateriaPrima','AsittedController@envioMateriaPrima');
	Route::post('/envioProductoTerminado','AsittedController@envioProductoTerminado');
	Route::post('/nuevoTaller','AsittedController@nuevoTaller');
});

