<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>PaladArt</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <section class="main-container">
    <div class="row">
      <?php
        include "conex.php";
        session_start();
        $salto="c0ebb28701288bcd491128cee9c693191f5bcb";
        $nick=$_POST['nick'];
        $password=$_POST['password'];
        $sql_pass="SELECT * from usuarios WHERE nick='admin'";
        $consulta_pass=mysqli_query($conexion,$sql_pass);
        if ($consulta_pass) {
          while ($row=mysqli_fetch_array($consulta_pass)) {
            $hash=$row['password'];
            /*$_SESSION["id"] =$row['id'];
            $_SESSION["nombres"] =$row['nombres'];
            $_SESSION["apellidos"] =$row['apellidos'];
            $_SESSION["rol"] =$row['rol'];*/
          }
          if (password_verify($salto.$password,$hash)) {
            $sql_pass2="SELECT * from usuarios WHERE nick='admin'";
            $consulta_pass2=mysqli_query($conexion,$sql_pass);
            while ($row2=mysqli_fetch_array($consulta_pass2)) {
              $_SESSION["id"] =$row2['id'];
              $_SESSION["nombres"] =$row2['nombres'];
              $_SESSION["apellidos"] =$row2['apellidos'];
              $_SESSION["rol"] =$row2['rol'];
            }
            if ($_SESSION['rol']=='admin') {
              header("location: ../index.php");
            }else {
              header("location: ../noadmin.php");
            }
          }else {
          echo "<div class='alert alert-danger'>";
          echo "<br>Datos erroneos<br>";
          echo "</div>";
          echo "<a class='btn btn-info' href='../login.php'> Volver al login</a>";
          }
        }
        else {
          echo "<br/>Datos erroneos<br/>";
          echo "<a href='../login.php'> Volver al login</a>";
          }
   ?>
    </div>
  </section>

 <!--footer-->
        <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>U.P.D.S.</strong>. Todos los derechos reservados
          </div>
          <div class="credits">
            Desarrollado por <a href="mihaelcruz.com">Mihael Cruz</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
