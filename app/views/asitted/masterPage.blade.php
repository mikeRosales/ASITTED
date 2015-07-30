@include('asitted.recursos')
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ASITTED</title>

  </head>
  <body>
    <div class="fixed">
      <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <h1><a href="#">ASITTED</a></h1>
          </li>
           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="left">
            <!--<li><a href="#">Right Button Active</a></li>-->
            <li class="has-dropdown">
              <a href="#">Inventario</a>
              <ul class="dropdown">
                <li><a href="{{ URL::to('/materiaPrima') }}"> Materia Prima</a></li>
                <li><a href="{{ URL::to('/productoTerminado') }}">Productos Terminados</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </nav>
    </div>
    <div class="principal">
        
    </div>




  </body>
</html>
