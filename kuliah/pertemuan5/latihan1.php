<?php
// array
// membuat array

$hari = array('senin', 'selasa', 'rabu');
$bulan = array('januari', 'febuary', 'maret');
$myarray = ['fazuan', 39, false,];
$binatang = ['🐄', '🙈', '🐇'];


echo $hari[1];
echo '<hr>';
var_dump($hari);
echo '<hr>';
print_r($bulan);
echo '<hr>';
var_dump($myarray);
echo '<hr>';


// manipulasi array
// menggnakan index
$hari[3] = 'kamis';
$hari[]  = "jum'at";
print_r($hari);
echo '<hr>';


// menambah elemen di akhir menggunakan array_push ()
array_push($bulan, 'april');
print_r($bulan);
echo '<hr>';

// menambah elemen di akhir menggunakan array_unshif ()
array_unshift($binatang, '😎', '🙈');
print_r($binatang);
echo '<hr>';

// menghapus elemen di akhir menggunakan array_pop ()
array_pop($hari);
print_r($hari);
echo '<hr>';

// menghapus elemen di awal menggunakan array_shif ()
array_shift($hari);
print_r($hari);
