@include('asitted.recursos')
<section id="empaquexEnviar">
	<div class="row">
	 {{ Form::open(array('url' => '/envioProductoTerminado')) }}
	    <div class="small-12 columns">
	      <label>
	        <br/>
	        <br/>
	        <br/>
	      </label>
	    </div>
	      <div class="small-12 small-centered columns">
	        <h3>Empaques para enviar</h3>
	      </div>
	      <div class="small-6 columns">
	        <label>
	          Corte
	        <input type="text" name="corte" placeholder="Corte"/>
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
	          Paquetes
	          <input type="text" name="paquetes" placeholder="Paquetes"/>
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
	          Cajas por Corte
	          <input type="text" name="cajas" placeholder="Paquetes"/>
	        </label>
	      </div>
	      <div class="small-6 columns">
	        <label>
	          Color
	          <select name="color">
	            <option value="Guinda">Guinda</option>
	            <option value="Verde">Verde</option>
	            <option value="Gris">Gris</option>
	          </select>
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