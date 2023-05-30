<?php
session_start();


if (!isset($_SESSION["login"])) {
  header("Location:../Log dan Regis/authentication-login.php ");
  exit;
}

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "rumah sakit");
$username = $_SESSION["username"];
if (isset($_POST['submit'])) {
  // Mengambil data dari form

  global $conn;
  global $username;
  $name = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $no_telepon = $_POST['nomor_telepon'];

  // Update data user berdasarkan username
  $query = "UPDATE user SET username = '$name', alamat = '$alamat', email = '$email', nomor_telepon = '$no_telepon',  password = '$password' WHERE username = '$username'";
  mysqli_query($conn, $query);

  // Redirect ke halaman sukses atau halaman lainnya
  header("Location: halamanuser.php");




  exit;
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sehat Plus-Account</title>
  <link rel=" icon" a href="../Main Web/images/logo-puskesmas.png" />"
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="../css/dashboarduser.css " />
</head>

<body>
  <div class="d-flex justify-content-center align-items-center vh-100">
    <form class="shadow w-450 p-3" action="" method="post">
      <h4 class="display-4 fs-1">Account</h4>
      <br />

      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="username" value="" ? />
      </div>
      <div class=" mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" />
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="" ? />
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat Email</label>
        <input type="email" class="form-control" name="email" value="" ? />
      </div>
      <div class="mb-3">
        <label class="form-label">no telepon</label>
        <input type="text" class="form-control" name="nomor_telepon" value="" ? />
      </div>

      <div class="mb-3">
        <label class="form-label">Profile Picture</label>
        <input type="file" class="form-control" name="pp" />
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Merubah Data</button>
    </form>
  </div>
</body>

</html>