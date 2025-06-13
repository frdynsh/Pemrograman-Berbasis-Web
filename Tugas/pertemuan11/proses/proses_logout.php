<?php
session_start();

// Cek login, dan jika valid:
$_SESSION['username'] = $username; // Simpan nama pengguna ke session
header("Location: ../views/login.php");
exit();

?>