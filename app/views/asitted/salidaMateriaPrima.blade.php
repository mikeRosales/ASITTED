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

<section id="salidaMateriaPrima">
	<div class="row">
     {{ Form::open(array('url' => '/salidaMateriaPrima')) }}
        <div class="small-12 columns">
          <label>
            <br/>
            <br/>
            <br/>
          </label>
        </div>
          <div class="small-12 small-centered columns">
            <h3>Salida materia prima</h3>
          </div>
          <div class="small-6 columns">
            <label>
              Taller
             {{ Form::select('taller', $talleres, $selected) }}
            </label>
          </div>
          <div class="small-6 columns">
            <label>
              Via Envio
              <select name="via_envio">
                <option value="Camion">Camion</option>
                <option value="Tren">Tren</option>                
              </select>
            </label>
          </div>
          <div class="small-6 columns">
            <label>
              Producto
              <input type="text" name="producto" placeholder="Producto"/>
            </label>
          </div>
          <div class="small-6 columns">
            <label>
              Cajas por Corte
              <input type="text" name="cajas" placeholder="Paquetes"/>
            </label>
          </div>
          <div class="small-6 columns">
            <label>
              Unidad
              <input type="text" name="unidad" placeholder="Unidad"/>
            </label>
          </div>
          <div class="small-6 columns">
            <label>
              Cantidad
              <input type="text" name="cantidad" placeholder="Cantidad"/>
            </label>
          </div>
          <div class="small-6 columns">
            <label>
              Descripción
              <input type="text" name="descripcion" placeholder="Descripción"/>
            </label>
          </div>
          <div class="small-6 columns">
            <label>
              Corte
              <input type="text" name="corte" placeholder="Corte"/>
            </label>
          </div>
          <div class="small-12 columns">
            <label>
              Observaciones
              <textarea name="observaciones"></textarea>
            </label>
          </div>
          <div class="small-12 columns">
            <button class="button succes">Aceptar</button>
          </div>
           {{ Form::close() }}
      </div>
</section>