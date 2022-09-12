<?php
    error_reporting(0);
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    if ($email == 'adangsp@smksamudranusantara.sch.id' AND $password == '1234') {
        $sukses = "<p style='color: rgb(0, 132, 255); text-align: center; margin-top: 35px; font-weight: 14%''>✅ Anda berhasil masuk ke akun anda.</p>";
    }else{
        $gagal = "<p style='color: red; text-align: center; margin-top: 35px'>Email atau sandi yang anda masukan salah.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bunga Cl</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        min-height: 100vh;
        background: #eee;
        display: flex;
        font-family: sans-serif;
      }
      .container {
        margin: auto;
        width: 500px;
        max-width: 90%;
      }
      .container form {
        width: 100%;
        height: 379px;
        padding: 20px;
        background: white;
        border-radius: 6px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
      }
      .container form h1 {
        text-align: center;
        margin-bottom: 24px;
        color: #222;
      }
      .container form .form-control {
        width: 100%;
        height: 40px;
        background: white;
        border-radius: 6px;
        border: 1px solid silver;
        margin: 10px 0 18px 0;
        padding: 0 10px;
      }
      .container form .btn {
        margin-left: 50%;
        transform: translate(-50%);
        width: 120px;
        height: 34px;
        border: none;
        outline: none;
        background: rgb(12, 226, 162);
        cursor: pointer;
        font-size: 16px;
        text-transform: uppercase;
        color: white;
        border-radius: 6px;
        transition: 0.3s;
      }
      .container form .btn:hover {
        opacity: 0.7;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="" method="post">
        <h1>Halaman Masuk</h1>
        <div class="form-group">
          <label for="">Email atau nomor telepon</label>
          <input type="text" class="form-control" name="email" required />
        </div>
        <div class="form-group">
          <label for="">Kata sandi</label>
          <input type="password" class="form-control" name="password" required />
        </div>
        <button class="btn" name="login">Masuk</button>
        <?php 
        echo $sukses;
        echo $gagal;
        ?>
      </form>
    </div>
  </body>
</html>
