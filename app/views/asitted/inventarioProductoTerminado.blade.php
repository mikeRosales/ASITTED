@include('asitted.recursos')
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASITTED</title>    
  </head>
  <body>
<section id="inventarioProductoTerminado">
  <div class="row">
    <div class="small-12 columns">
      <h3>Productos de Almacen</h3>
    </div>
    <div class="small-12 columns">
      <ul class="breadcrumbs">
        <li><a href="#">Camisas</a></li>
        <li><a href="#">Chamarras</a></li>
        <li><a href="#">Cierres</a></li>
        <li><a href="#">Pantalones</a></li>
      </ul>
    </div>
    <div class="small-12 columns">
      <label>
        Buscar
        <input type="text" placeholder="  Buscar" class="txtBuscar"/>
      </label>
      <table class="table-custom">
        <thead>              
          <tr class="titulo" >
            <th><span>Nombre</span></th>
            <th><span>Taller</span></th>
            <th><span>Tipo</span></th>
            <th><span>Talla</span></th>
            <th><span>Cantidad</span></th>
          </tr>                              
        </thead>
        <tbody> 
            @foreach($productos as $key => $value)
            <tr class="openModal" data-reveal-id="{{$value->nombre}}">                    
              <td>{{ $value->nombre }}</td>
              <td>{{ $value->id_taller }}</td>
              <td>{{ $value->tipo }}</td>                  
              <td>{{ $value->talla }}</td>                  
              <td>{{ $value->cantidad }}</td>                  
            </tr>   
            @endforeach             
        </tbody>
      </table>
    </div>
  </div>
     @foreach($productos as $key => $value)
  <div id="{{$value->nombre}}" class="reveal-modal reveal-custom medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <section class="pop-head">
      <label>Detalle del Elemento</label>
    </section>
    <section class="pop-body gvDetalles">
      <div class="small-12 columns">          
      <table class="table-custom">
        <thead>              
          <tr class="titulo" >
            <th><span>Nombre</span></th>
            <th><span>Taller</span></th>
            <th><span>N° de bolsa</span></th>
            <th><span>N° de bulto</span></th>                  
            <th><span>Fecha</span></th>                  
          </tr>                              
        </thead>
        <tbody> 
            <tr>                    
              <td>{{ $value->nombre }}</td>
              <td>{{ $value->id_taller }}</td>
              <td>{{ $value->num_bolsa }}</td>                  
              <td>{{ $value->num_bulto }}</td>                  
              <td>{{ $value->created_at }}</td>                  
            </tr>                
        </tbody>
      </table>
    </div>
    </section>         
    <a class="close-reveal-modal close-reveal-custom" aria-label="Close">&#215;</a>
  </div>
      @endforeach  
</section>   
  </body>
</html>