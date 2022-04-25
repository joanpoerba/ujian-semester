<?php 
    require 'function.php';

    if(isset($_POST["submit"])){
        if(registrasi($_POST) > 0){
            echo "
                <script>
                    document.location = 'home.php';
                </script>
            ";
        } else {
            return mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <!-- css -->
    <link rel="stylesheet" href="registrasi.css">
</head>
<body>
    <div class="container">
        <div class="title-box">
            <h1 class="title">Daftarkan nama <span>Anda</span> untuk mengikuti <span>Ujian</span></h1>
        </div>
        <a href="login.php">
            <button class="login-btn" type="submit" name="login">Login</button>
        </a>
        <div class="box">
                <h2 class="form-title"><span>Daftar</span></h2>
                <form class="form" action="" method="post">
                    <ul>
                        <li>
                            <input type="text" name="username" id="username" placeholder="Masukkan Username" required autocomplete="off">
                        </li>
                        <li>
                            <input type="password" name="password" id="password" placeholder="Masukkan Password" required autocomplete="off">
                        </li>
                        <li>
                            <input type="password" name="konfirmasi" id="konfirmasi" placeholder="Konfirmasi Password" required autocomplete="off">
                        </li>
                        <li class="btn">
                            <button type="submit" name="submit">Daftar</button>
                            <p class="quote">-ngoding itu gampang bukan? bukan!-</p>
                        </li>
                    </ul>
                </form>
            </div>
    </div>
</body>
</html>