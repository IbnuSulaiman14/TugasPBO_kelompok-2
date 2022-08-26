<?php
class koneksi{
    function koneksi(){
       return $koneksi1 = new PDO("mysql:host=localhost;dbname=sekolah","root","");
    }


}
