<?php
session_start();
$nama = $_POST['nama_lengkap'];
$ttgl = $_POST['tempat_tgl_lahir'];
$nik =$_POST['nik'];
$nohp =$_POST['no_hp'];

$db =new PDO("mysql:host=localhost; dbname=catatan_perjalanan", "root", "");
$query = $db->query("INSERT INTO login values('','$nama','$ttgl','$nik','$nohp')");

if($query){
    header("Location:login.php");
}