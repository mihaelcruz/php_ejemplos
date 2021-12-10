<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="EJERCICIOCLASE3.php" method="post">
        <h3>INTRODUZCA UN NUMERO</h3><br>
        <input type="text" name="variable"><br>
        <input type="submit">
    </form>
</body>
</html>
<?php
    if($_POST){
        $variable=$_POST['variable'];

            if($variable%2){
                echo "es inpar";
            }else{
                echo "es par";
            }
            function numeroPrimo($a)
            {
                $variable=$a;
                $contador = 0;
                for($i = 1; $i <= $a; $i++){
                    if($a % $i == 0){
                    $contador ++;
                    }
                }
                if($contador==2){
                    echo "<br>es primo";

                }else{
                    echo "<br>no es primo";

                }
           }
            numeroPrimo($variable);


    }
?>
