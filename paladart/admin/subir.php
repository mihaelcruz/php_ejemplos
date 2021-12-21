<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
  include 'includes/header.php';
  $id=$_POST['id'];
  /*subir imagen*/
$target_dir = "img/";
$target_file = $target_dir . basename($id.'.jpg');
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<div class='alert alert-success'>";
    echo "La imagen: ". htmlspecialchars( basename( $id.'.jpg')). " se subio correctamente .";
    echo "<div>";
  } else {
    echo "<div class='alert alert-success'>";
    echo "Error, vuelva a intentar.";
    echo "<div>";
  }
}
  /*fin subir imagen*/


    ?>
    <a class="btn btn-info" href="platos.php">Volver</a>


    <?php
        include 'includes/footer.php';
      }
      else{
        header("location: login.php");
      }
     ?>
