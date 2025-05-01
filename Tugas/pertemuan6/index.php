<?php
    define("PAJAK", 0.1);
    $namaBarang = ["Mouse", "Keyboard", "Laptop"];
    $hargaBarang = [95000, 150000, 4500000];

    //  beli keyboard
    $indexbarang = 1;
    $jmlhBeli = 2;

    // rumus
    $totalSblmPajak = $jmlhBeli * $hargaBarang[$indexbarang];
    $pajak = $totalSblmPajak * PAJAK;
    $total = $totalSblmPajak + $pajak;
    
    // output
    echo "<h2>Perhitungan Total Pembelian (Dengan Array) </h2>";
    echo "<p>Nama Barang: ". $namaBarang[$indexbarang]. "<br>";
    echo "Harga Satuan: Rp". number_format($hargaBarang[$indexbarang], 0, ',', '.'). "<br>";
    echo "Jumlah Beli: ". $jmlhBeli. "<br>";
    echo "Total Harga (Sebelum Pajak): Rp". number_format($totalSblmPajak, 0, ',', '.'). "<br>";
    echo "Pajak (10%): Rp". number_format($pajak, 0, ',', '.'). "<br>";
    echo "<b>Total Bayar: Rp". number_format($total, 0, ',', '.'). "<br>";
?>