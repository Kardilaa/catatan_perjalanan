<?php

$db = mysqli_connect("localhost","root","","catatan_perjalanan");

$result = mysqli_query($db, "SELECT * FROM catatan_perjalanan");
// var_dump($result);

if(isset($_GET['caper'])){
  $urut = $_GET['caper'];
  $result =mysqli_query($db,"SELECT * FROM catatan_perjalanan ORDER BY $urut ASC");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Catatan Perjalanan</title>
</head>
<body style="background:#44B5FF">
<div class="container mt-5">
    <h1>P E D U L I  D I R I</h1>
    <h2>catatan perjalanan</h2>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="catatan.php.php">Catatan Perjalanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="data.php">Isi Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php" onclick="return confirm('anda yakin ingin keluar')">logout</a>
      </li>
    </ul>
  </div>
</div>
<div class="container mt-3" style= "width:500x;margin-left;0px">
<div class="card">
      <div class="row fw-bold card-body">
        <form>
          <div class="row">
                <div class="col-auto">
                <span class="text-black">Urutkan Berdasarkan</span>
             </div>
             <form>
             <div class="col-auto">
                  <select name="caper" class="form-control" style="width:100px" id="">
                    <option value="tanggal">Tanggal</option>
                    <option value="waktu">Waktu</option>
                    <option value="lokasi">lokasi</option>
                    <option value="suhu_tubuh">Suhu Tubuh</option>
                  </select>
                  <button class="mt-2 btn btn-primary">Urutkan</button>
                </div>
              </div>
          </from>
        </div>
      </div>
</div>
<div class="card my-4 mt-3">
  <div class="d-grip gap-2 col-12 mt-2">
  <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Waktu</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Suhu Tubuh</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['tanggal'];?></td>
      <td><?=$row['waktu'];?></td>
      <td><?=$row['lokasi'];?></td>
      <td><?=$row['suhu_tubuh'];?></td>
      <td>
      <a href="formUpdate.php?id=<?=$row['id'];?>" class="btn btn-primary">UPDATE</a>
        <a href="delete.php?id=<?=$row['id'];?>"onclick="return confirm('anda yakin ingin hapus')" class="btn btn-danger btn-sm">DELETE</a>
    </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
  </div>
    <div class="text-end">
    <a href="isi_data.php">
      <button class="btn btn-primary">Isi Catatan Perjalanan</button>
    </a>
</div>
    </div>
</body>
</html>