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
</html>
<?php 
session_start();

if(empty($_SESSION['tanggal'])){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background:grey">
    <div style="padding: 50px;">
        <form action="insert_data.php"  method="POST">
       
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
            <h1 class="mb-3 mt-4 text-center" style="color:rgb(61, 62, 61);"> PERDULI DIRI</h1>
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">Isi Data</h2>
            
              <div class="mb-3 mt-3 text-center">
                tanggal : <br>
                <input class="rounded-3 border-light" type="date" name="tanggal" 
                style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                waktu : <br>
                <input class="rounded-3 border-light" type="time" name="jam" 
                style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                lokasi : <br>
                <input class="rounded-3 border-light" type="text" name="lokasi" 
                style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                suhu tubuh : <br>
                <input class="rounded-3 border-light" type="text" name="suhu_tubuh" 
                style="width: 300px;">
              </div>
              <div class="text-center mb-3 mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">Simpan</button> <br>
                
                </div>
              </div>
              
            </form>
        </div>
</body>
<?php          
}
else{
    header("locatoin:user.php");
}
