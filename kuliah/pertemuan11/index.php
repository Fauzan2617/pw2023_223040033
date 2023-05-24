<?php
require('functions.php');
$name = 'Home';

// Konekasi Databases
$conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040033') or die('databaseserror');
// query ke tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM MAHASISWA") or die('querry error'($conn));

$rows = [];

// ambil data fetch dari data mhs
// mysqli_fetch_row() ---> mengembalikan array numerik
// mysqli_fetch_assoc() ---> mengembalikan array associative
// mysqli_fetch_array() ---> mengembalikan duaduanya row dan associative
// mysqli_fetch_object() ---> 


while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;

  // var_dump($rows);
  // dd($row);
}
// siapkan data mahasiswa
$students = $rows;







// $students = [
//   [
//     "nama" => "Sandhika Galih",
//     "npm" => "043040023",
//     "email" => "sandhikagalih@unpas.ac.id"
//   ],
//   [
//     "nama" => "Doddy Ferdiansyah",
//     "npm" => "133040003",
//     "email" => "doddy@gmail.com"
//   ]
// ];

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
