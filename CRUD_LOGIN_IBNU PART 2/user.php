<h1> Profil </h1>

<div class="text-center">
 <img src="https://static.rctiplus.id/media/600/files/fta_rcti/news/1030282.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
   width="200px" alt="profile">
</div>

<?php
session_start();
 if(isset($_SESSION['nama'])){ 
    echo $_SESSION["nama"];

    
 }
 ?>
 