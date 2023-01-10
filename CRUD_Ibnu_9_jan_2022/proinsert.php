<?php 
$nis = $_POST['nis'];
$name = $_POST['name'];
$class = $_POST['class'];

$db = new PDO ('mysql:host=localhost;dbname=data_ibnu', 'root', '');
$query = $db->query("insert into biodata values ('$nis','$name','$class')");

if($query){
    header("Location:index.php");
}