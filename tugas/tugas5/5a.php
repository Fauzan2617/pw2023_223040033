<?php
$mahasiswa = [
    ["nama" => "Fauzan Dwi", "nrp" => "123456789", "email" => "mfauzandwiputera10@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "fauzan.png"],
    ["nama" => "Ahmad Mulia Huda", "nrp" => "123456789", "email" => "Ahmad10@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "ahmad.png"],
    ["nama" => "Novan Ramdan", "nrp" => "123456789", "email" => "Novan10@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "novan.png"],
    ["nama" => "Refin", "nrp" => "123456789", "email" => "Refin10@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "refin.png"],
    ["nama" => "Bintang Arya", "nrp" => "123456789", "email" => "Bintang10@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "bintang.png"],
    ["nama" => "Diaz", "nrp" => "123456789", "email" => "Diaz10@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "diaz.png"],
    ["nama" => "Hikmal", "nrp" => "123456789", "email" => "Hikmal10@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "hikmal.png"],
    ["nama" => "Dimas Hidayatullah", "nrp" => "123456789", "email" => "Dimas10@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "zhongli.png"],
    ["nama" => "Dan", "nrp" => "123456789", "email" => "dan10@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "dan.png"],
    ["nama" => "Pramudya", "nrp" => "123456789", "email" => "pram10@gmail.com", "jurusan" => "Teknik Informatika", "gambar" => "pram.png"]

];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 300px;
            height: 280px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <h1>Daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>nama: <?= $mhs["nama"]; ?> </li>
            <li>nama: <?= $mhs["nrp"]; ?> </li>
            <li>nama: <?= $mhs["email"]; ?> </li>
            <li>nama: <?= $mhs["jurusan"]; ?><br><br><br></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>