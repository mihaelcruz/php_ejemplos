<?php
  $password="123456";
  echo "MD5: ";
  echo md5($password);
  echo "<br>";
  echo "sha1: ";
  echo sha1($password);
  echo "<br>";
  $salto="c0ebb28701288bcd491128cee9c693191f5bcb";
  $hash=password_hash($salto.$password,PASSWORD_DEFAULT);
  echo "PASSWORD:";
  echo $hash;
  echo "<br>";
  if (password_verify($salto."mihael",$hash)) {
    echo "Password correcto";
  }
  else {
    echo "Password incorrecto";
  }
 ?>
