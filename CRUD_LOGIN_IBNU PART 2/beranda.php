<?php

session_start();
if(!isset($_SESSION["nama"])) { 
   header("Location:form.php");
}
?>
<h1> PUSKESMAS DEPRESI IBNU </h1>
<a href="user.php">Profile</a><br />
<a href="index.php">Data</a><br />
<form action="hapus_session.php">
        <button onclick="alert('Anda Telah Logout')">Logout</button>
</form>