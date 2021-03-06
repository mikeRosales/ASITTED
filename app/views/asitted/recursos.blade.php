<!DOCTYPE html>
<html lang="en">
<head>
	 <link rel="stylesheet" href="{{URL::asset('assets/css/foundation.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/importer.css')}}" />
    <script src="{{URL::asset('assets/js/vendor/modernizr.js')}}"></script>
</head>
<body>
 @if($errors->has())
   @foreach ($errors->all() as $error)
      <div><small class="error">{{ $error }}</small></div>
  @endforeach
@endif
@if(Session::has('success'))
    <div class="alert-box">
       <p> {{ Session::get('success') }}</p>
    </div>
@endif
    <div class="fixed">
      <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <h1><a href="#">ASITTED</a></h1>
          </li>
           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">

          <!-- Right Nav Section -->
          <ul class="left">
            <!--<li><a href="#">Right Button Active</a></li>-->
            <li class="has-dropdown">
              <a href="#">Inventario</a>
              <ul class="dropdown">
                <li><a href="{{ URL::to('/materiaPrima') }}">Almacen de Materia Prima</a></li>
                <li><a href="{{ URL::to('/productoTerminado') }}">Almacen de Productos Terminados</a></li>
                <li><a href="{{ URL::to('/registroMateriaPrima') }}">Nuevos Insumos</a></li>
				        <li><a href="{{ URL::to('/registroProductoTerminado') }}">Nuevos Productos Terminados</a></li>
              </ul>
            </li>
            @if(Session::get('nivel')== 1)
            <li class="has-dropdown">
              <a href="#">Salidas</a>
              <ul class="dropdown">
                <li><a href="{{ URL::to('/salidaMateriaPrima') }}">Salida de Materia Prima</a></li>
                <li><a href="{{ URL::to('/empaquePorEnviar') }}">Enviar Producto Terminado</a></li>
              </ul>
            </li>
            <li class="has-dropdown">
              <a href="#">Talleres</a>
              <ul class="dropdown">
                <li><a href="{{ URL::to('/registroTaller') }}">Registrar Nuevo Taller</a></li>
                
              </ul>
            </li>
            @endif
          </ul>
           <ul class="right">
           <li><a href="{{ URL::to('/logout') }}">Cerrar Sesion</a></li>
           <li class="name"><a>Bienvenido {{Session::get('nombre')}}</a></li>
           </ul>
        </section>
      </nav>
    </div>
    <script src="{{URL::asset('assets/js/vendor/jquery.js')}}"></script>
    <script src="{{URL::asset('assets/js/foundation.min.js')}}"></script>
       <script>
      $(document).foundation();
    </script>
</body>
</html>