<?php
require 'functions.php';

if (isset($_POST['register'])) {

   if (registrasi($_POST) > 0) {
      echo "<script>
               alert('username dan password anda berhasil ditambahkan');
            </script>";
   } else {
      mysqli_error($db);
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Registrasi</title>
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
   <!-- Style CSS -->
   <link rel="stylesheet" href="src/css/register.css" />
</head>

<body>

   <form action="" method="POST">
      <div class="border-register">
         <div class="title-register">
            <h1>Silahkan Registrasi</h1>
         </div>
         <div class="form-center">
            <div class="form-space">
               <label for="username" style="margin-right: 219px;">Username</label>
               <input type="text" name="username" id="username" required>

               <label for="password" style="margin-right: 220px;">Password</label>
               <input type="password" name="password" id="password" required>

               <label for="password2" for="password" style="margin-right: 218px;">Konfirmasi</label>
               <input type="password" name="password2" id="password2" required>
               <div class="btn-register">
                  <button type="submit" name="register">Register</button>
               </div>
               <div class="login">
                  <p>Sudah melakukan registrasi? <a href="login.php">Login</a></p>
               </div>
            </div>
         </div>
      </div>
   </form>

</body>

</html>