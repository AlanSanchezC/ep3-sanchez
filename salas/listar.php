<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>login</title>

    <!-- Bootstrap Core CSS -->
    <link href="salas/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="salas/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

   

</head>

<body>
<?php //session_start(); 
require "cfg/conexion.php";



   $query="select * from SALA_REMOTA";

   $resultado=mysqli_query($conexion, $query);
   echo "<div class='container'>";
   echo "<table class='table table-striped'>";
   echo "<th> Nombre de Sala</th> <th>Respondable de Sala</th> <th>Telefono</th> <th>E-Mail</th> <th>IP</th> <th>Servicios</th> <th>Editar</th> <th>Eliminar</th>";
   while ($dato=mysqli_fetch_array($resultado)) {
   
   echo "<tr>";  
   echo "<td>". $dato['nombre']."</td>";
   echo "<td>". $dato['responsable']."</td>";
   echo "<td>". $dato['telefono']."</td>";
   echo "<td>". $dato ['email_responsable']."</td>";
   echo "<td>". $dato ['ip']."</td>";
   echo "<td>". $dato ['Servicios']."</td>";
   echo "<td><a href='salas/editarSala.php?id=". $dato ['id_sala_remota']."'>Editar</a></td>";
   echo "<td><a href='salas/eliminarSala.php?id=". $dato ['id_sala_remota']."'>Eliminar</a></td>";
   echo "</tr>";
   }
   echo "</table>";
?>
   <button type="button" class="btn btn-success" onclick="window.location.href='salas/sala_remota.html'">Agregar Sala</button>
   </div>
    

</body>