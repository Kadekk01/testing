<?php
require 'funct.php';
$id = $_GET["id_user"];
if(delete($id) > 0){
    echo "
        <script>
        alert('data berhasil dihapus!');
        document.location.href = 'index.php';
        </script>
        ";
} else {
    echo "
        <script>
        alert('data gagal dihapus!');
        document.location.href = 'index.php';
        </script>
        ";
}
?>