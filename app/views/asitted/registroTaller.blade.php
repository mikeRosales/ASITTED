@include('asitted.recursos')
 @if($errors->has())
   @foreach ($errors->all() as $error)
      <div><small class="error">{{ $error }}</small></div>
  @endforeach
@endif
@if(Session::has('success'))
    <div class="alert-box">
       <small> {{ Session::get('success') }}</small>
    </div>
@endif
<section id="registroTaller">
	<div class="row">
   {{ Form::open(array('url' => '/nuevoTaller')) }}
        <div class="small-12 columns">
          <label>
            <br/>
            <br/>
            <br/>
          </label>
        </div>
          <div class="small-12 small-centered columns">
            <h3>Registro de taller</h3>
          </div>
          <div class="small-12 columns">
            <label>
              <br/>
              <br/>
              <br/>
            </label>
          </div>
          <div class="small-8 small-centered columns">
            <label>
              Nombre del Taller
              <input type="text" name="nombre" placeholder="Nombre"/>
            </label>
          </div>
          <div class="small-8 small-centered columns">
            <label>
              Dirección
              <input type="text" name="direccion" placeholder="Direccion"/>
            </label>
          </div>
          <div class="small-8 small-centered columns">
            <label>
              Encargado
              <input type="text"  name="encargado" placeholder="Encargado"/>
            </label>
          </div>
          <div class="small-8 small-centered columns">
            <button class="button succes">Guardar</button>
        </div>
        {{ Form::close()}}
    </div>
</section>