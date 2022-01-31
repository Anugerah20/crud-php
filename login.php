<?php
require 'functions.php';
session_start();

// Kondisi jika sudah login tidak pindah ke halaman login
if (isset($_SESSION["login"])) {
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
      if (password_verify($password, $row["password"])) {

         // mengatur session
         $_SESSION["login"] = true;

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
   <style>
      * {
         font-family: 'Open Sans', sans-serif;
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         background: #fff;
      }

      label {
         display: block;
      }

      .title-login {
         margin-top: 4.5rem;
         text-align: center;
         letter-spacing: 1px;
      }

      .border-login {
         width: 500px;
         height: 520px;
         border: 1px solid rgb(216, 216, 216);
         border-radius: 5px;
         position: relative;
         margin: 6rem auto;
      }

      .form-center {
         margin-top: 2.2rem;
         letter-spacing: 1px;
      }

      input {
         width: 300px;
         height: 35px;
         margin: 10px 0;
         box-sizing: border-box;
         border-radius: 5px;
         outline: none;
         border: 1px solid rgb(216, 216, 216);
      }

      .btn-login>button {
         padding: 8px 127px;
         outline: none;
         cursor: pointer;
         border: 0;
         background: rgb(13, 110, 253);
         color: #fff;
         font-size: 16px;
         letter-spacing: 1px;
         border-radius: 5px;
      }

      .form-space {
         position: absolute;
         width: 300px;
         margin: 2rem 6rem;
      }

      .sign-up {
         margin-top: 2rem;
         text-align: center;
      }

      .sign-up>p {
         font-size: 16px;
         font-family: 'Open Sans', sans-serif;
         font-weight: 400;
      }

      .menu-error>p {
         margin: 1.2rem auto;
         padding: 5px 0 5px 0;
         background: red;
         font-weight: bold;
         color: white;
         text-align: center;
      }
   </style>
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
               <label for="remember">ingat saya</label>

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