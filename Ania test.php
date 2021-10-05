<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <p>Hello World</p>
      <?php

      $x=1;
      echo $x ." =1". "<br>";  //
      $x=$x++;
      echo $x ." =1". "<br>";  //
      $x=++$x;
      echo $x ." 2". "<br>";  //
      $y=++$x;
      echo $y ." =3". "<br>";  //
      echo $x ." =3". "<br>";  //
      $y=$x++;
      echo $y ." =3". "<br>";  //
      echo $x ." =4". "<br>";  //
      ?>
  </body>
</html>
