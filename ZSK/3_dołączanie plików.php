<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Początek strony</h3>
      <?php
      include './3_1.php'; //działa dalsza część strony
      include_once './3_1.php'; //nie podłączy, jeżeli już podłączony, tak samoz  require

      require './3_1.php'; //nie działa, fatal error, początek strony jest
       ?>
    <h3>Koniec strony</h3>
  </body>
</html>
