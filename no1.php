
<?php
$text = "";
$number = preg_replace("/[^0-9]/", "", $text);//menghilangkan semua karakter yang bukan angka asal argument terpenuhi yang pertama di keculi kan dan kedua yang mau di replace
//Ekspresi reguler adalah serangkaian karakter yang mendefinisikan sebuah pola pencarian.
if ($number) {
    echo " Text Mengandung angka : " . implode(",", str_split($number, 1));//minimal 1 max 2 membagi string yang panjang menjadi ukuran yang lebih kecil.
} else {
    echo "Text Tidak Mengandung Angka";
}
?>