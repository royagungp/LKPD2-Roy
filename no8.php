<?php
$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;

$hitung = array_count_values($data)[$cari];//berfungsi untuk menghitung kemunculan nilai dalam array. 
echo "Data : " . implode(", ", $data); //implode() digunakan untuk menggabungkan array menjadi string
echo "<br>";
echo "Jumlah angka 100 = ". $hitung;