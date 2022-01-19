<?php 
require 'functions.php';

if(isset($_POST["register"])) {

   if(registrasi($_POST) > 0) {
      echo "<script>
               alert('username berhasil ditambahkan');
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

      .title-register {
         margin-top: 4.5rem;
         text-align: center;
         letter-spacing: 1px;
      }

      .border-register {
         width: 500px;
         height: 545px;
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

      .btn-register button {
         padding: 8px 110px;
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

      .login {
         margin-top: 2rem;
         text-align: center;
      }

      .login p {
         font-size: 16px;
         font-family: 'Open Sans', sans-serif;
         font-weight: 400;
      }
   </style>
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
               <input type="text" name="username" id="username">

               <label for="password" style="margin-right: 220px;">Password</label>
               <input type="password" name="password" id="password">

               <label for="password2" for="password" style="margin-right: 218px;">Konfirmasi</label>
               <input type="password" name="password2" id="password2">
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