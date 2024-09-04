<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>No 9</title>
    <style>
        .box {
            display: flex;
            padding: 17%;
            justify-content: center;
            background-image: url('pp.gif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            display: flex;
            flex-direction: column;
            height: 260px;
            width: 50%;
            border: 2px solid white;
            border-radius: 10px;
            justify-content: center;
            backdrop-filter: blur(10px);
            padding: 20px;
        }
        .position {
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            margin-top: 20px;
            text-align: center;
        }
        input {
            margin-top: 20px;
        }
        button {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="container">
            <form action="" method="post">
                <input class="form-control" type="number" name="uang" id="uang" placeholder="Masukkan jumlah uang" aria-label="Default input example">
                <button type="submit" name="hitung" id="hitung" class="btn btn-primary">Hitung</button>
            </form>
            <div class="position">
                <?php
                if (isset($_POST['hitung'])) {
                    $pecahan = [100000, 20000, 500];
                    $hasil = [];
                    $uang = intval($_POST['uang']); // Mengambil data dari POST dan mengubahnya menjadi integer
                    
                    foreach ($pecahan as $nilai) {
                        $hasil[$nilai] = intdiv($uang, $nilai); // Menghitung jumlah lembar untuk setiap pecahan
                        $uang %= $nilai; // Menghitung sisa uang
                    }
                    
                    echo "<br>Lembar Rupiah<br>";
                    
                    foreach ($hasil as $nilai => $lembar) {
                        echo "Rp " . number_format($nilai, 0, ',', '.') . ": " . $lembar . "<br>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
