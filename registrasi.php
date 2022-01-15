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
         margin: 0;
         padding: 0;
         box-sizing: border-box;
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

       input {
         padding: 8px 65px;
         text-align: left;
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
            <div class="form-space">
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
            </div>
         </center>
      </div>
   </form>

</body>

</html>