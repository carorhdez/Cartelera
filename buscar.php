<html> 
<body> 
  

<?php 
  include("conexion.php");

if (!isset($buscar)){ 
      echo "Debe especificar una cadena a buscar"; 
		} 
		$solicitud = " SELECT * FROM eventos WHERE Nombre LIKE '%buscar%' OR Descripcion LIKE '%buscar%'";
		$result = mysqli_query($conexion, $solicitud); 
		if ($row = mysqli_fetch_array($result)){ 
		      echo "<table border = '1'> \n"; 
		//Mostramos los nombres de las tablas 
		echo "<tr> \n"; 
		while ($field = mysqli_fetch_field($result)){ 
		            echo "<td>$field->name</td> \n"; 
		} 
		      echo "</tr> \n"; 
		do { 
		            echo "<tr> \n"; 
		            echo "<td>".$row["Nombre"]."</td> \n"; 

		            echo "</tr> \n"; 
		      } while ($row = mysqli_fetch_array($result)); 
		            echo "</table> \n"; 
		} else { 
		echo "¡ No se ha encontrado ningún registro !"; 
		} 
?> 
  
</body> 
</html> 