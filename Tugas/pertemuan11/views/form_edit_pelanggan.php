<?php
    session_start();
    if (!isset($_SESSION['login_Un51k4'])) {
        header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
        exit;
    }
?>
<?php
include_once __DIR__ . '/../config/koneksi_db.php';
include_once __DIR__ . '/../header/nav.php';


$id = $_GET['id'] ?? 0;


// Ambil data pelanggan berdasarkan ID
$stmt = $conn->prepare("SELECT * FROM Pelanggan WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Edit pelanggan</title>
</head>
<body>
   <div class="container mt-4">
       <h2>Edit Data pelanggan</h2>
       <form method="post" action="../proses/proses_edit_pelanggan.php">
           <input type="hidden" name="id" value="<?= $row['ID'] ?>">


           <div class="mb-3">
               <label for="nama" class="form-label">Nama</label>
               <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($row['Nama']) ?>" required>
           </div>
           <div class="mb-3">
               <label for="alamat" class="form-label">Alamat</label>
               <input type="text" class="form-control" id="alamat" name="alamat" value="<?= htmlspecialchars($row['Alamat']) ?>" required>
           </div>
           <div class="mb-3">
               <label for="email" class="form-label">Email</label>
               <input type="email" class="form-control" id="email" name="email" value="<?= $row['Email'] ?>" required>
           </div>
           <div class="mb-3">
               <label for="telepon" class="form-label">Telepon</label>
               <input type="tel" class="form-control" id="telepon" name="telepon" value="<?= $row['Telepon'] ?>" required>
           </div>
           <button type="submit" class="btn btn-success">Simpan Perubahan</button>
       </form>
   </div>
</body>
</html>