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
         text-align: center;
      }

      .form-center  {
         margin-top: 3.5rem;
      }
   </style>
</head>

<body>
   <div class="title-register">
      <h1>Silahkan Registrasi</h1>
   </div>

   <form action="" method="POST">
      <center>
         <div class="form-center">
         <label for="username" style="margin-right: 93px;">Username</label>
         <input type="text" name="username" id="username">

         <label for="password" style="margin-right: 93px;">Password</label>
         <input type="password" name="password" id="password">

         <label for="password2" for="password" style="margin-right: 93px;">Konfirmasi</label>
         <input type="password2" name="password2" id="password2">
      </center>
      <div class="btn-register">
         <center>
            <button type="submit" name="registrasi">Registrasi!</button>
            </div>
         </center>
      </div>
   </form>

</body>

</html>