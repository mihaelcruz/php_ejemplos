<?php
  session_start();
  $usuario=$_SESSION["nombres"].' '.$_SESSION["apellidos"];
  $rol=$_SESSION["rol"];
  if (isset($usuario)&&$rol=='admin') {
    include 'includes/header.php';
    echo "Bienvenid@ ".$usuario.'<br> Usted inicio la sesion con rol: '.$rol;
    include 'includes/footer.php';
  }
  else{
    header("location: login.php");
  }

 ?>
