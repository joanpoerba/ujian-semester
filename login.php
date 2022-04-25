<?php 
    require 'function.php';

    // ERORRRRRRRRRRRRRRRRRR

    // if(isset($_POST["submit"])){
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     $result = mysqli_query($conn, "SELECT * FROM administator WHERE username = '$username'");

    //     if(mysqli_num_rows($result) === 1){

    //         $row = mysqli_fetch_assoc($result);

    //         if(password_verify($password, $row["password"])){
    //             header("Location: admin.php");
    //             exit;
    //         }
    //     }
    //     $eror = true;
    // }

    if(isset($_POST["submit"])){
        header("Location: admin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Hanya Admin</title>
    <!-- css -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Login ke halaman<span>Admin</span></h1>
        <div class="box">
                <h2 class="form-title"><span>Login</span></h2>
                    <p class="eror-txt">klik login, eror bagian system login</p>
                <form class="form" action="" method="post">
                    <ul>
                        <li>
                            <input type="text" name="username" id="username" placeholder="Masukkan Username" required autocomplete="off">
                        </li>
                        <li>
                            <input type="password" name="password" id="password" placeholder="Masukkan Password" required autocomplete="off">
                        </li>
                        <li class="btn">
                            <button type="submit" name="submit">Login</button>
                        </li>
                    </ul>
                </form>
            </div>
    </div>
</body>
</html>