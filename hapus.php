<?php 
    require 'function.php';

    $id = $_GET["id"];

    if(hapus($id) > 0){
        echo "
            <script>
                alert('data murid berhasil di hapus');
                document.location : 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data murid gagal dihapus');
                document.location : 'admin.php';
            </script>
        ";
    }

?>