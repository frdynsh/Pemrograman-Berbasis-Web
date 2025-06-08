<?php
    // Menghubungkan ke database
    include_once __DIR__ . '/../config/koneksi_db.php';

    // Cek apakah request menggunakan metode POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ambil data dari form
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];

        // Siapkan dan eksekusi query update
        $stmt = $conn->prepare("UPDATE Pelanggan SET Nama=?, Alamat=?, Email=?, Telepon=? WHERE ID=?");
        $stmt->bind_param("ssssi", $nama, $alamat, $email, $telepon, $id);


        if ($stmt->execute()) {
            echo "<script>alert('Data berhasil diperbarui'); window.location='../views/daftar_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui data'); window.location='../views/daftar_pelanggan.php';</script>";
        }
    }
?>