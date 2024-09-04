<?php
$bil1= [80, 77, 65, 89, 55, 12, 90, 86]; //array dimensi 1
$bil2= [77, 99, 55, 81, 45, 90, 91, 98];

$equality = array_intersect($bil1, $bil2); //mencari nilai yang sama
$difference = array_diff($bil1, $bil2);//mencari nilai yang tidak sama

$equalityString = implode(", ", $equality); //implode() digunakan untuk menggabungkan array menjadi string
$differenceString = implode(", ", $difference);
echo "Nilai yang sama: " . $equalityString . "<br>";
echo "Nilai yang tidak sama: " . $differenceString . "<br>";
?>