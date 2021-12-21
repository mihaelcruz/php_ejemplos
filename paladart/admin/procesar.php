<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
  include 'includes/header.php';
  include "includes/conex.php";
  $id=$_POST['id'];
  $nombre=$_POST['nombre'];
  $precio=$_POST['precio'];
  $descripcion=$_POST['descripcion'];
  $usuario_modificador=$_SESSION['id'];
  $modificado=date('Y-m-d H:i:s');
  $sql="update platos set nombre='$nombre',precio='$precio',descripcion='$descripcion',usuario_modificador='$usuario_modificador',modificado='$modificado' where id=$id";
  $consulta=mysqli_query($conexion,$sql);
  mysqli_close($conexion);
  if ($consulta) {
    echo "<div class='alert alert-success'>";
    echo "Sus datos fueron actualizados correctamente.";
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
