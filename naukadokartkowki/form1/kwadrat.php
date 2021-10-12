<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
      <input type="bok" name="bok"><br>
      <input type="submit" name="oblicz pole"><br>

    </form>


    <?php
      if(!empty($_GET['bok'])) {

        $bok = str_replace(',','.',$_GET['bok']);

        $pole = $bok **2;
        $obwod = $bok *2;


        echo "pole =  $pole <br> obwód = $obwod";
      }

     ?>
  </body>
</html>
