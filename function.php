<?php 
    $conn = mysqli_connect("localhost", "root", "", "ujian-semester");

    // tambah data

    function tambah($data){
        global $conn;

        $nama = htmlspecialchars($_POST["nama"]);
        $kelas = htmlspecialchars($_POST["kelas"]);
        $nomor = htmlspecialchars($_POST["nomor"]);

        $query = "INSERT INTO murid
                    VALUE
                ('','$nama','$kelas','$nomor');
        ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    // show data

    function query($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $anggota = [];
        while($pstr = mysqli_fetch_assoc($result)){
            $anggota [] = $pstr;
        }
        return $anggota;
    }

    // hapus data

    function hapus($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM  murid WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    // edit data

    function edit($data){
        global $conn; 
        
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $nomor = htmlspecialchars($data["nomor"]);

        $query = "UPDATE murid SET
                    nama = '$nama',
                    kelas = '$kelas',
                    nomor = '$nomor'
                WHERE id = $id;
        ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    // searching data

    function search($ketik){
        $query = "SELECT * FROM murid 
                    WHERE 
                   nama LIKE '%$ketik%'";
    return query($query);
    }

    // registrasi

    function registrasi($data){
        global $conn;

        $username = htmlspecialchars(strtolower(stripslashes($data["username"])));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $konfirmasi = mysqli_real_escape_string($conn, $data["password"]);

        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('nama ini sudah digunakan, harap pakai nama lain');
                </script>
            ";
            return false;
        }

        if($password !== $konfirmasi){
            echo "masukkan password yang sesuai";
            return false;
        };

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO users 
                                VALUE
                            ('','$username','$password')
        ");

        return mysqli_affected_rows($conn);
    }
?>