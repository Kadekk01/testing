<!-- User-defined Function, to make function for self -->
<?php
// function salam(){
//     return "Welcome, cuyy";
// }
// function salam($waktu, $nama){
//     return "Good $waktu, $nama";
// }
// with default parameter
function salam($waktu ="Afternoon", $nama="Danazz"){
    return "Good $waktu, $nama";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallo</title>
</head>
<body>
    <h1><?= salam()?></h1>
</body>
</html>