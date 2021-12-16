<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <form action="EJERCICIOCLASE.php" method="post">

        Ingrese un numero:

        <input type="text" name="num" id="">

        <input type="submit" value="ENVIAR">

    </form>



</body>

</html>



<?php

    if($_POST)

    {

        $num = $_POST['num'];



        echo "<ul>";



        for($f=1; $f<=$num; $f++)

        {

            echo "<li>" .$f ."</li>";

        }



        echo "</ul>";

    }

?>
