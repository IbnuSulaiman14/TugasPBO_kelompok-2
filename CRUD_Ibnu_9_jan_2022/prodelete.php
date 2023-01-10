<?php

$nis = $_GET['nis'];

$db = new PDO('mysql:host=localhost;dbname=data_ibnu','root','');
$query = $db->query("DELETE FROM `biodata` WHERE nis='$nis'");

if($query){
    header("Location:index.php");
 }