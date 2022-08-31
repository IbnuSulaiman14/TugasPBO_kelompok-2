<?php
    session_start();

    if(isset($_REQUEST['submit'])){
       $_SESSION["username"] = $_REQUEST['username'];
       $_SESSION["ID"] = $_REQUEST['ID'];
    
    Header("Location: coba_tampil_session.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="">
        <span>Username : <input type="text" name="username"></span>
        <br>
        <span>Id : <input type="text" name="ID"></span>
        <br>
        <button name="submit" >Save</button>
    </form>
</body>
</html>