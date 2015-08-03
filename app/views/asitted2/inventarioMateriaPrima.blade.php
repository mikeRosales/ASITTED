@include('asitted2.recursos')
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASITTED</title>

  </head>
  <body>
<section id="inventarioMateriPrima">
  <div class="row">
    <div class="small-12 columns">
      <h3>Materia Prima</h3>
    </div>
    <div class="small-12 columns">
     {{ Form::open(array('url' => '/buscarMateria')) }}
      <label>
        Buscar
        <input type="text" placeholder="Buscar"  name="nombre"  class="txtBuscar"/>
      </label>
      
      <button class="button tiny">Buscar</button>
      {{ Form::close() }} 
      <table class="table-custom">
        <thead>              
          <tr class="titulo" >
            <th><span>Nombre</span></th>
            <th><span>Unidad</span></th>
            <th><span>Cantidad</span></th>
          </tr>                              
        </thead>
        <tbody> 
        @foreach($materia as $key => $value)
            <tr class="openModal" data-reveal-id="modal_{{$value->id}}">                    
              <td>{{ $value->nombre }}</td>
              <td>{{ $value->unidad }}</td>
              <td>{{ $value->cantidad }}</td>                  
            </tr>                
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @foreach($materia as $key => $value)
  <div id="modal_{{$value->id}}" class="reveal-modal reveal-custom medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
     
    <section class="pop-head">
      <label>Detalle del Elemento</label>
    </section>
    <section class="pop-body gvDetalles">
      <table class="table-custom">
        <thead> 
          <tr class="titulo" >
            <th><span>Nombre</span></th>
            <th><span>Cantidad</span></th>
            <th><span>Descripcion</span></th>
            <th><span>Detalles</span></th>
          </tr>                              
        </thead>
        <tbody> 

            <tr>                                          
              <td>{{ $value->nombre }}</td>
              <td>{{ $value->cantidad }}</td>
              <td>{{ $value->descripcion }}</td>
              <td>{{ $value->observaciones }}</td>
            </tr>  
                      
        </tbody>
      </table>
    </section>         
    <a class="close-reveal-modal close-reveal-custom" aria-label="Close">&#215;</a>

  </div>
    @endforeach
 
</section>
      <script>
      $(document).foundation();
    </script>
  </body>
</html>