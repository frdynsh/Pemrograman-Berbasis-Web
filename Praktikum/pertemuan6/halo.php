<?php
    echo "Halo, selamat datang di dunia PHP!<p>";


    // VARIABEL
    $nama = "budi";
    $umur = 25;

    echo "Nama: " . $nama . "<br>";
    echo "Umur: " . $umur . " tahun<p>" ;

    // KONSTANTA
    define("SITE_NAME","unsika.ac.id");
    define("VERSION","1.0");

    echo "Selamat datang di " . SITE_NAME . "<br>";
    echo "Versi Sistem: " . VERSION . "<p>";


    // TIPE DATA
        // string
        $Nama = "Ahmad";
        echo "Nama saya adalah ". $Nama. "<br>";

        // integer
        $Umur = 39;
        echo "Umur saya ". $Umur. " tahun<br>";

        // float
        $berat = 58.5;
        echo "Berat badan saya ". $berat. "kg<br>";

        // boolean
        $isLogin = true;

        // array
        $buah = ["apel", "mangga", "pisang"];
        echo $buah[2];

        // object
        class Mahasiswa {
            public $NAMA;
            public function sapa(){
                return "<br>Halo, saya $this->NAMA <br>";
            }
        }
        $mhs = new Mahasiswa();
        $mhs->NAMA = "Jaenal";
        echo $mhs->sapa();

        // Null
        $data = null;
        var_dump($data);

    // Operator aritmatika
        // penjumlahan
        $angka = [2, 4, 6];
        echo "<p>4 + 6 = ". $angka[1] + $angka[2];

        // pengurangan
        echo "<br>6 - 2 = ". $angka[2] - $angka[0];

        // perkalian
        echo "<br>2 * 2 = ". $angka[0] * $angka[0];

        // pembagian
        echo "<br>4 / 2 = ". $angka[1] / $angka[0];

        // modulus
        echo "<br>6 % 2 = ". $angka[2] % $angka[0];
?>