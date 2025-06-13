<?php
    include_once __DIR__ . '/../config/koneksi_db.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];


    $stmt = $conn->prepare("INSERT INTO pelanggan (nama, alamat, email, telepon) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $alamat, $email, $telepon);


    if ($stmt->execute()) {
        echo "<script>
            alert('Buku berhasil ditambahkan!');
            window.location.href = '../views/tambah_pelanggan.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menambahkan buku: " . addslashes($stmt->error) . "');
            window.location.href = '../views/tambah_pelanggan.php';
        </script>";
    }
    }
?>