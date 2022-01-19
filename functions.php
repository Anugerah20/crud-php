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
   $gambar = upload();
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

function upload() {
   $namaFile   = $_FILES['gambar']['name'];
   $ukuranFile = $_FILES['gambar']['size'];
   $error      = $_FILES['gambar']['error'];
   $tmpName    = $_FILES['gambar']['tmp_name'];

   // Mengecek gambar diupload atau tidak
   if($error === 4) {
      echo "<script>
               alert('Gambar Wajib Di Upload !');
            </script>";
            return false;
   }  

   // Mengecek apakah yang di upload itu adalah gambar
   $ekstensiGambarValid    = ['jpg','jpeg','png','svg'];
   $ekstensiGambar         = explode('.', $namaFile);
   $ekstensiGambar         = strtolower(end($ekstensiGambar));

   if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
      echo "<script>
               alert('Maaf Yang Anda Upload Bukan Gambar !');
            </script>";
            return false;
   }

   // Mengecek ukuran gambar yang diupload 
   if($ukuranFile > 5000000) {
      echo "<script>
               echo('Gambar Gagal Di Unggah, Ukuran Gambar Minial 5 MB');
            </script>";
   }

   // Generate untuk gambar baru
   $namaFileBaru = uniqid();
   $namaFileBaru = '.';
   $namaFileBaru = $ekstensiGambar;

   // Jika gambar sesuai dengan yang di atas maka akan di upload
   move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

   return $namaFileBaru;
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

   $id         = $data["id"];
   $judul      = htmlspecialchars($data["judul"]);
   $terbit     = htmlspecialchars($data["terbit"]);
   $halaman    = htmlspecialchars($data["halaman"]);
   $penulis    = htmlspecialchars($data["penulis"]);
   $harga      = htmlspecialchars($data["harga"]);
   $gambarLama = htmlspecialchars($data["gambarLama"]);

   // Memerikasa apakah user mengganti gambar atau tidak
   if($_FILES['gambar']['error'] === 4) {
      $gambar   = $gambarLama;
   } else {
      $gambar   = upload();
   }

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

// Membuat Function Registrasi
function registrasi($data) {
   global $db;

   $username   = strtolower(stripslashes($data["username"]));
   $password   = mysqli_real_escape_string($db, $data["password"]);
   $password2  = mysqli_real_escape_string($db, $data["password2"]);

   // Cek Konfirmasi Password
   if($password !== $password2) {
      echo "<script>
               alert('password atau konfirmasi anda salah !');
            </script>";
            return false;
   }

   return 1;
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