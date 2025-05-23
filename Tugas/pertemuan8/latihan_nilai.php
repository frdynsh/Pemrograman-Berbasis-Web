<html>
    <head>
        <title>Menentukan Predikat Nilai</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="wrapper">
        <div class="soal">
            <h2>Menentukan Predikat Nilai</h2>
            <form method="post" action="">
                Nama: <input type="text" name="nama" required><br>
                Nilai: <input type="number" name="nilai" required><br>
                <input type="submit" value="Proses">
            </form>
       
            <div class="result">
                <?php
                    if (!empty($_POST["nama"]) && !empty($_POST["nilai"])) {
                        $nama = htmlspecialchars($_POST['nama']);
                        $nilai = (int)$_POST["nilai"];
                        $predikat = "";
                        $status = "";

                        if ($nilai >= 85 && $nilai <= 100) {
                            $predikat = "A";
                            $status = "Lulus";
                        } elseif ($nilai >= 75 && $nilai <= 84) {
                            $predikat = "B";
                            $status = "Lulus";
                        } elseif ($nilai >= 60 && $nilai <= 74) {
                            $predikat = "C";
                            $status = "Lulus";
                        } elseif ($nilai >= 40 && $nilai <= 59) {
                            $predikat = "D";
                            $status = "Tidak Lulus";
                        } elseif ($nilai >= 0 && $nilai <= 39) {
                            $predikat = "E";
                            $status = "Tidak Lulus";
                        } else {
                            $predikat = "Tidak valid";
                            $status = "Status Tidak Valid";
                        }
                        echo "<br>Nama: $nama";
                        echo "<br>Nilai: $nilai";
                        echo "<br>Predikat: $predikat";
                        echo "<br>Status: $status";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>