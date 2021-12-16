<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MAYOR Y MENOR DE 3 NUMEROS</title>
  </head>
  <body>
    <h1>MAYOR Y MENOR DE 3 NUMEROS</h1>
    <form action="mayor.php" method="post">
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
    if($a>$b){
      if($a>$c){
        echo "El mayor es: ".$a;
      }
      else{
        echo "El mayor es: ".$c;
      }
    }
    else{
      if($b>$c){
        echo "El mayor es: ".$b;
      }
      else{
        echo "El mayor es: ".$c;
      }
    }
    echo "<br>";
    if($a<$b){
      if($a<$c){
        echo "El menor es: ".$a;
      }
      else{
        echo "El menor es: ".$c;
      }
    }
    else{
      if($b<$c){
        echo "El menor es: ".$b;
      }
      else{
        echo "El menor es: ".$c;
      }
    }


  }
?>
