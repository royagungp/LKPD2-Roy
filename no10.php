<?php
$usia = [12,15,17,20,25,30,35,40,45,50];
$dewasa = 0;
$anak = 0;

foreach ($usia as $umur) {
    if ($umur >= 17) {
        $dewasa +=1;
    } else {
        $anak +=1;
    }
}

echo "Jumlah Usia : " . implode(", ",$usia);
echo "<br>";
echo "Jumlah Katagori Dewasa : $dewasa";
echo "<br>";
echo "Jumlah Katagori Anak : $anak";
?>