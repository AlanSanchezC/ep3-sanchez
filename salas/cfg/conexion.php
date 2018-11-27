<?php
    $servidor = "localhost";
    $usuario = "root";
    $db = "info";
    $pass = "";

    $conexion = mysqli_connect($servidor, $usuario, $pass, $db);
        
    if (!$conexion) {
        die("No pudo conectarse:" . mysql_error());
    }
    else{
       //echo 'Conectado  satisfactoriamente al servidor <br>';
    }
    
?>