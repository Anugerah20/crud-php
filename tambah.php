<?php
require 'functions.php';
// Mengecek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

   // Mengecek apakah data berhasil ditambahkan atau tidak
   if (tambah($_POST) > 0) {
      echo "
         <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'admin-buku.php';
         </script>
      ";
   } else {
      echo "
      <script>
         alert('Data Gagal Ditambahkan!');
         document.location.href = 'admin-buku.php';
      </script>
   ";
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tambah data buku</title>
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<style>
   .judul-tambah {
      text-align: center;
      font-family: 'arial', sans-serif;
      margin-top: 3rem;
   }

   .form-tambah {
      margin-top: 3rem;
   }

   label {
      display: block;
      margin-top: 1rem;
      font-family: 'arial', sans-serif;
   }

   input {
      width: 290px;
      padding: 10px 15px;
   }

   input[type="file"] {
      font-size: 16px;
   }

   

   .btn-tambah {
      margin-top: 1rem;
      margin-left: -190px;
      padding: 10px 15px;
      outline: none;
      border: 0;
      background: rgb(13, 110, 253);
      color: #fff;
      border-radius: 4px;
   }
</style>

<body>
   <div class="judul-tambah">
      <h1>Tambah Data Buku</h1>
   </div>

   <div class="form-tambah">
      <form action="" method="post" enctype="multipart/form-data">
         <center>
            <ul>
               <li>
                  <label for="judul"><span style="margin-left: -248px;">Judul<span></label>
                  <input type="text" name="judul" id="judul" required oninvalid="this.setCustomValidity('Judul wajib di isi!')" oninput="setCustomValidity()">
               </li>
               <li>
                  <label for="terbit"><span style="margin-left: -205px;">Tahun Terbit</span></label>
                  <input type="number" name="terbit" id="terbit">
               </li>
               <li>
                  <label for="halaman"><span style="margin-left: -170px;">Jumlah Halaman</span></label>
                  <input type="number" name="halaman" id="halaman">
               </li>
               <li>
                  <label for="penulis"><span style="margin-left: -235px;">Penulis</span></label>
                  <input type="text" name="penulis" id="penulis" required oninvalid="this.setCustomValidity('Penulis wajib di isi')" oninput="setCustomValidity()">
               </li>
               <li>
                  <label for="harga"><span style="margin-left: -205px;">Harga Buku</span></label>
                  <input type="number" name="harga" id="harga">
               </li>
               <li>
                  <label for="gambar"><span style="margin-left: -235px;">Gambar</span></label>
                  <input style="margin-left: -30px;" type="file" name="gambar" id="gambar">
               </li>
               <li>
                  <button class="btn-tambah" type="submit" name="submit">Tambah Data</button>
               </li>
            </ul>
         </center>

      </form>
   </div>

</body>

</html>