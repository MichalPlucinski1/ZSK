<?php
//date();

echo"dzien-meisiac-rok: ", date("d-m-Y"), 'r.<br>';
echo date('m-d-y') , 'r.<br>';
echo date('d-F-Y') , 'r.<br>';
setlocale(LC_ALL, 'polish');
echo strftime('%d, %B, %Y'), '<br>';

echo date('G:i:s'), '<br>';

//odświerzanie co sekundę


 ?>

 <script>
   setTimeout(function(){
     window.location.reload();
   }, 1000)
 </script>
 <?php
 echo date('H:i:s'), '<br>'; //13:40:13
 echo date('g:i:sa'), '<br>'; //13:40:13pm

//getdate();
echo "<pre>";
$date = getdate();
print_r($date);
echo "</pre>";
echo $date['wday'], '<br>';
echo $date['yday'], '<br>';
echo date("L") , '<br>';//czy rok przestepny


//mtime
$today = mktime(0,0,0, date("m"), date("d"), date("Y"));
echo $today, "<br>";
echo $date[0], "<br>"; //odświerzanie

// ile lat od 1 stycznia 1970;

$yeardiff = $today/(60*60*24*365);
echo (int)$yeardiff;
echo "<br>";
// ile lat minęło w zeszłym roku
$today = mktime(0,0,0, date("m"), date("d"), date("Y")-1);
$yeardiff = $today/(60*60*24*365);
echo (int)$yeardiff;
  ?>
