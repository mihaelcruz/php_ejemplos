<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FACTORIAL</title>
  </head>
  <body>
    <h1>Factorial de un n&uacute;mero</h1>
    <form action="factorial.php" method="post">
      <input type="text" name="num" value="">
      <input type="submit" value="Calculo factorial">
    </form>
  </body>
</html>
<?php
  if($_POST){
    $num=$_POST['num'];
    $factorial=1;
    for ($i=1; $i <= $num; $i++) {
      $factorial=$factorial*$i;
    }
    echo "<br> El factorial de ". $num ." es: ".$factorial;
  }
?>
