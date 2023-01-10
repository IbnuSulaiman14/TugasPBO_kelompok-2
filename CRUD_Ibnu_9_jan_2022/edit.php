<?php 
    $nis = $_GET['nis'];
    $db = new PDO("mysql:host=localhost;dbname=data_ibnu", 'root', '');
    $query = $db->query("SELECT * FROM biodata WHERE nis=$nis");
    $data = $query->fetch();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <div class="container-sm">
    <form action="proedit.php" method="post">
        <input type="hidden" name="nis" value="<?= $nis ?>">
        <div>
            <label>Nama</label>
            <input type="text" name="name" value="<?= $data['name'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
        <div class="col-auto">
            <label class="form-label">class</label>
            <select name="class" id="" class="form-select" aria-label="Default select example">
                <option value="10 RPL">10 RPL</option>
                <option value="11 RPL">11 RPL</option>
                <option value="12 RPL">12 RPL</option>
                <option value="10 TKJ">10 TKJ</option>
                <option value="11 TKJ">11 TKJ</option>
                <option value="12 TKJ">12 TKJT</option>
                <option value="10 TKJ">10 TKJT</option>
                <option value="11 TKJ">11 TKJT</option>
                <option value="12 TKJ">12 TKJT</option>
                <option value="10 OTKP">10 OTKP</option>
                <option value="11 OTKP">11 OTKP</option>
                <option value="12 OTKP">12 OTKP</option>
            </select>
        </div>
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
    </div>
</body>
</html>     