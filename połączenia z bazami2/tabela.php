<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
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
      echo <<< TABLE
      <table>
        <tr>
          <th>id</th>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data Urodzenia</th>
        </tr>

TABLE;
      while($row = $result->fetch_assoc())
      {
      echo <<< ROW
      <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[surname]</td>
        <td>$row[birthdate]</td>
      </tr>
ROW;
      }

      echo "</table>";
      ?>

  </body>
</html>
