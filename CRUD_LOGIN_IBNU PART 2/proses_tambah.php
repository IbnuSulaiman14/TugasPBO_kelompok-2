<?php
 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $password = $_POST['password'];
 $role = $_POST['role'];

 $database = new PDO("mysql:host=localhost;dbname=puskesmas",'root','');
 $query = $database->query("insert into pengguna values($id,'$nama',$password,'$role')");

 if($query){
    header("Location:index.php");
 }