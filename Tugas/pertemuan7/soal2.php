<html>
<head>
    <title>Cetak Bilangan Genap dari 2 sampai 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="wrapper">
    <div class="soal">
        <h2>Cetak Bilangan Genap dari 2 sampai 10</h2>

        <div class="result-2">
            <?php
                for ($i = 2; $i <= 10; $i+=2){
                    echo "Angka ".$i."<br>";
                }
            ?>
        </div>
    </div>
</div>

</body>
</html>