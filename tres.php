<?php
include("conexion.php");

$id = $_GET['id'];
//Eliminar
$solicitud = "DELETE FROM eventos WHERE ID=$id";
$resuktado = mysqli_query($conexion, $solicitud);

header("Location: index.php");
?>