<?php
// $angka1 = 10;
// $angka2 = 5;

// if ($angka1 % 2 == 0) {
//     echo "Di adalah bilangan ganjil: $angka1";
// } else {
//     echo "dia adalah bilangan genap: $angka1";
// }

// echo "</br>";

// $angka = 5;
function cek_ganjil_genap($angka)
{
    if ($angka % 2 == 1) {
        return "Dia adalah bilangan ganjil: $angka";
    } else {
        return "dia adalah bilangan genap: $angka";
    }
}



echo cek_ganjil_genap(10);
echo "</br>";
echo cek_ganjil_genap(5);
echo "</br>";
echo cek_ganjil_genap(101);
