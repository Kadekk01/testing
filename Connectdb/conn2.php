<?php

$con=mysqli_connect('localhost','root','','keuangan2');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}
$result = mysqli_query($con, "SELECT * FROM tb_customer2");
// var_dump($result);
// if(!$result){
//     echo mysqli_error($con);

// $cus = mysqli_fetch_assoc($result);
// var_dump($cus["nama"])

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>id</th>
            <th>Nama</th>
            <th>username</th>
            <th>jk</th>
            <th>alamat</th>
            <th>no_telp</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;?>
        <?php while($row=mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?=$i; ?></td>
            <td><?= $row["id_user"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["username"]?></td>
            <td><?= $row["jkel"]?></td>
            <td><?= $row["alamat"]?></td>
            <td><?= $row["no_telp"]?></td>
            <td>
                <a href="">edit</a> |
                <a href="">delete</a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>