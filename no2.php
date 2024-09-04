<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>
  body{
    background-image:url(p.gif); 
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
  }
  .container{
    margin-top: 30%;
    padding: 30px;
    border: 2px solid white;
    backdrop-filter: blur(18px);
    width: 40%;
    border-radius: 10px;
    
  }
  button{
    margin-top: 20px;
  }
  .position{
    margin-top: 40px;
    color: white;
  }
  input{
    padding: 10px;
  }
</style>
<body>
  <div class= "container d-flex flex-column">
  <div class="d-flex flex-column justify-content-center">
    <form method="post" action="" >
      <input class="form-control" type="number" name="jamKerja" placeholder="Default input" aria-label="default input example">
      <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
    </form>
    <div class = "position">
<?php
$jamNormal= 8;
$lembur= $_POST['jamKerja']-$jamNormal;
$kompensasi1= 50000;
$komSelanjutnya= 25000;

if($_POST['jamKerja'] > 8){
  $kompensasi= $kompensasi1+($komSelanjutnya*$lembur)-25000;
  echo "Lama kerja:".$_POST['jamKerja'];
  echo "<br>";
  echo "Jam Lebih :".$lembur;
  echo "<br>";
  echo "jumlah kompensasi :".number_format($kompensasi,0,',','.');//number_format() digunakan untuk menampilkan angka ke dalam format yang sesuai
}
?>
    </div>
  </div>
  </div>
</body>
</html>
