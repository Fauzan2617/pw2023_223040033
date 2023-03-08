<?php
$mahasiswa = [['fauzan', '🐄🐄', '🍔🍔'], ['dwi', '🙈🙈', '🥪🥪']];


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
    <h2>daftar mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) { ?>
        <ul>
            <li>nama: <?= $m[0]; ?></li>
            <li>peliharaan: <?= $m[1]; ?></li>
            <li>makanan favorit: <?= $m[2] ?></li>
        </ul>
    <?php } ?>
</body>

</html>