<html>
<head>
    <title>Cek Jenis Kendaraan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">
    <div class="soal">
        <h2>Cek Jenis Kendaraan</h2>
        <form method="post">
            Masukkan jumlah roda:
            <input type="number" name="roda" required>
            <input type="submit" value="Cek Jenis Kendaraan">
        </form>

        <div class="result">
            <?php
                if (isset($_POST['roda'])) {
                    $kendaraan = $_POST['roda'];

                    switch ($kendaraan) {
                        case 2:
                            echo "Jenis Kendaraan: Motor";
                            break;
                        case 3:
                            echo "Jenis Kendaraan: Bajai";
                            break;
                        case 4:
                            echo "Jenis Kendaraan: Mobil";
                            break;
                        case 8:
                            echo "Jenis Kendaraan: Truk";
                            break;
                        default:
                            echo "Jenis Kendaraan tidak diketahui";
                    }
                }
            ?>
        </div>
    </div>
</div>

</body>
</html>
