<?php
include_once __DIR__ . '/../config/koneksi_db.php';


// Query untuk menampilkan data pesanan beserta nama pelanggan dan total harga
$query = "
   SELECT 
       p.ID AS Pesanan_ID,
       pl.Nama AS Nama_Pelanggan,
       p.Tanggal_Pesanan,
       GROUP_CONCAT(b.judul SEPARATOR ', ') AS Judul_Buku,
       SUM(dp.Kuantitas) AS Kuantitas,
       p.Total_Harga
   FROM Pesanan p
   JOIN Pelanggan pl ON p.Pelanggan_ID = pl.ID
   JOIN detail_pesanan dp ON dp.Pesanan_ID = p.ID
   JOIN Buku b ON b.ID = dp.Buku_ID
   GROUP BY p.ID, pl.Nama, p.Tanggal_Pesanan, p.Total_Harga
";
$result = $conn->query($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Daftar Pesanan</title>
</head>
<body>
   <?php include_once __DIR__ . '/../header/nav.php'; ?>
   <div class="container mt-4">
       <h2>Daftar Pesanan</h2>


       <!-- Tabel Daftar Pesanan -->
       <table class="table table-striped">
           <thead>
               <tr>
                   <th>ID Pesanan</th>
                   <th>Nama Pelanggan</th>
                   <th>Tanggal Pesanan</th>
                   <th>Judul Buku</th>
                   <th>Total Buku</th>
                   <th>Total Harga</th>
               </tr>
           </thead>
           <tbody>
               <?php while ($row = $result->fetch_assoc()): ?>
               <tr>
                   <td><?= $row['Pesanan_ID'] ?></td>
                   <td><?= htmlspecialchars($row['Nama_Pelanggan']) ?></td>
                   <td><?= $row['Tanggal_Pesanan'] ?></td>
                   <td><?php echo htmlspecialchars($row['Judul_Buku']) ?></td>
                   <td><?= $row['Kuantitas'] ?></td>
                   <td>Rp<?= number_format($row['Total_Harga'], 2) ?></td>
               </tr>
               <?php endwhile; ?>
           </tbody>
       </table>
   </div>


   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>