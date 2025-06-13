<?php
// Session Pada PHP

    // Contoh Implementasi 
        // Menyimpan atau mengambil data session
        session_start();
        $_SESSION['username'] = 'andi';
        $_SESSION['is_logged_in'] = true;

        // Mengakses data
        session_start();
        echo $_SESSION['username'];

        // Menghapus data
        session_unset();
        session_destroy();
?>