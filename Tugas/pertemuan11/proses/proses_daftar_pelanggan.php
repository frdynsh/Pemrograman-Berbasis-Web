<?php
    include_once __DIR__ . '/../config/koneksi_db.php';

    // Inisialisasi variabel pencarian
    $search_nama = isset($_GET['nama']) ? $_GET['nama'] : '';
    $search_telepon = isset($_GET['telepon']) ? $_GET['telepon'] : '';

    // Query untuk menampilkan daftar pelanggan dengan filter pencarian
    $query = "SELECT * FROM pelanggan WHERE 1=1";

    if (!empty($search_nama)) {
        $query .= " AND nama LIKE '%" . $conn->real_escape_string($search_nama) . "%'";
    }

    if (!empty($search_telepon)) {
        $query .= " AND telepon LIKE '%" . $conn->real_escape_string($search_telepon) . "%'";
    }

    $result = $conn->query($query);
?>