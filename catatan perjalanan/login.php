<?php
session_start();
include('koneksi.php');

// if(isset($_SESSION["nama"])){
    // header("location:proses_login.php");
// }
?>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Peduli Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"> 
</head>
<body style="background:grey">
    <div style="padding: 50px;">
        <form action="proses_login.php"  method="POST">
        <div class="text-center fs-1"><h1 class="text-black fw-bold">P E D U L I D I R I</h1></div>
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">L O G I N</h2>
              <div class="mb-3 mt-3 text-center">
                NIK : <br>
                <input class="rounded-3 border-light" type="text" name="nik" placeholder="masukan NIK anda" 
                style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                Nama : <br>
                <input class="rounded-3 border-light" type="text" name="nama_lengkap" placeholder="masukan Nama anda" 
                style="width: 300px;">
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">Login</button> <br>
                <p><i>Belum Punya Akun? Click <a href="form_register.php" class="text-danger">buat akun</a></i></p>
                </div>
              </div>
              
            </form>
        </div>
</body>
</html>
</html>
