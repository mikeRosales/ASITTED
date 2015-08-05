@include('asitted.recursos')
<section id="regMateriaPrima">
	<div class="row">
      <div class="small-12 columns">
        <label>
          <br/>
          <br/>
          <br/>
        </label>
      </div>
      {{ Form::open(array('url' => '/nuevaMateriaPrima')) }}
        <div class="small-12 small-centered columns">
          <h3>Registro de Materia Prima</h3>
        </div>
        <div class="small-12 columns">
          <label>
            Nombre
            <input type="text" name="nombre" placeholder="Nombre"/>
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
        <div class="small-12 columns">
          <label>
            Descripción
            <textarea name="descripcion"></textarea>
          </label>
        </div>
        <div class="small-12 columns">
          <label>
            Observaciones
            <textarea name="observaciones"></textarea>
          </label>
        </div>
        <div class="small-12 columns">
          <button class="button succes">Guardar</button>
        </div>
        {{ Form::close() }}
    </div>
</section>