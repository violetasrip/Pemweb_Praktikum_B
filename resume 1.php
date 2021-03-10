
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World!</title>
</head>
<body>
    <?php
        // cara print
        echo $int;
        echo $str;
    ?>
    <!-- ///////////// -->

    <?php
    // looping
        for($i = 0; $i < 5; $i++) {

            // if else
            if($i % 2 == 0) { ?>
                <p>genap</p>
            <?php } else { ?>
                <p>ganjil</p>
            <?php }

        } ?>
    <!-- ///////////// -->

    <?php 
        // penjumlahan string
        echo $str . " " . $str;
    ?>
    <!-- ///////////// -->

    <?php 
        // vardump
        var_dump($arr);
    ?>
    <!-- ///////////// -->


    <?php
        $arr = [
            [
                'nama' => 'vio',
                'nim' => '192410101104',
                'usia' => '20'
            ]
        ];

        $arr2 = ['vio', '192410101104', '20']
    ?>

    <h1>Data Mahasiswa</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $arr2[0]; ?></td>
                    <td><?= $arr2[1]; ?></td>
                    <td><?= $arr2[2]; ?></td>
                </tr>
            </tbody>
            <br>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($arr as $mhs): ?>
                    <tr>
                        <td><?= $mhs['nama'] ?></td>
                        <td><?= $mhs['nim'] ?></td>
                        <td><?= $mhs['usia'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    
</body>
</html>