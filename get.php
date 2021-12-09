<?php
  if($_GET){
    $nombre=$_GET['nombre'];
    $direccion=$_GET['direccion'];
    echo "Bienvenido ".$nombre. " Su dirección es: ".$direccion;
    exit();
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="get.php" method="get">
      Nombre
      <input type="text" name="nombre" value=""><br>
      Direcci&oacute;n
      <input type="text" name="direccion" value=""><br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
