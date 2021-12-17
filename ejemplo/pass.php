<!DOCTYPEhtml>
<htmllang="en">
<head>
<metacharset="UTF-8">
<metahttp-equiv="X-UA-Compatible"content="IE=edge">
<metaname="viewport"content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<formaction="clases.php"method="post">
<table>
<tr>
<td>Password:</td>
<td><inputtype="text"name="pass"></td>
</tr>
</table>
<inputtype="submit"value="Generar">
</form>
<?php
if($_POST){​
$pass=$_POST['pass'];
    }​
$var1='R00t.123';
if($pass == $var1){​
echo"La contaseña es correcta";
    }​
else{​
echo"La contraseña es incorrecta";
    }​
?>
</body>
</html>
