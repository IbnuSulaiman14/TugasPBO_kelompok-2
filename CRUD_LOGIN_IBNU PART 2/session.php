<?php
 session_start();

    $nama = $_POST['nama'];
    $password = $_POST['password'];
    


 $koneksi = new PDO('mysql:host=localhost;dbname=puskesmas','root','');

 $query = $koneksi->query("select * from pengguna where nama='$nama' AND password='$password'");
 $data = $query->fetch();
 if($query->rowCount() > 0){
      if($data['role']=="admin"){
      $_SESSION['nama'] = $nama;
      $_SESSION['role'] = "admin";
      header("Location:beranda.php");
   }
   else if($data['role']=="user"){
      echo "hai user";
      $_SESSION['nama'] = $nama;
      $_SESSION['role'] = "user";
      header("Location:berandauser.php");
  }
}else{
  header("Location:form.php");
}