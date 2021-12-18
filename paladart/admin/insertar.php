<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
    include 'includes/header.php';
    ?>
<h2>Insertar plato</h2>
<form class="" action="proceso.php" method="post">
  <div class="form-group col-xs-6">
    Nombre: <input class="form-control" type="text" name="nombre" value="">
    Precio: <input class="form-control" type="text" name="precio" value="">
    descripci&oacute;n<input type="text" class="form-control" name="descripcion" value="">
    <input type="submit" name="" value="Enviar">
  </div>

</form>
<a class="btn btn-info" href="platos.php">Volver</a>

    <?php
        include 'includes/footer.php';
      }
      else{
        header("location: login.php");
      }
     ?>
