<?php
session_start();
$tanggal = $_POST['tanggal'];
$waktu = $_POST['jam'];
$lokasi =$_POST['lokasi'];
$suhu =$_POST['suhu_tubuh'];

$db =new PDO("mysql:host=localhost; dbname=catatan_perjalanan", "root", "");
$query = $db->query("INSERT INTO catatan_perjalanan values('','$tanggal','$waktu','$lokasi','$suhu')");

if($query){
    header("Location:catatan.php");
}