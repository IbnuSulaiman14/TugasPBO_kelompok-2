<?php

session_start();
if(!isset($_SESSION["nama"])) { 
   header("Location:form.php");
}
?>
<h1> PUSKESMAS IBNU SEJAHTERA </h1>
<a href="user.php">Profile</a><br />
<a href="hapus_session.php">Logout</a>