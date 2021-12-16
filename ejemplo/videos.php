<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    
  </head>
  <body>
    <div style="text-align:center;">
      <h1>Computadora</h1>

    </div>
    <ul>
      <li>1. Historia de la computadora</li>
      <li>2. Microprocesadores</li>
      <li>3. Memoria Ram</li>
    </ul>
    <p>Elija un n&uacute;mero</p>
    <form action="videos.php" method="post">
      <input type="text" name="num" value="">
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>

<?php
if($_POST){
  $opcion=$_POST['num'];
  if($opcion==1){
    echo "<h3>1. Historia de la computadora</h3>
    <iframe width='560' height='315' src='https://www.youtube.com/embed/a8Q2xpI7hbs' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
    ";
  }
  if ($opcion==2) {
    echo "<h3>2. Microprocesadores</h3>
    <iframe width='560' height='315' src='https://www.youtube.com/embed/qA2egYS58Nc' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  }
  if ($opcion==3) {
    echo "<h3>3. Memoria Ram</h3>
    <iframe width='560' height='315' src='https://www.youtube.com/embed/5nznFIrN_4U' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  }
}
 ?>
