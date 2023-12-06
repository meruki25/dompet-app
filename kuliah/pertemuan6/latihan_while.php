<?php 

$coba = true;
$ulangi = 0;
while($coba){
   echo "<p>Ini adalah perulangan ke-$ulangi</p>";
   $ulangi++;

   if($ulangi == 5) 
    $coba = false;
}
