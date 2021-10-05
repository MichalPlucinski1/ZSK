<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj bok a"> <br> <br>
      <input type="submit" value="oblicz"> <br> <br>
    </form>
    <?php
    if (!empty($_GET['sideA'])) {
      $sideA=str_replace(',','.',$_GET['sideA']);
      $area=pow($sideA,2);
      $circule=4*$sideA;
      echo <<<RESOULT
      <hr>
      Pole kwadratu wynosi:$area cm<sup>2</sup><br>
      Obwód kwadratu wynosi:$circule cm<br>
      RESOULT;
    }
    else{
      echo "wypełnij bok a";
    }
    ?>
  </body>
</html>
