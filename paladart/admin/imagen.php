<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
    include 'includes/header.php';
    include 'includes/conex.php';
    $id=$_GET['id'];
?>
<h2>Subir imagen</h2>
<img src="img/<?php echo $id;?>.jpg" alt="">
<form class="" action="subir.php" method="post" enctype="multipart/form-data">
  <div class="form-group col-xs-6">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <input class="form-control-file" type="file" name="fileToUpload" value="">
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
