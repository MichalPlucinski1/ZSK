<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>uzytkownicy</title>
  </head>
  <body>

    <h4>Użytkownicy</h4>
    <?php
      $connect = new mysqli('localhost', 'root', '', 'zsk_4b_baza1'); //możliwość robienia zapytania
      $sql = "SELECT * FROM `users`;"; // zapytanie

      $result = $connect->query($sql); // wysyłamy zapytanie i otrzumujemy wynik
      //$row = $result->fetch_assoc(); // pobieranie 1 wiersza

      while($row = $result->fetch_assoc())
      {
      echo <<< ROW
      Id:$row[id]
      <br>
      Name:$row[name]
      ,
      surname:$row[surname]
      <br>
      birthdate:$row[birthdate]
      <hr>
ROW;
      }
      ?>

  </body>
</html>
