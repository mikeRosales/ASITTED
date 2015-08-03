<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASITTED</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/foundation.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/importer.css')}}" />
    <script src="{{URL::asset('assets/js/vendor/modernizr.js')}}"></script>
  </head>
  <body>
<section id="login">
    @if (Session::has('error_message'))
      <div class="input-wrapper">
      <small class="error">{{ Session::get('error_message') }}</small>
      </div>
    @endif
 {{ Form::open(['url' => '/login']) }}
	<div class="small-4 small-centered columns">
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
      </div>
	<div class="small-4 small-centered columns">
      <h3>Iniciar Sesión</h3>
  	</div>
  	<div class="small-4 small-centered columns">
      <label>
        Usuario
        <input type="text" name="username" placeholder="Usuario"/>
        Contraseña
        <input type="password" name="password" placeholder="Contraseña"/>
      </label>
  	</div>
  	<div class="small-4 small-centered columns">
      <button class="button succes">Iniciar Sesión</button>
  	</div>
    {{ Form::close() }}
</section>
     <script src="{{URL::asset('assets/js/vendor/jquery.js')}}"></script>
    <script src="{{URL::asset('assets/js/foundation.min.js')}}"></script>
     <script>
      $(document).foundation();
    </script>
</body>
</html>