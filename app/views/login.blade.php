@include('asitted.recursos')
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