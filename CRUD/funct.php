<?php
// connect to database
$con = mysqli_connect('localhost','root','','keuangan2');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}

function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function add($data){
    global $con;
    $id_user = $data["id_user"];
    $nama = $data["nama"];
    $username = $data["username"];
    $jkel = $data["jkel"];
    $alamat = $data["alamat"];
    $no_telp = $data["no_telp"];

    $query = "INSERT INTO tb_customer2 VALUES ('', '$id_user', '$nama', '$username', '$jkel', '$alamat', '$no_telp')";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function delete($id) {
    global $con;
    mysqli_query($con, "DELETE FROM tb_customer2 WHERE id_user = $id");
    return mysqli_affected_rows($con);
}

function search($keyword) {
    $query = "SELECT * FROM tb_customer2 WHERE username = '$keyword'";
    return query($query);
}
?>