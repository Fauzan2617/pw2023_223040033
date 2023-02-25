<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .number {
            display: inline-block;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            border: 1px solid black;
            margin-right: 5px;
            background-color: chocolate;
        }
    </style>
</head>

<body>
    <?php
    $rows = 1; //jumlah baris segitiga
    for ($i = 10; $i >= $rows; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='number'>$j</div>";
        }
        echo "<br/>";
    }
    ?>
</body>

</html>