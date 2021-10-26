<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Prostokąt</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj bok a"> <br>
      <input type="text" name="sideB" placeholder="Podaj bok b"> <br> <br>
      <input type="submit" value="oblicz"> <br> <br>
    </form>
    <?php
    if (!empty($_GET['sideA']) && !empty($_GET['sideB']) ) {
      $sideA=str_replace(',','.',$_GET['sideA']);
      $sideB=str_replace(',','.',$_GET['sideB']);
      $area=$sideA*$sideB;
    //
      $circule=2*$sideA + 2*$sideB;
      echo <<<RESOULT
      <hr>
      Pole prostokąta wynosi:$area cm<sup>2</sup><br>
      Obwód prostokąta wynosi:$circule cm<br>
      RESOULT;
    }
    else{
      echo "wypełnij bok a i b";
    }
    ?>
  </body>
</html>
