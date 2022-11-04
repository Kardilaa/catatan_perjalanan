<?php 
$koneksi = new PDO("mysql:host=localhost;dbname=catatan_perjalanan", "root","");
$nik = $_POST["nik"];
$nama = $_POST['nama_lengkap'];
$query = $koneksi->query("SELECT * FROM login WHERE nik='$nik'");
    if($query->rowCount() > 0){
        session_start();

        $_SESSION["nama"] = $nama;
        $_SESSION["nik"] = $nik;
        header("location:user.php");
    }else{
        header("location:login.php");
    }