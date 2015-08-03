<?php

class SessionController extends \BaseController {

	public function getSession(){
		$username = Input::get('username');
		$password = Input::get('password');
		if (Auth::attempt(['username' => $username, 'password' => $password]))
		{

            // Aquí también pueden devolver una llamada a otro controlador o
            // devolver una vista
			$nivel=Auth::user()->id_nivel_acceso;
			$id_personal=Auth::user()->id_personal;
			$persona=Personal::find($id_personal);
	
			Session::put('nombre',$persona->nombres);

			if ($nivel==1) {	
				
				return Redirect::action('AsittedController@index');
			}
			elseif($nivel==2){
				return Redirect::action('Asitted2Controller@index');
			}
		}
		return Redirect::back()->with('error_message', 'Datos incorrectos, vuelve a intentarlo.');
	}
	public function logout(){
		Auth::logout();

		return Redirect::to('/');

	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	//vista para nueva empresa
	public function index()
	{
		if (Auth::check()) {
			$nivel=Auth::user()->id_nivel_acceso;;
			if ($nivel==1) {
				return Redirect::action('AsittedController@index');
			}
			elseif($nivel==2){
				return Redirect::action('Asitted2Controller@index');
			}
		}else{
			return View::make('login');
		}
	}


}
