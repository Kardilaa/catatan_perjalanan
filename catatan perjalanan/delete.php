<?php
session_start();
$id = $_GET["id"];

$koneksi = new PDO("mysql:host=localhost;dbname=catatan_perjalanan", "root","");
$query = $koneksi->query("DELETE FROM `catatan_perjalanan` WHERE id=$id");

if($query){
    header("Location:catatan.php");
}