<Html lang="en">
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
</html>

<!DOCTYPE html>
<head>
    <title>Peduli Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"> 
</head>
<body style="background:grey">
    <div style="padding: 50px;">
    <form action="proses_register.php"  method="POST">
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">BUAT AKUN</h2>
              <div class="mb-3 mt-3 text-center">
                Nik : <br>
                <input class="rounded-3 border-light" type="text" name="nik" placeholder="masukan Nik anda" 
                style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                nama_lengkap : <br>
                <input class="rounded-3 border-light" type="text" name="nama_lengkap" placeholder="masukan Nama anda" 
                style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                Tempat tgl Lahir : <br>
                <input class="rounded-3 border-light" type="date" name="tempat_tgl_lahir" placeholder="masukan tempat tgl lahir anda" 
                style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                No Hanphone : <br>
                <input class="rounded-3 border-light" type="text" name="no_hp" placeholder="masukan No telepon anda" 
                style="width: 300px;">
                <div class="mb-3 mt-3 text-center">
                ID : <br>
                <input class="rounded-3 border-light" type="text" name="id " placeholder="masukan ID anda" 
                style="width: 300px;">
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">Simpan</button> <br>
                
                </div>
              </div>
              </div>
            </form>
</body>
</html>
<?php
session_start();
if(isset($_SESSION["Nama"])){
    header("location:login.php");
}
?>

