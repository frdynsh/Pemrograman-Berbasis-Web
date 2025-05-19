<html>
<head>
    <title>Daftar Nama Hewan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="wrapper">
    <div class="soal">
        <h2>Daftar Nama Hewan </h2>

        <div class="result-2">
            <?php
                $hewan = [
                    "1." => "Kucing",
                    "2." => "Ayam",
                    "3." => "Burung",
                    "4." => "Singa",
                    "5." => "Gajah"
                ];
                foreach ($hewan as $nomor => $nama){
                    echo "$nomor $nama <br>";
                }
            ?>
        </div>
    </div>
</div>

</body>
</html>