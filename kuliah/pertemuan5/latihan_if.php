<?php

$total_belanja = 150000;
if($total_belanja >= 150000){
   echo "Anda <b>dapat</b> hadiah!";
}else{
    echo "Anda <b>tidak dapat</b> hadiah!";
}
echo "<hr/>";

$nilai_akhir = 75;
/* Silahkan Buat Kondisi Dengan $nilai_akhir
A	80 - 100
B+	75 < 79,9
B	70 < 74,9
C+	65 < 69,9
C	55 < 64,9
D	40 < 54,9
E	0 < 39,9
*/

if ($nilai_akhir >= 80) {
    $grade = 'A';
} elseif ($nilai_akhir >= 75) {
    $grade = 'B+';
} elseif ($nilai_akhir >= 70) {
    $grade = 'B';
} elseif ($nilai_akhir >= 65) {
    $grade = 'C+';
} elseif ($nilai_akhir >= 55) {
    $grade = 'C';
} elseif ($nilai_akhir >= 40) {
    $grade = 'D';
} else{
    $grade = 'E';
}
echo "Grade: $grade";
