<?php
echo PHP_VERSION;
echo "<br>";
echo 2**10; //1024
$x=1;
$y=10;
echo "<br>";

echo $x<=>$y . "<br>";  //else, if, elseif

//czy równe

$x=1;
$y=1.0;
echo "<br>";

echo gettype($x) ."<br>"; // intereg
echo gettype($y) . "<br>"; // double
if ($x==$y) {
  echo "Równe";
}else{
  echo "Różne";
}


if ($x===$y) {
  echo "Identyczne";
}else{
  echo "Różne";
}
  // code...

/*
preinkrementacja ++$x
postinkrementacja $x++
predekrementacja --$x
postdekrementacja $x--
*/

$x=5;
$x=++$x; //6
echo $x;

$x=$x++; //6
echo $x;
$y=$x++;
echo $y; //6
echo $x . "<br>"; //7


//zadanie

$x=1;
echo $x . "<br>";  //1
$x=$x++;
echo $x . "<br>";  //1
$x=++$x;
echo $x . "<br>";  //2
$y=++$x;
echo $y . "<br>";  //3
echo $x . "<br>";  //3
$y=$x++;
echo $y . "<br>";  //3
echo $x . "<br>";  //4

$x++;


 ?>
