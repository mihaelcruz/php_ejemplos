<?php
  $servidor="localhost";
  $usuario="root";
  $password="";
  $bd="bd_paladart";
  $conexion=new mysqli($servidor,$usuario,$password,$bd);
  if ($conexion->connect_error) {
    die("Error. Conexión fallida. ".$conexion->connect_error);
  }
  //echo "Conexión exitosa";
 ?>
