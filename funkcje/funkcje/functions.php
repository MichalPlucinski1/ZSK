<?php
  function show(){
    echo "show";

  }

  function show1($name){
    return $name;
  }


  // zdefinuj funkcje o nazwie string validate, która wykona działania:
  // usunie białe znaki (trin)
  // Przekształć 1 litere na dużą (ucfirst)
  //reszta na małą mb_strtolower
  //drugi parametr będzie okreslał długość (stringa _substr)
  //długość strlen()


  function validate($string, $len){
    $string = trim($string);   //ltrin, rtrim
    $string = strtolower($string);
    $string = ucfirst($string);

    return substrn($string, 0, $len);
  }

 ?>
