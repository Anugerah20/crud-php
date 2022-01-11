<?php
// Koneksi ke database
$db = mysqli_connect("localhost", "root", "", "daftarbuku");

if (!$db) {
   echo "<h2>Status saat ini : <b>Koneksi Gagal!</b></h2>";
}

// Mengambil data dari table Mahasiswa
function query($query)
{
   global $db;
   $result      = mysqli_query($db, $query);
   $rows        = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[]  = $row;
   }
   return $rows;
}

function tambah($data)
{
   global $db;

   $judul    = htmlspecialchars($data["judul"]);
   $terbit   = htmlspecialchars($data["terbit"]);
   $halaman  = htmlspecialchars($data["halaman"]);
   $penulis  = htmlspecialchars($data["penulis"]);
   $harga    = htmlspecialchars($data["harga"]);

   // Upload Gambar
   $gambar =upload();
   if(!$gambar) {
      return false;
   }

   $query = "INSERT INTO  buku VALUES
      ('', '$judul', '$terbit', '$halaman',
      '$penulis', '$harga', '$gambar')";

   mysqli_query($db, $query);

   // Mengecek data berhasil ditambahkan atau tidak berhasil
   return mysqli_affected_rows($db);
}

function hapus($id)
{
   global $db;
   mysqli_query($db, "DELETE FROM buku WHERE id = $id");

   return mysqli_affected_rows($db);
}

// Membuat function ubah data
function ubah($data)
{
   global $db;

   $id       = $data["id"];
   $judul    = htmlspecialchars($data["judul"]);
   $terbit   = htmlspecialchars($data["terbit"]);
   $halaman  = htmlspecialchars($data["halaman"]);
   $penulis  = htmlspecialchars($data["penulis"]);
   $harga    = htmlspecialchars($data["harga"]);
   $gambar   = htmlspecialchars($data["gambar"]);

   $query    = "UPDATE buku SET 
               judul    = '$judul',   terbit    = '$terbit',
               halaman  = '$halaman', penulis   = '$penulis',
               harga    = '$harga',   gambar    = '$gambar'
               WHERE id = $id";

   mysqli_query($db, $query);

   return mysqli_affected_rows($db);
}


// Membuat function cari data
function search($keyword) {
   $query = "SELECT * FROM buku 
   WHERE judul LIKE '%$keyword%' OR
         penulis LIKE '%$keyword%'"; 

   return query($query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
</head>
<style>
   h1 {
      font-family: 'Verdana', sans-serif;
      text-align: center;
      margin-top: 5rem;
      letter-spacing: 1px;
   }

   h1 b {
      color: rgb(25, 135, 84);
   }
</style>

<body>

</body>

</html>