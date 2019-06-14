<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Crear Evento</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/font-awesome.min.css" rel="stylesheet">
    <link href="dist/css/estilos.css" rel="stylesheet">
    <link href="dist/css/offcanvas.css" rel="stylesheet">

     <?php include('menu.php')?>

        
			<div class="espacio"> </div>
			<form method="POST" action="uno.php">
                <div class="form-group">
			<label>Nombre: <input type="text" name="nombre"> <br> <br></label> 
			<label>Descripcion: <input type="text" name="descripcion"> <br><br> </label>
			
            <label>Categoria: 
                <select>
                            <option value="">Seleccione una opción</option>
                            <option value="Academico">Academico</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Lúdico">Lúdico</option>
                            <option value="Estudiantil">Estudiantil</option>                    
                </select> <br><br> </label>

			<label>Fecha: <input type="date" name="fecha"> <br><br> </label>
			<label>Hora: <input type="time" name="hora"> <br><br> </label>
			<label>Lugar: <input type="text" name="lugar"> <br><br> </label>
			<label>Responsable: <input type="text" name="responsable"> <br><br> </label>

            <form action="cargar.php" method="POST"  enctype="multipart/form-data">
            <div class="form-group">
            <label class="col-sm-2 control-label">Imagen</label>
            <div class="col-sm-4">
            <input type="file" name="img" > <br> 
            </div>
            </form>

            <div class="espacio"> </div>
			<div align="center"><input type="submit" name="ENVIAR" value="CREAR"></div>
            </div>
			</form>	

</head>

<div class="espacio"> </div>
    
<?php include('footer.php')?>
<?php include('copy.php')?>


