<?php
echo "<pre>";
print_r ($_POST);
echo "</pre>";

if (!empty($_POST['imie']) && !empty($_POST['figura'])) {
  switch ($_POST['figura']) {
    case 'Kwadrat':
      header('location: ./kwadrat.php');
      break;

    case 'Prostokąt':
      header('location: ./prostokat.php');
      break;
  }
}

else {
  echo "Wypełnij pola!";

}


 ?>
