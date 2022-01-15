<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrasi</title>
   <style>
      * {
         font-family: 'arial', sans-serif;
      }
      label {
         display: block;
      }

      .title-register {
         margin-top: 8.5rem;
      }
   </style>
</head>
<body>
   <div class="title-register">
      <h1>Silahkan Registrasi</h1>
   </div>

   <form action="" method="POST">
      <div class="label-input">
         <label for="username">Username :</label>
         <input type="text" name="username" id="username">

         <label for="password">Password :</label>
         <input type="password" name="password" id="password">

         <label for="password2">Konfirmasi :</label>
         <input type="password2" name="password2" id="password2">
      </div>
      <div class="btn-register">
         <button type="submit" name="registrasi">Registrasi!</button>
      </div>
   </form>
   
</body>
</html>