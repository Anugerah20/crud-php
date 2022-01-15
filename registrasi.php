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

       input[type=text],[type=password],[type=password2] {
         padding: 8px 65px;
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
         <label for="username" style="margin-right: 219px;">Username</label>
         <input type="text" name="username" id="username">

         <label for="password" style="margin-right: 220px;">Password</label>
         <input type="password" name="password" id="password">

         <label for="password2" for="password" style="margin-right: 218px;">Konfirmasi</label>
         <input type="password2" name="password2" id="password2">
      </center>
      <div class="btn-register">
         <center>
            <button type="submit" name="registrasi">Registrasi</button>
            </div>
            </div>
         </center>
      </div>
   </form>

</body>

</html>