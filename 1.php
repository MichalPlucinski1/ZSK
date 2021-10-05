<?php
  echo 'ZSK<br>';
  echo 'ZSK<br>';
  $name="Janusz";
  echo 'Imię: $name<br>'; //imię; $name ctrl+shift
  echo "Imię: $name<br>";  //Imię: Janusz//

  //typy danych
  //całkowitych

  $całkowita=10; //polskie znaki w nazwach zmiennych ;)
  $bin=0b1011; //11
  $oct=011;//9
  $hex=0xA; //10

echo "<br>$bin<br>";
echo "<br>$oct<br>";
echo "<br>$hex<br>";



//konkatenacja

echo "text1" . "text2";

//interpolacka

echo "text1" , "text2";

//typ zmiennoprzecinkowy

$x=10.5;

//logiczny

$prawda=true;
$falsz=false;

echo "<br> $falsz";

//składania heredoc ("")

echo <<<ETYKIETA
  <hr>
  Imię: $name<br>
  <h3>Poznań</h3>
  <hr>
ETYKIETA; //ctrl+shift+Enter


$text = <<<ETYKIETA
  <hr>
  Imię: $name<br>
  <h3>Poznań</h3>
  <hr>
ETYKIETA;
echo $text;

//nowdoc ('')


echo <<<'ETYKIETA'
  <hr>
  Imię: $name<br>
  <h3>Poznań<h3>
  <hr>
ETYKIETA;

echo "wartosc zmiennej name: $name, nazwa zmiennej
name: \$name";
 ?>
