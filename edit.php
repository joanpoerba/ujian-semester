<?php 
    require 'function.php';

    $id = $_GET["id"];
    $pstr = query("SELECT * FROM murid WHERE id = $id")[0];

    if(isset($_POST["submit"])){
        if(edit($_POST) > 0){
            echo "
                <script>
                    alert('data murid berhasil diubah');
                </script>
            " ;
        } else{
            echo "
                <script>
                    alert('data murid gagal diubah');
                </script>
            ";
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- css -->
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Edit Data <span>Murid</span></h1>
        <div class="form-box">
                <form class="form" action="" method="post">
                    <input type="hidden" name="id" value="<?= $pstr["id"]; ?>">
                    <ul>
                        <li>
                            <input type="text" name="nama" id="nama" placeholder="Nama" required autocomplete="off" value="<?= $pstr["nama"]; ?>">
                        </li>
                        <li>
                            <input type="text" name="kelas" id="kelas" placeholder="Kelas" required autocomplete="off" value="<?= $pstr["kelas"]; ?>">
                        </li>
                        <li>
                            <input type="text" name="nomor" id="nomor" placeholder="Nomor" required autocomplete="off" value="<?= $pstr["nomor"]; ?>">
                        </li>
                        <li class="btn">
                            <button type="submit" name="submit">Tambah</button>
                        </li>
                    </ul>
                </form>
        </div>
    </div>
</body>
</html>