<nav class="navbar navbar-expand-lg navbar-blue bg-light">
      <div class="container">
      	 <a class="navbar-brand" href="index.php"><img src="png/logo.png" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

<!--
         <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
        <html lang="es">
            <form method="POST" action="buscar.php">
                            <div class="form-group">
                  <label>Búsqueda: <input type="text" name="buscar"> <br></label> 
                  <input type="submit" name="buscar aquí" value="buscar">
                            </div>
            </form>
            </li>           
          </ul>          
        </div>
-->

<form id="buscador" name="buscador" method="post" action= "buscar.php">
    <input id="buscar" name="buscar" type="search" placeholder="Escriba aquí..." autofocus >
    <input type="submit" name="buscador" class="boton peque aceptar" value="Buscar">
</form>


        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="Ingreso.php"> <b> Ingresar </b> <span class="sr-only">(current)</span></a>
            </li>           
          </ul>          
        </div>

         


      </div>
    </nav>