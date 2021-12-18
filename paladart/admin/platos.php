<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
    include 'includes/header.php';
    ?>
<h2>Platos</h2>
<a class="btn btn-success pull-right" href="insertar.php">Insertar plato</a>
<a class="btn btn-info pull-right" href="imprimir.php">Imprimir</a>
<table class="table">
  <tr>
    <td>Nombre</td>
    <td>Precio</td>
    <td>Descripci&oacute;n</td>
    <td>Acciones</td>
  </tr>
  <?php
    include "includes/conex.php";
    $sql="select * from platos";
    $consulta=mysqli_query($conexion,$sql);
    mysqli_close($conexion);
    while ($row=mysqli_fetch_array($consulta)) { ?>
      <tr>
        <td><?php echo $row['nombre'];?></td>
        <td><?php echo $row['precio'];?></td>
        <td><?php echo $row['descripcion'];?></td>
        <td>
          <a class="btn btn-info" href="imagen.php?id=<?php echo $row['id'];?>">Imagen</a>
          <a class="btn btn-primary" href="ver.php?id=<?php echo $row['id'];?>">Ver</a>
          <a class="btn btn-warning" href="editar.php?id=<?php echo $row['id'];?>">Editar</a>
          <a class="btn btn-danger" href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
        </td>
      </tr>

  <?php
    }
   ?>


</table>


<?php
    include 'includes/footer.php';
  }
  else{
    header("location: login.php");
  }
 ?>
