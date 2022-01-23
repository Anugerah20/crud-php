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
   * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-transform: capitalize;
      outline: none;
      font-family: 'Open Sans', sans-serif;
   }

   .container-tambah {
      height: 100vh;
   }

   .judul-tambah {
      text-align: center;
      margin-top: 3rem;
   }

   .form-tambah {
      margin-top: 3rem;
   }

   label {
      display: block;
      margin-top: 1rem;
   }

   input {
      margin-top: 6px;
      width: 290px;
      padding: 8px 15px;
   }

   input[type="file"] {
      font-size: 16px;
   }

   .btn-tambah {
      margin-top: 1rem;
      padding: 10px 110px;
      outline: none;
      border: 0;
      background: rgb(13, 110, 253);
      color: #fff;
      border-radius: 4px;
      cursor: pointer;
   }
</style>

<body>
   <div class="container-tambah">
   
   <div class="judul-tambah">
      <h1>tambah data buku</h1>
   </div>

   <div class="form-tambah">
      <form action="" method="post" enctype="multipart/form-data">
         <center>
            <ul>
               <li>
                  <label for="judul"><span style="margin-left: -245px;">judul<span></label>
                  <input type="text" name="judul" id="judul" required oninvalid="this.setCustomValidity('Judul wajib di isi!')" oninput="setCustomValidity()">
               </li>
               <li>
                  <label for="terbit"><span style="margin-left: -195px;">tahun terbit</span></label>
                  <input type="number" name="terbit" id="terbit">
               </li>
               <li>
                  <label for="halaman"><span style="margin-left: -160px;">jumlah halaman</span></label>
                  <input type="number" name="halaman" id="halaman">
               </li>
               <li>
                  <label for="penulis"><span style="margin-left: -233px;">penulis</span></label>
                  <input type="text" name="penulis" id="penulis" required oninvalid="this.setCustomValidity('Penulis wajib di isi')" oninput="setCustomValidity()">
               </li>
               <li>
                  <label for="harga"><span style="margin-left: -200px;">harga buku</span></label>
                  <input type="number" name="harga" id="harga">
               </li>
               <li>
                  <label for="gambar"><span style="margin-left: -230px;">gambar</span></label>
                  <input style="margin-left: -30px;" type="file" name="gambar" id="gambar">
               </li>
               <li>
                  <button class="btn-tambah" type="submit" name="submit">tambah data</button>
               </li>
            </ul>
         </center>
      </form>
   </div>
   </div>

</body>

</html>