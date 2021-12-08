<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table style="border: solid 1px;">
      <?php $num=5;
      for ($i=1; $i <= 10; $i++) {
      echo "<tr>
        <td style='border: dotted 1px;'>".$num."</td>
        <td style='border: dotted 1px;'>x</td>
        <td style='border: dotted 1px;'>".$i."</td>
        <td style='border: dotted 1px;'>=</td>
        <td style='border: dotted 1px;'>".$num*$i."</td>
      </tr>";
      }    ?>
    </table>



  </body>
</html>
