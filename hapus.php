<?php
require 'functions.php';
session_start();

// Kondisi jika belum melakukan login
if (!isset($_SESSION["login"])) {
   header("Location: login.php");
}

$id = $_GET["id"];

if (hapus($id) > 0) {
   echo "
   <script>
      alert('Data berhasil dihapus');
      document.location.href = 'admin_buku.php';
   </script>";
} else {
   echo "
   <script>
      alert('Data berhasil dihapus');
      document.location.href = 'admin_buku.php';
   </script>";
}
