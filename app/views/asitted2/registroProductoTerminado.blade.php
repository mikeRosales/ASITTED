@include('asitted2.recursos')
<section id="regProductoTerminado">
	<div class="row">
   {{ Form::open(array('url' => '/nuevoProductoTerminado')) }}
	    <div class="small-12 columns">
	      <label>
	        <br/>
	        <br/>
	        <br/>
	      </label>
	    </div>
      <div class="small-12 small-centered columns">
        <h3>Registro de Producto Terminado</h3>
      </div>
      <div class="small-12 columns">
        <label>
          Nombre
          <input type="text" name ="nombre" placeholder="Nombre"/>
        </label>
      </div>
      <div class="small-6 columns">
        <label>
          Taller
         {{ Form::select('taller', $talleres, $selected) }}
        </label>
      </div>
      <div class="small-6 columns">
        <label>
          Tipo
          <select name="tipo">          
            <option value="camisa">Camisa</option>
            <option value="chamarra">Chamarra</option>
            <option value="pantalon">Pantalón</option>
          </select>
        </label>
      </div>
      <div class="small-6 columns">
        <label>
          Talla
          <select name="talla">
            <option value="CH">CH</option>
            <option value="M">M</option>
            <option value="G">G</option>
          </select>
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
          Numero de Bolsa
          <input type="text" name="numero_bolsa" placeholder="N° Bolsa"/>
        </label>
      </div>
      <div class="small-6 columns">
        <label>
          Numero de Bulto
          <input type="text" name="numero_bulto" placeholder="N° de Bulto"/>
        </label>
      </div>
      <div class="small-12 columns">
        <button class="button succes">Guardar</button>
      </div>
         {{ Form::close() }}
	</div>
</section>