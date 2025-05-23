<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="soal">
            <h2>Diskon Pembayaran Mahasiswa</h2>
            <form method="post">
                <input type="text" name="npm" placeholder="NPM" required>
                <input type="text" name="nama" placeholder="Nama" required>
                <input type="text" name="prodi" placeholder="Prodi" required>
                <input type="number" name="semester" placeholder="Semester" required>
                <input type="number" name="biaya" placeholder="Biaya UKT" required>
                <input type="submit" name="hitung" value="Hitung Diskon">
            </form>
       
            <div class="result">
                <?php
                    if (!empty($_POST['npm']) && !empty($_POST['nama']) && !empty($_POST['prodi']) && !empty($_POST['semester']) && !empty($_POST['biaya'])) {
                        $npm = $_POST['npm'];
                        $nama = $_POST['nama'];
                        $prodi = $_POST['prodi'];
                        $semester = (int)$_POST['semester'];
                        $biaya = (int)$_POST['biaya'];

                        // Hitung diskon
                        $diskon = 0;
                        if ($biaya >= 5000000) {
                            $diskon = 0.10;
                            if ($semester > 8) {
                                $diskon = 0.15;
                            }
                        }

                        $potongan = $biaya * $diskon;
                        $totalBayar = $biaya - $potongan;

                        echo "NPM: $npm<br>";
                        echo "Mahasiswa: $nama<br>";
                        echo "Prodi: $prodi<br>";
                        echo "Semester: $semester<br>";
                        echo "Biaya UKT: Rp " . number_format($biaya, 0, ',', '.') . "<br>";
                        echo "Diskon: " . ($diskon * 100) . "%<br>";
                        echo "Potongan: Rp " . number_format($potongan, 0, ',', '.') . "<br>";
                        echo "Total yang harus dibayar: <b>Rp " . number_format($totalBayar, 0, ',', '.') . "</b>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>