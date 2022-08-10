<?php 
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $asal = $_GET['asal'];
    // koneksi
    $koneksi = new PDO("mysql:host=localhost;dbname=ppdb","root","");
    // query
    $query = $koneksi->query("UPDATE `calon_siswa` SET $id,$nama,$asal where $id");



?>