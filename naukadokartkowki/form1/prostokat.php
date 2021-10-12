<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
      <input type="text" name="bokA"> bok A <br>
      <input type="text" name="bokB"> bok B <br>
      <input type="submit" value="oblicz"> <br>
    </form>

    <?php
      if(!empty($_GET['bokA']) && !empty($_GET['bokB'])){

        $bokB = str_replace(',','.',$_GET['bokB']);
        $bokA = str_replace(',','.',$_GET['bokA']);
        $pole = $bokA * $bokB;
        $obwod = $bokA*2 + $bokB *2;

        echo "<br>Pole = $pole<br>obwod = $obwod";
      }

     ?>

  </body>
</html>
