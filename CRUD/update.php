<?php
require 'funct.php';
$id = $_GET["id_user"];

// $customer = query("SELECT * FROM tb_customer2 WHERE id = $id_user");

if(isset($_POST["submit"])){
    
    if(update($_POST)>0){
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
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
    <title>Edit data</title>
</head>
<body>
    <h1>Update data</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="id_user">Id : </label>
                <input type="text" name="id_user" id="id_user" required>
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="username">username : </label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="jkel">Jenis Kelamin : </label>
                <input type="text" name="jkel" id="jkel" required>
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" required>
            </li>
            <li>
                <label for="no_telp">Nomor Telepon : </label>
                <input type="text" name="no_telp" id="no_telp" required>
            </li>
            <button type="submit" name="submit">Update</button>
        </ul>   
</body>
</html>