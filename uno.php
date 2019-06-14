<?php
include("conexion.php");
//Registrar Eventos
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$lugar = $_POST['lugar'];
$responsable = $_POST['responsable'];


$solicitud = "INSERT INTO eventos (Nombre, Descripcion, Categoria, Fecha, Hora, Lugar, Responsable) VALUES('$nombre', '$descripcion', '$categoria', '$fecha', '$hora', '$lugar', '$responsable') ";


$resultado = mysqli_query($conexion, $solicitud);

header ("Location: index.php");

?>
