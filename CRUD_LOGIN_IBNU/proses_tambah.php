<?php
$nama = $_POST['nama'];
$role = $_POST['role'];

$db = new PDO("mysql:host=localhost;dbname=puskesmas", 'root', '');
$query = $db->query("INSERT INTO pengguna VALUES('$id', '$nama', '$role')");

if($query){
    header("location:index.php");
}