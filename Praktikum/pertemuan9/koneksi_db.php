<?php

     // Menggunakan fungsi mysqli_connect()

        // Membuat koneksi ke database MySQL dengan parameter: host, username, password, dan nama database
        $conn = new mysqli('localhost', 'root', 'Unsika2020', 'pemrograman_web_contoh');


        // Mengecek apakah terjadi kesalahan saat mencoba melakukan koneksi
        if ($conn->connect_error) {
            // Jika koneksi gagal, hentikan program dan tampilkan pesan error
            die("Connection failed: " . $conn->connect_error);
        }
?>