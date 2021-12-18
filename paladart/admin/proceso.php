<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
  include 'includes/header.php';
  include "includes/conex.php";
  $nombre=$_POST['nombre'];
  $precio=$_POST['precio'];
  $descripcion=$_POST['descripcion'];
  $usuario_creador=$_SESSION['id'];
  $creado=date('Y-m-d H:i:s');
  $sql="insert into platos (nombre,precio,descripcion,usuario_creador,creado) values ('$nombre','$precio','$descripcion','$usuario_creador','$creado')";
  $consulta=mysqli_query($conexion,$sql);
  mysqli_close($conexion);
  if ($consulta) {
    echo "<div class='alert alert-success'>";
    echo "Sus datos fueron guardados correctamente.";
    echo "<div>";
  }
  else{
    echo "<div class='alert alert-danger'>";
    echo "Error, vuelva a intentar.";
    echo "<div>";
  }
    ?>
    <a class="btn btn-info" href="platos.php">Volver</a>


    <?php
        include 'includes/footer.php';
      }
      else{
        header("location: login.php");
      }
     ?>
