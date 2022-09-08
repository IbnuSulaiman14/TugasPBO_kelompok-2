<?php
session_start();
 if(isset($_SESSION['nama'])){ 
    echo "<h1> Profil </h1>";
    echo $_SESSION["nama"];
    
 }