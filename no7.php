<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>no 7</title>
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
            height: 350px;
            width: 50%;
            border: 2px solid white;
            border-radius: 10px;
            justify-content: center;
            backdrop-filter: blur(10px);
            padding: 20px;
            background: rgba(0, 0, 0, 0.10);
        }
        .position {
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            margin-top: 20px;
            text-align: center;
        }
        label {
            color: white;
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
                <div class="mb-3">
                    <label for="nama1" class="form-label">Nama 1:</label>
                    <input class="form-control" type="text" name="nama1" id="nama1" placeholder="Masukan Nama Satu" aria-label="Nama Satu">
                </div>
                <div class="mb-3">
                    <label for="nama2" class="form-label">Nama 2:</label>
                    <input class="form-control" type="text" name="nama2" id="nama2" placeholder="Masukkan Nama Dua" aria-label="Nama Dua">
                </div>
                <button type="submit" name="hitung" value="bandingkan" class="btn btn-primary">Bandingkan</button>
            </form>
            <div class="position">
            <?php
            if (isset($_POST['hitung'])) {
                $nama1 = isset($_POST['nama1']) ? $_POST['nama1'] : '';
                $nama2 = isset($_POST['nama2']) ? $_POST['nama2'] : '';

                $jumlahNamaA = strlen($nama1);
                $jumlahNamaB = strlen($nama2);
                
                
                $totalNamaA = $jumlahNamaA - $jumlahNamaB;
                $totalNamaB = $jumlahNamaB - $jumlahNamaA;

                echo "Nama pertama: " . htmlspecialchars($nama1) . "<br>";
                echo "Nama kedua: " . htmlspecialchars($nama2) . "<br>";
                
                if ($jumlahNamaA > $jumlahNamaB) {
                    echo htmlspecialchars($nama1) . " lebih panjang dari " . htmlspecialchars($nama2) . " dengan " . $totalNamaA . " huruf.";
                } elseif ($jumlahNamaB > $jumlahNamaA) {
                    echo htmlspecialchars($nama2) . " lebih panjang dari " . htmlspecialchars($nama1) . " dengan " . $totalNamaB . " huruf.";
                } else {
                    echo "Namanya sama panjang";
                }
            }

            ?>
            </div>
        </div>
    </div>
</body>
</html>