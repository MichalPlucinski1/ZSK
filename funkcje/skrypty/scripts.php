<?php

require_once '../funkcje/functions.php';
//show();
  if(!empty($_POST['name'])){
    echo show1($_POST['name']) . "<br>";
    //echo $_POST['name'];
    echo validate("jaK shorRay",3);
    //echo validate("jaK shorRay"), "Długość zmiennej: ", strlen($name).
  }
 ?>
