<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 8</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="header">
        <?php include 'header.php';?>
    </div>

    <div class="container">
        <div class="section-hero">
            <h2>Biodata Mahasiswa</h2>
            <div class="text-hero">
                <img src="img/foto.jpg" alt="">
                <p><b>Nama</b>: Ferdi Yansah</p>
                <p><b>NPM</b> : 2310631170084</p>
                <p><b>Kelas</b> : 4F - Informatika</p>
            </div>
        </div>

        <div class="section-daftar">
            <h2>Daftar Soal</h2>
            <div class="daftar-wrapper">
                <div class="box">
                    <?php include 'menu.php';?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <?php include 'footer.php';?>
    </div>
</body>
</html>