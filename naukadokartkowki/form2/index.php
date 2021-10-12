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

        ETYKIETA;
      }


      if(!empty($_POST['ilosc'])){
        $ilosc =  $_POST['ilosc'];
        echo "ilość osób w rodzinie = $ilosc <br>";
          foreach ($ilosc as $key => $value) {
            // code...
          }

      }


     ?>


    </form>

  </body>
</html>
