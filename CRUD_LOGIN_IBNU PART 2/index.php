<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Admin</title>
</head>
<body>
    <?php

        session_start();
        if(!isset($_SESSION["nama"])) { 
        header("Location:form.php");
        }
        
        $db = new PDO("mysql:host=localhost;dbname=puskesmas", 'root', '');
        $query = $db->query("SELECT * FROM pengguna");
        ?>
        <div class="container-sm">
        <a href="tambah.php">Tambah Siswa</a>
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>

        <?php while($data = $query->fetch()): ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['role'] ?></td>
                
                <td>
                    <a href="edit.php?id=<?= $data['id'] ?>"class="btn btn-info">Update</a>
                    <a href="proses_hapus.php?id=<?= $data['id'] ?>"class="btn btn-info">Hapus</a>
                </td>
            </tr>
        <?php endwhile ?>

        </table>
        </div>
</body>
</html>