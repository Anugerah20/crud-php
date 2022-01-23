<?php
// Halaman Admin Baru

// Menghubungkan koneksi db di file koneksi.php
require 'functions.php';
$buku = query("SELECT * FROM buku");

// Membuat button search
if(isset($_POST["search"])) {
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

<head>
   <title>Halaman Admin Buku</title>
</head>
<style>
   * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: 'Open Sans', sans-serif;
      text-transform: capitalize;
   }

   .container-admin {
      height: 140vh;
   }

   .judul-admin > h1 {
      text-align: center; 
      margin-top: 3rem;
      letter-spacing: 2px;
      word-spacing: 2px;
   }

   .tambah-data {
      margin-top: 5rem;
      text-align: center;
      margin-left: -49%;
   }

   .tambah-data > a {
      text-decoration: none;
      font-size: 18px;
      padding: 8px 10px;
      background: rgb(13, 110, 253);
      color: #fff;
      border-radius: 4px;
   }

   .searc {
      margin-top: 3rem;
      padding: 10px 10px;
      width: 40%;
      border-radius: 4px;
      margin-right: 10px;
     outline: none;
     border: 1px solid rgb(204, 204, 204);
   }

   #btn-cari {
      border: 0;
      outline: none;
      padding: 8px 12px;
      background: rgb(25, 135, 84);
      color:  #fff;
      font-size: 18px;
      border-radius: 4px;
      letter-spacing: 1px;
      cursor: pointer;
   }

   table {
      border-collapse: collapse;
      margin-top: 50px;
      text-align: center;
   }

   th,
   tr,
   td {
      padding: 15px;
      /* border: 1px solid #EAEAEA; */
      border: 1px solid rgb(204, 204, 204);
   }

   button > a {
      text-decoration: none;
   }

   .btn-ubah {
      padding: 5px 10px;
      background: yellow;
      border: 0;
      outline: none;
      border-radius: 4px;
   }

   .btn-ubah > a {
      color: #000;
   }

   .btn-hapus {
      padding: 5px 10px;
      background: rgb(220, 53, 69);
      border: none;
      outline: none;
      border-radius: 4px;
   }

   .btn-hapus > a {
      color: #fff;
   }
</style>
</div>

<body>
   <div class="container-admin">

   <div class="judul-admin">
      <h1>daftar buku terlaris 2021</h1>
   </div>

   <div class="tambah-data">
      <a href="tambah.php" target="_blank">tambah data buku</a>
   </div>

   <center>
      <form action="" method="post">
         <input class="searc" type="text" name="keyword" placeholder="kata kunci judul atau penulis..." autofocus autocomplete="off">
         <button id="btn-cari" type="submit" name="search"><i class="bi bi-search"></i></button>
      </form>
   </center>

   <center>
      <table border="0" cellpadding="0">
         <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Halaman</th>
            <th>Penulis</th>
            <th>Harga Buku</th>
            <th>Gambar</th>
            <th>Aksi</th>
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
                  <button class="btn-ubah"> <a href="ubah.php?id=<?= $row["id"]; ?>">Edit</a></button>
                  <button class="btn-hapus"><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin mau menghapus data ini?')">Hapus</a></button>
               </td>
            </tr>
            <?php $i++; ?>
         <?php endforeach; ?>
      </table>
   </center>
   </div>

</body>

</html>