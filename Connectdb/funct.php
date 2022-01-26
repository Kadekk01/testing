<?php
// connect to database
$con=mysqli_connect('localhost','root','','keuangan2');
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
?>