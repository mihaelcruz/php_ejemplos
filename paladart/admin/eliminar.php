<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
  include 'includes/header.php';
  include "includes/conex.php";
  $id=$_GET['id'];
  $sql="delete from platos where id=$id";
  $consulta=mysqli_query($conexion,$sql);
  mysqli_close($conexion);
  if ($consulta) {
    echo "<div class='alert alert-success'>";
    echo "Sus datos fueron eliminados correctamente.";
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
