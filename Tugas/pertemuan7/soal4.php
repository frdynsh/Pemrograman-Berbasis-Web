<html>
<head>
    <title>Cek Bilangan Genap</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="wrapper">
    <div class="soal">
        <h2>Cek Bilangan Genap</h2>
        <form method="post">
            Masukkan angka:
            <input type="number" name="angka">
            <input type="submit" value="Cek">
        </form>

        <div class="result">
            <?php
                if (isset($_POST['angka'])) {
                    $angka = $_POST['angka'];
                    $cekAngka = ($angka % 2 == 0) ? "Genap" : "Ganjil";
                    echo "Angka $angka adalah $cekAngka.";
                }
            ?>
        </div>
    </div>
</div>

</body>
</html>