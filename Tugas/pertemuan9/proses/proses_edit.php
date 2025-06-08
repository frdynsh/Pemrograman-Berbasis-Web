<?php
    // Menghubungkan ke database
    include_once __DIR__ . '/../config/koneksi_db.php';

    // Cek apakah request menggunakan metode POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ambil data dari form
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun = $_POST['tahun_terbit'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        // Siapkan dan eksekusi query update
        $stmt = $conn->prepare("UPDATE Buku SET Judul=?, Penulis=?, Tahun_Terbit=?, Harga=?, stok=? WHERE ID=?");
        $stmt->bind_param("ssiiii", $judul, $penulis, $tahun, $harga, $stok, $id);


        if ($stmt->execute()) {
            echo "<script>alert('Data berhasil diperbarui'); window.location='../views/index.php';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui data'); window.location='../views/index.php';</script>";
        }
    }
?>