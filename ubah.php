<?php
require 'functions.php';
// Mengecek apakah tombol submit sudah ditekan atau belum

// Mengambil id di url
$id = $_GET["id"];

// Mengambil data mahasiswa berdasarkan id
$book = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST["submit"])) {

   // Mengecek apakah data berhasil di ubah atau tidak
   if (ubah($_POST) > 0) {
      echo "
         <script>
            alert('Data Berhasil Diubah');
            document.location.href = 'admin-buku.php';
         </script>
      ";
   } else {
      echo "
      <script>
         alert('Data Gagal Diubah!');
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
   <title>Ubah Data Buku</title>
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<style>
   * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Open Sans', sans-serif;
      text-transform: capitalize;
   }

   .container-ubah {
      height: 100vh;
   }

   .judul-ubah > h1 {
      text-align: center;
      margin-top: 3rem;
      letter-spacing: 2px;
      font-weight: bold;
   }

   .form-ubah {
      margin-top: 3rem;
   }

   label {
      display: block;
      margin-top: 1rem;
   }

   input {
      margin-top: 6px;
      width: 290px;
      padding: 5px 10px;
   }

   .btn-ubah {
      margin-top: 1rem;
      margin-left: -207px;
      padding: 8px 10px;
      outline: none;
      border: 0;
      background:rgb(13, 110, 253);
      color: #fff;
      border-radius: 4px;
   }
</style>

<body>
   <div class="container-ubah">

   <div class="judul-ubah">
      <h1>ubah data buku</h1>
   </div>

   <div class="form-ubah">
      <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $book["id"]; ?>">
         <center>
            <ul>
               <li>
                  <label for="judul">  <span style="margin-left: -248px;">judul<span></label>
                  <input type="text" name="judul" id="judul" required oninvalid="this.setCustomValidity('Judul harus di isi!')" oninput="setCustomValidity()" value="<?= $book["judul"]; ?>">
               </li>
               <li>
                  <label for="terbit"><span style="margin-left: -200px;">tahun terbit</span></label>
                  <input type="number" name="terbit" id="terbit" value="<?= $book["terbit"]; ?>">
               </li>
               <li>
                  <label for="halaman"><span style="margin-left: -170px;">jumlah halaman</span></label>
                  <input type="number" name="halaman" id="halaman" value="<?= $book["halaman"]; ?>">
               </li>
               <li>
                  <label for="penulis"><span style="margin-left: -235px;">penulis</span></label>
                  <input type="text" name="penulis" id="penulis" required oninvalid="this.setCustomValidity('Penulis harus di isi')" oninput="setCustomValidity()" value="<?= $book["penulis"]; ?>">
               </li>
               <li>
                  <label for="harga"><span style="margin-left: -205px;">harga buku</span></label>
                  <input type="number" name="harga" id="harga" value="<?= $book["harga"]; ?>">
               </li>
               <li>
                  <label for="gambar"><span style="margin-left: -235px;">gambar</span></label>
                  <div style="margin-right: 185px; margin-top: 10px;">
                     <img src="img/<?= $book["gambar"]; ?>" alt="" width="100px">
                  </div>
                  <input style="margin-left: -18px;" type="file" name="gambar" id="gambar">
               </li>
               <li>
                  <button class="btn-ubah" type="submit" name="submit">ubah data</button>
               </li>
            </ul>
         </center>

      </form>
   </div>
   </div>

</body>

</html>