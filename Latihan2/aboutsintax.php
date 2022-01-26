<?php
//ini komen untuk 1 baris
/*ini komen untuk lebih dari 1 baris
Dalam hal ini, baris di bawahnya juga ikut dikomen
ditutup dengan */

//Standar Output
//echo, print
    // echo "Yudiarsana";
//print_r (for array)
//var_dump (memberi informasi sekalian dengan tipe data dsb)
    // var_dump ("Yudiarsana");

//Writing syntax PHP in html(in example)
//Variable and data type
//Variable (in example)
//FAQ : mayn't start with a number, but may contain numbers 
$nama1 = "Yudikk";
$nama2 = "Dana";
$nama3 = "Gus Ardhi";

//Operator
//Aritmathic (in example)
//+ - * / %
$x = 9;
$y = 19;
$z = 77;

//merging string(concat)
//example
// echo $nama1 . " & " . $nama2;

//Assignment
// =, +=, -=, /=, %=, .=
//example
// $x .= " & ";
// $x .= 0;
// echo $x;

//Ratio (perbandingan)
// <, >, <=, ==, !=
//example
// var_dump(1 == 5);

//identity
//===, !==
//example
// var_dump(5 === "5");

//logic
//&&, ||, !
//example
// var_dump($x < 19 && $x % 2 == 0)
var_dump($x < 19 || $x % 2 == 0)
?>
<!--Example-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h1> Hei, selamat malam <?php echo $nama1 ?>. Bagaimana harimu?? </h1>
    <h1> Hari yang sangat menyenangkan ya, <?php echo $nama2 ?>??</h1>
    <h1> Bagaimana jika kita makan bersama? Bukankan begitu, <?php echo $nama3 ?>?? </h1>
    <h1> <?php echo $z+$x-$y; ?> </h1>
</body>
</html>