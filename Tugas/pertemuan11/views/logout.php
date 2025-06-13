<?php
session_start();
session_destroy(); // Menghapus semua session yang aktif

// Redirect kembali ke halaman login dengan pesan
header("Location: ../views/login.php?message=Anda berhasil logout.");
exit();
?>
