<?php
session_start();
// Kondisi jika belum melakukan login
if(!isset($_SESSION["login"])) {
   header("Location: login.php");
   exit;
}

// Menghubungkan koneksi db di file koneksi.php
require 'functions.php';
$buku = query("SELECT * FROM buku");

// Membuat button search
if (isset($_POST["search"])) {
   $buku = search($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- Style CSS -->
<link rel="stylesheet" href="src/css/admin-buku.css"/>

<head>
   <title>Halaman Admin Buku</title>
</head>
<style>
   
</style>
</div>

<body>
   <div class="container-admin">

      <div class="judul-admin">
         <h1>daftar buku terlaris 2021</h1>
      </div>

      <div class="logout">
         <a href="logout.php">Log Out</a>
      </div>

      <div class="tambah-data">
         <a href="tambah.php" target="_blank">tambah data buku</a>
      </div>

      <div class="search-responsive">
         <form action="" method="post">
            <input class="searc" type="text" name="keyword" size="80" placeholder="kata kunci judul atau penulis..." autofocus autocomplete="off">
            <button id="btn-cari" type="submit" name="search"><i class="bi bi-search"></i></button>
         </form>
      </div>

      <div class="table-responsive">
         <table>
            <tr>
               <th>nomor</th>
               <th>judul</th>
               <th>tahun terbit</th>
               <th>jumlah halaman</th>
               <th>penulis</th>
               <th>harga buku</th>
               <th>gambar</th>
               <th>aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($buku as $row) : ?>
               <tr>
                  <td><?= $i; ?></td>

                  <td><?= $row["judul"]; ?></td>
                  <td><?= $row["terbit"]; ?></td>
                  <td><?= $row["halaman"]; ?></td>
                  <td><?= $row["penulis"]; ?></td>
                  <td><?= $row["harga"]; ?></td>
                  <td>
                     <img src="img/<?= $row["gambar"]; ?>" alt=" book1" width="50">
                  </td>
                  <td>
                     <button class="btn-ubah"> <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a></button>
                     <button class="btn-hapus"><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin mau menghapus data ini?')">hapus</a></button>
                  </td>
               </tr>
               <?php $i++; ?>
            <?php endforeach; ?>
         </table>
      </div class="table-responsive">
   </div>

</body>

</html>