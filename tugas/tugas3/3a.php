<?php
// Memanggil function untuk menghitung keliling dan luas lingkaran
$jari_jari = 7; // jari-jari lingkaran
$keliling = hitungKelilingLingkaran($jari_jari);
$luas = hitungLuasLingkaran($jari_jari);

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungLuasLingkaran($jari_jari)
{
    $luas = 2 * 3.14 * $jari_jari;
    return $luas;
}
echo "jari-jari = $jari_jari <br/>";
echo "Keliling = $luas <br/>";
echo "<hr>";


echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungKelilingLingkaran($jari_jari)
{
    $keliling = 3.14 * ($jari_jari ** 2);
    return $keliling;
}
echo "jari-jari = $jari_jari <br/>";
echo "Keliling = $keliling <br/>";
echo "<hr>";
