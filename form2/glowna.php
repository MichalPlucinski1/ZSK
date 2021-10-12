<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>
    <?php
    if (!isset($_POST['person']) && !isset($_POST['srednia'])) {
      echo <<<ETYKIETA
      <h3>Ilość osób w rodzinie</h3>
      <form method="post">
        <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
        <input type="submit" name="zatwierdź">

      </form>
      ETYKIETA;
      }


    if (!empty($_POST['person'])) {
      echo "<h3>Ilość osób w rodzinie: $_POST[person]</h3>";
      echo <<<ETYKIETA
      <form method="post">
      ETYKIETA;
        for ($i=1; $i < $_POST['person'] + 1; $i++) {
          echo <<<ETYKIETA
          <input type="number" name="person" placeholder="wiek osoby nr=
ETYKIETA;

          echo "$i" ,"\">", "<br>";
        }
      echo <<<ETYKIETA
        <input type="submit" name="srednia" value="zatwierdź">
        </form>
        ETYKIETA;

if (isset($_POST['srednia'])) {

  $avg = 0;
  $count = 0;
  foreach ($_POST as $key => $value) {
    if ($key != 'srednia') {
      $avg= $value;
      $count++;
    }
  }
echo "średni wiek = " , number_format($avg/$count,2)."lat<hr>";
echo <<<ETYKIETA
 "<a href="glowna.php">strona główna</a>";
 ETYKIETA;
}
    }
    ?>
  </body>
</html>
