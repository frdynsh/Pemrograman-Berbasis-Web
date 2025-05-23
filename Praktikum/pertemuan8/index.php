<html>
<body>
        <!-- <h1>Form Pendaftaran</h1>
        <form method="post">
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama"><br>
            <input type="submit" value="Daftar">
        </form> -->
        
        <h2><p>Form Pendaftaran</h2>
        <form method="POST">
            <input type="text" name="nama" placeholder="Masukkan nama"><br>
            <input type="submit" value="Daftar">
        </form>
<?php
    // Pengenalan form
        // <form action="proses.php" method="post">
        //     //kode proses php
        // </form>


    // Menangani data dengan method POST dan GET.
        // $_POST
        //     $var_nama = $_POST['nama'];
        //     $var_email = $_POST['email'];

        // // $_GET
        //     $var_nama = $_GET['nama'];

    // Percabangan dalam php
        // $nilai = 75;
        // if ($nilai >= 80) {
        //     echo "Nilai A";
        // } elseif ($nilai >= 70) {
        //     echo "Nilai B";
        // } else {
        //     echo "Nilai C";
        // }
    
        // // implementasi if dua kondis
        // $umur = 20;
        // $ktp = true;
        //     if ($umur >= 17 && $ktp) {
        //         echo "<p>Boleh memilih";
        //     }

        // implementasi if untuk validasi inputan pengguna
            // if (!empty($_POST['nama'])) {
            //     echo "Nama: " . htmlspecialchars($_POST['nama']);
            // } else {
            //     echo "Nama tidak boleh kosong!";
            // }


            if (!empty($_POST['nama'])) {
                echo "Nama: " . htmlspecialchars($_POST['nama']);
            } else {
                echo "Nama tidak boleh kosong!";
            }
?>
</body>
</html>