
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Tabla de multiplicar</h1>
    <form action="tabla.php" method="post">
      <input type="text" name="num" value="">
      <input type="submit" value="Generar">
    </form><br>
    <table style="border: solid 1px;">
      <?php if($_POST){
        $num=$_POST['num'];
        for ($i=1; $i <= 10; $i++) {
        echo "<tr>
          <td style='border: dotted 1px;'>".$num."</td>
          <td style='border: dotted 1px;'>x</td>
          <td style='border: dotted 1px;'>".$i."</td>
          <td style='border: dotted 1px;'>=</td>
          <td style='border: dotted 1px;'>".$num*$i."</td>
        </tr>";
        }
      }
        ?>
    </table>

  </body>
</html>
