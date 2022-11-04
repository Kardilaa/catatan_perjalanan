<?php

$id=$_POST['id'];
$tgl = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi =$_POST['lokasi'];
$suhu =$_POST['suhu_tubuh'];

$db =new PDO("mysql:host=localhost;dbname=catatan_perjalanan", "root", "");
$query = $db->query("UPDATE catatan_perjalanan SET `tanggal`='$tgl',`waktu`='$waktu',`lokasi`
='$lokasi',`suhu_tubuh`='$suhu' WHERE `id`='$id'");

if ($query){
   header("location:catatan.php");
}