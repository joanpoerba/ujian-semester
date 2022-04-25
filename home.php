<?php 
    require 'function.php';

    if(isset($_POST["submit"])){
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('data kamu sudah ditambah');
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data kamu gagal ditambah');
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
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container">
        <h1 class="title">
            <b><span>Ujian</span> Semester Genap</b>
        </h1>
        <div class="hero">
            <p class="kata">
                Hai para murid kami sekalian. Saya selaku kepala sekolah <br> akan melaksanakan <span>Ujian Semester</span> yang akan diadakan <br> 25 mei 2025 mendatang, saya harap para murid sudah <br> bersedia secara materi, dan fisik, agar kelangsungan <br> ujian lancar. Sekian dari saya, Terimakasih.
            </p>
        </div>
        <div class="materi-box">
            <h1 class="materi-txt">Materi Yang Akan <span>Diujiankan</span></h1>
            <div class="materi">
                <div class="astronomi">
                    <p>Astronomi</p>
                    <img src="asset/astronomi.png">
                </div>
                <div class="geografi">
                    <p>Geografi</p>
                    <img src="asset/geografi.png">
                </div>  
                <div class="ekonomi">
                    <p>Ekonomi</p>
                    <img src="asset/keuangan.png">
                </div>
                <div class="mtk">
                    <p>Matematika</p>
                    <img src="asset/math.png">
                </div>
                <div class="psikotes">
                    <p>Psikotes</p>
                    <img src="asset/psikotes.png">
                </div>
            </div>
        </div>
        <div class="form-box">
            <h2 class="form-title">Tambahkan nama <span>Anda</span></h2>
                <form class="form" action="" method="post">
                    <ul>
                        <li>
                            <input type="text" name="nama" id="nama" placeholder="Nama" required autocomplete="off">
                        </li>
                        <li>
                            <input type="text" name="kelas" id="kelas" placeholder="Kelas" required autocomplete="off">
                        </li>
                        <li>
                            <input type="text" name="nomor" id="nomor" placeholder="Nomor" required autocomplete="off">
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