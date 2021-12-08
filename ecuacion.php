<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FACTORIAL</title>
  </head>
  <body>
    <h1>Ecuaci&oacute;n de segundo grado - Formula general</h1>
    <form action="ecuacion.php" method="post">
      <input type="text" name="a" value="">
      <input type="text" name="b" value="">
      <input type="text" name="c" value="">
      <input type="submit" value="Calcular">
    </form>
  </body>
</html>
<?php
  if($_POST){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $paso1=($b*$b)-(4*$a*$c);
    $paso2=2*$a;
    $x1=(-$b+(sqrt($paso1)))/$paso2;
    $x2=(-$b-(sqrt($paso1)))/$paso2;
    if(is_nan($x1) or is_nan($x2)){
      echo "<br>No tiene soluciones reales";
    }
    else{
      echo "<br>El resultado de X1 es: ".$x1;
      echo "<br>El resultado de X2 es: ".$x2;
    }


  }
?>
