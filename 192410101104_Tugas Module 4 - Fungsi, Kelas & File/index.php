<?php 
    require "bola.php";

    $bola = new Bola;  
    $bola -> setR(210);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101104</title>
</head>
<body>

    <h3>Violeta Sri Prabaningtyas</h3>

    <h1>Bangun_ruang</h1>


    <ul>
        <li>Jari - jari : <?php echo($bola-> getR())?></li>
        <li>Luas : <?php echo($bola-> getLuas())?></li>
        <li>Volume : <?php echo($bola-> getVolume())?></li>
    </ul>
</body>
</html>

