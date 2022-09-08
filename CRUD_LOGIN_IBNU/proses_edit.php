<?php

$nama = $_POST['nama'];
$role = $_POST['role'];
$id = $_POST['id'];

$db = new PDO("mysql:host=localhost;dbname=puskesmas", 'root', '');
$query = $db->query("UPDATE `pengguna` SET nama='$nama', role='$role' where id='$id'");

if($query){
    header("location:index.php");
}