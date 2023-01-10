<?php

$nis = $_POST['nis'];
$nama = $_POST['name'];
$kelas = $_POST['class'];


$database = new PDO('mysql:host=localhost;dbname=data_ibnu', 'root', '');
$query = $database->query("UPDATE `biodata` SET `name` = '$nama', `class` = '$kelas' WHERE `nis`= '$nis'");

if($query){
    header("Location:index.php");
}