<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Modificar evento</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/font-awesome.min.css" rel="stylesheet">
    <link href="dist/css/estilos.css" rel="stylesheet">
    <link href="dist/css/offcanvas.css" rel="stylesheet">

     <?php include('menu.php')?>

<?php
include("conexion.php");

//Modificar 
$id = $_GET['id'];

$solicitud = "SELECT * FROM eventos WHERE ID=$id";
$resultado = mysqli_query($conexion, $solicitud);

?>

<form method="POST" action="cuatro.php">
	<?php

	while($fila = mysqli_fetch_array($resultado)){
		echo "Nombre: <input type='text'; name='nombre' value=' " . $fila['Nombre'] ."'><br>";
		echo "Descripcion: <input type='text'; name='descripcion' value= '" . $fila['Descripcion']  ."'><br> ";
		echo "Categoria: <input type='SELECT'; name='categoria' value= '". $fila['Categoria'] ." '><br>";
		echo "Fecha: <input type='date'; name='fecha' value= '" . $fila['Fecha'] ." '><br>";
		echo "Hora: <input type='time'; name='hora' value= '" . $fila['Hora'] ."'> <br>";
		echo "lugar: <input type='text'; name='lugar' value= '" . $fila['lugar'] ."'> <br>";
		echo "Responsable: <input type='text'; name='responsable' value= '" . $fila['Responsable'] ."' ><br>";

		echo "<input type='hidden' name='id' value='".$id."'><br>";
	}
	?>
	<input type="submit" name="ENVIAR" value="CAMBIAR">

</form>
