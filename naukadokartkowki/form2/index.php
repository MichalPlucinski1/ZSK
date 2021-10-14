<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(!isset($_POST['ilosc']))
      {
        echo <<<ETYKIETA
        <h3>
        <form method="post">
          <input type="number" name="ilosc">
          <input type="submit">
        </form>
        ETYKIETA;
      }


      if(!empty($_POST['ilosc'])){
        $ilosc =  $_POST['ilosc'];
        echo "ilość osób w rodzinie = $ilosc <br>";
          echo <<<ETYKIETA
          <br>
          <form method="post">
          <br>
          ETYKIETA;
          for ($i=1; $i < $ilosc+1; $i++) {
          echo "<input type=\"number\" name=\"wiek\" placeholder=\"Wprowadz wiek $i osoby\"> <br>";
          }
          echo "<input type=\"submit\" ></form>";
          echo "<pre>";
          print_r($_POST);
          echo "</pre>";
            }







     ?>


    </form>

  </body>
</html>
