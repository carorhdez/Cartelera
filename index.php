<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Cartelera de Evenetos UTP</title>

    <!-- Estilos Bootstrap 4 CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/font-awesome.min.css" rel="stylesheet">
    <link href="dist/css/estilos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script language="javascript" type="text/javascript" src="extras/js/jquery/jquery-1.3.2.min.js"></script>
        <script language="javascript" type="text/javascript">
            $(document).ready(function(){

				$(".contenido1").hide();
                $("#combito1").change(function(){
                $(".contenido1").hide();
                    $("#div_" + $(this).val()).show();
                });
				
            });
        </script>
    <!-- Estilos -->
  </head>

  <body>


    <?php include('menu.php')?>

    <div class="Cartelera">	    
        <div class="row">
            <div class="col-xs-10 col-sm-5 col-md-5 col-lg-5">
            	<div align="center"><p>Cartelera UTP</p></div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">            	
            	<marquee><p>Bienvenido, enteraté de nuestros próximos eventos</p></marquee>               
            </div>        
        </div>
    </div>
    
    <div class="azul">
        <div class="container">
            
                 
                 <!-- Conect db-->

                
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                         <a class="nav-link" href="Formulario.php"> <b> Crear nuevo evento </b> <span class="sr-only">(current)</span></a>
                         </li>           
                     </ul>          
                 <?php


                include ("conexion.php");

                $solicitud = " CREATE TABLE eventos (ID int NOT NULL AUTO_INCREMENT, Nombre varchar (15), Descripcion text(40), Categoria select, Fecha date, Hora time, lugar varchar(15), Responsable varchar(15), imagen varchar(100), PRIMARY KEY(ID)) ";

                $resultado = mysqli_query($conexion, $solicitud);

                 ?>

                 <!-- Mostrar Base-->
                
                 <div class ="container">
                    <div class="table-responsive-xl">
                    <table class="table">
          

                 <?php
                    include("conexion.php");

    
                //Consulta
                $solicitud = "SELECT * FROM eventos ORDER BY Fecha ASC, Hora ASC ";
                $resultado = mysqli_query($conexion, $solicitud);

                //Datos

                echo "<table border = '1'>  <tr><td> NOMBRE</td> <td> DESCRIPCION</td> <td> CATEGORIA</td> <td>FECHA</td> <td>HORA</td> <td>LUGAR</td> <td>RESPONSABLE</td> <td>IMAGEN</td> <td colspan='2'>ACCIONES</td></tr>";

                while($fila = mysqli_fetch_array($resultado) ){
                    echo "<tr>";
                    echo "<td>" . $fila['Nombre'] . "</td>"; 
                    echo "<td>" . $fila['Descripcion'] . "</td>";
                    echo "<td>" . $fila['Categoria'] . "</td>"; 
                    echo "<td>" . $fila['Fecha'] . "</td>"; 
                    echo "<td>" . $fila['Hora'] . "</td>";
                    echo "<td>" . $fila['lugar']. "</td>";
                    echo "<td>" . $fila['Responsable'] . "</td>"; 
                    echo "<td><a href=' ver.php?id=".$fila['ID'] . " '> Ver Foto</a></td>";
                    echo "<td><a href=' tres.php?id=".$fila['ID'] . " '> Eliminar</a></td>";
                    echo "<td><a href=' modificar.php?id=".$fila['ID'] . " '> Modificar</a></td>"; 
                }   echo "</tr>";

                echo "</table>"
                ?> 



                          </table>
                    </div>  
            </div>
                 <!--Fin de mostrar-->



             </div>
         </div>
     </div>
 </div>


    <div class="espacio"> </div>
    
  	<?php include('footer.php')?>
    <?php include('copy.php')?>
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script>window.jQuery || document.write('<script src="dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="dist/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
  </body>
</html>