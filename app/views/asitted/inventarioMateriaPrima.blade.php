<!doctype html>
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
<section id="inventarioMateriPrima">
  <div class="row">
    <div class="small-12 columns">
      <h3>Materia Prima</h3>
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
            <th><span>Unidad</span></th>
            <th><span>Cantidad</span></th>
          </tr>                              
        </thead>
        <tbody> 
            <tr class="openModal" data-reveal-id="popDetalles">                    
              <td>Telas Pocho</td>
              <td>pz</td>
              <td>20</td>                  
            </tr>                
        </tbody>
      </table>
    </div>
  </div>
  <div id="popDetalles" class="reveal-modal reveal-custom medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
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
            
            </tr>                
        </tbody>
      </table>
    </section>         
    <a class="close-reveal-modal close-reveal-custom" aria-label="Close">&#215;</a>
  </div>
</section>
    <script src="{{URL::asset('assets/js/vendor/jquery.js')}}"></script>
    <script src="{{URL::asset('assets/js/foundation.min.js')}}"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>