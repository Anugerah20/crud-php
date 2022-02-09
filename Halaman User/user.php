<?php
require '../functions.php';
// Menghubungkan koneksi db di file koneksi.php
$buku = query("SELECT * FROM buku");

// session_start();
// // Kondisi jika belum melakukan login
// if(!isset($_SESSION["login"])) {
//    header("Location: login.php");
//    exit;
// }


// Membuat button search
// if (isset($_POST["search"])) {
//    $buku = search($_POST["keyword"]);
// }

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
<link rel="stylesheet" href="user.css"/>

<head>
   <title>Halaman User Buku</title>
</head>
<style>
   
</style>
</div>

<body>
   <div class="container-admin">

      <div class="judul-admin">
         <h1>Halaman User Buku 2021</h1>
      </div>

      <!-- <div class="logout">
         <a href="logout.php">Log Out</a>
      </div> -->

      <div class="tambah-data">
         <a href="tambah.php" target="_blank">tambah data buku</a>
      </div>

         <!-- <form action="" method="post">
            <input class="searc" type="text" name="keyword" size="80" placeholder="kata kunci judul atau penulis..." autofocus autocomplete="off">
            <button id="btn-cari" type="submit" name="search"><i class="bi bi-search"></i></button>
         </form> -->

      <center>
         <table>
            <tr>
               <th>no</th>
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
                     <img src="../img/<?= $row["gambar"]; ?>" alt=" book1" width="50">
                  </td>
                  <td>
                     <button class="btn-ubah"> <a href="#">ubah</a></button>
                     <button class="btn-hapus"><a href="#">hapus</a></button>
                  </td>
               </tr>
               <?php $i++; ?>
            <?php endforeach; ?>
         </table>
         </center>
   <!-- </div> -->

</body>

</html>