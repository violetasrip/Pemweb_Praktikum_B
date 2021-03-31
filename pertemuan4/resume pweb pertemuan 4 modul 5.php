<?php 
    require "tabung.php";

    // $_GET['nama'] = 'VIOLETA SRI';
    // var_dump($_GET);

    // $_POST['nama'] = 'VIOLETA SRI';
    // var_dump($_POST);
    
    // if (empty($_POST)){
        // if (isset($_POST['submit'])) {
        //     if (strlen($_POST['umur']) > 0) {
        //         echo "login !";
        //     } else {
        //         echo "Isi umur terlebih dahulu";
        //     }
        // }
    //     echo "hehhh";
    // }
    

    // if (isset($_POST['submit_btn'])){
    //     $diameter = $_POST['diameter'];
    //     $tinggi = $_POST['tinggi'];
    //     $r = $diameter/2;
    //     $luas = 3.14*$diameter*$tinggi;
    //     $volume = 3.14*$r*$r*$tinggi;
    // }

    $tabung = new Tabung;  
    if (isset($_POST['submit'])){
       
        $tabung->setDiameter ($_POST['diameter']);
        $tabung->setTinggi ($_POST['tinggi']);
        $tabung->hitungluas();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <form action='' method='post'>
        <input type='text' name='umur' value=''>
        <button name='submit'>Submit</button>

    </form> -->


    <!-- <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='submit'>Hitung</button>

        <hr>


    </form>

    <ul>
        <li>Luas Sisi : <?= $luas;?></li>
        <li>Volume : <?= $volume;?></li>
    </ul> -->

    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='submit'>Hitung</button>

        <hr>

        <ul>
            <li>Luas Sisi : <?= $tabung->getLuasSelimut(); ?></li>
            <!-- <li>Volume : <?= $volume; ?></li> -->
        </ul>
    </form>
</body>
</html>

