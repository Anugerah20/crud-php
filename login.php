<?php
session_start();
require 'functions.php';

// Kondisi cookie jika mau login
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
   $id  = $_COOKIE['id'];
   $key = $_COOKIE['key'];

   // Mengambil username sesuai dengan id
   $result = mysqli_query($db, "SELECT username FROM register WHERE id = $id");

   $row = mysqli_fetch_assoc($result);

   // Meriksa cookie dan username
   if($key === hash('sha224', $row['username'])) {
      $_SESSION['login'] = true;
   } 
}

// Kondisi jika sudah login tidak pindah ke halaman login
if (isset($_SESSION['login'])) {
   header("Location: admin-buku.php");
   exit;
}

if (isset($_POST['login'])) {

   $username = $_POST['username'];
   $password = $_POST['password'];

   $result = mysqli_query($db, "SELECT * FROM register WHERE username = '$username'");

   // Memerikasa username
   if (mysqli_num_rows($result) === 1) {

      // Memerikasa password
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row['password'])) {

         // mengatur session
         $_SESSION["login"] = true;

         // Kondisi Remember me
         if (isset($_POST['remember'])) {
            // Membuat Cookie
            setcookie('id', $row['id'], time() + 60);
            setcookie('key',hash('sha224',$row['username']), time() + 60);
         }

         header("Location: admin-buku.php");
         exit;
      }
   }

   $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Login</title>
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- Style CSS -->
<link rel="stylesheet" href="src/css/login.css">
</head>

<body>

   <form action="" method="POST">
      <div class="border-login">
         <div class="title-login">
            <h1>Silahkan Login</h1>

            <?php if (isset($error)) : ?>
               <div class="menu-error">
                  <p>
                     Username / Password Anda Salah
                  </p>
               </div>
            <?php endif; ?>

         </div>
         <div class="form-center">
            <div class="form-space">
               <label for="username" style="margin-right: 219px;">Username</label>
               <input type="text" name="username" id="username" required>

               <label for="password" style="margin-right: 220px;">Password</label>
               <input type="password" name="password" id="password" required>

               <input type="checkbox" name="remember" id="remember">
               <div id="box-check">
                  <label for="remember">Remember me</label>
               </div>

               <div class="btn-login">
                  <button type="submit" name="login">Login</button>
               </div>

               <div class="sign-up">
                  <p>Tidak mempunyai akun? <a href="registrasi.php">Register</a></p>
               </div>
            </div>
         </div>
      </div>
   </form>

</body>

</html>