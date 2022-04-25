<?php 
    require 'function.php';
    $peseta = query("SELECT * FROM murid ");

    if(isset($_POST["cari"])){
        $peseta = search($_POST["ketik"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Halaman <span>Admin</span></h1>
        <div class="searching-box">
            <form action="" method="post" class="searching-form">
                <input type="text" placeholder="Cari" name="ketik" autocomplete="off">
                <button class="search-btn" name="cari" type="submit">Cari</button>
            </form>
        </div>
        <div class="data">
            <table class="table">
                <thead>
                    <tr>
                    <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Nomor</th>
                        <th>Hapus</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $a = 1;?>
                    <?php foreach($peseta as $pstr): ?>
                    <tr>
                        <td><?= $a; ?></td>
                        <td><?= $pstr["nama"]; ?></td>
                        <td><?= $pstr["kelas"]; ?></td>
                        <td><?= $pstr["nomor"]; ?></td>  
                        <td>
                            <a target="_blank" onclick="return confirm('yang bener?')" href="hapus.php?id=<?= $pstr["id"]; ?>">
                                <img class="tong" src="asset/tong-sampah.png">
                            </a>
                        </td>
                        <td>
                            <a target="_blank" href="edit.php?id=<?= $pstr["id"]; ?>">
                                <img class="edit" src="asset/edit.png">
                            </a>
                        </td>
                    </tr>  
                    <?php $a++ ?>
                    <?php endforeach; ?>      
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>