<?php
include("conexion.php");
// Formulario para actualizar datos
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$lugar = $_POST['lugar'];
$responsable = $_POST['responsable'];
$id = $_POST['id'];



$solicitud = "UPDATE eventos SET Nombre= '$nombre', Descripcion= '$descripcion' , Categoria= '$categoria', Fecha= '$fecha' , Hora= '$hora', lugar= '$lugar', Responsable= '$responsable' WHERE id=$id";

$resultado = mysqli_query($conexion, $solicitud);

header("Location: index.php");

?>