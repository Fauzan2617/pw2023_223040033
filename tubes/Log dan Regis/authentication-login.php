<?php
session_start();
require '../functions.php';

if (isset($_SESSION["login"])) {
  header("Location:../Main Web");
  exit;
}


if (isset($_POST["user"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  $row = mysqli_fetch_assoc($result);

  // Mengambil data ke dalam variabel
  $username = $row["username"];
  $email = $row["email"];
  $alamat = $row["alamat"];
  $no_telepon = $row["nomor_telepon"];

  // Menyimpan data ke dalam session
  $_SESSION["username"] = $username;
  $_SESSION["email"] = $email;
  $_SESSION["alamat"] = $alamat;
  $_SESSION["nomor_telepon"] = $no_telepon;
  header("Location: ../user/halamanuser.php");
  exit;
}



if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];



  // Memeriksa apakah username dan password sesuai
  if ($username === 'Admin' && $password === '12345') {
    // Jika sesuai, alihkan ke halaman admin dashboard
    header('Location: ../Dashboard');
    exit();
  };


  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");


  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // Mengambil data ke dalam variabel
      $username = $row["username"];
      $email = $row["email"];
      $alamat = $row["alamat"];
      $no_telepon = $row["nomor_telepon"];

      // Menyimpan data ke dalam session
      $_SESSION["username"] = $username;
      $_SESSION["email"] = $email;
      $_SESSION["nomor_telepon"] = $no_telepon;
      $_SESSION["alamat"] = $alamat;
      $_SESSION["login"] = true;
      header("Location: ../Main Web");


      exit;
    }
  }

  $error = true;
}

?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../src/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../src/assets/images/logos/logo-puskesmas.png" width="100" alt="">
                </a>
                <p class="text-center">SehatPlus</p>
                <?php if (isset($error)) : ?>
                  <p style="color: red; font-style: italic;">username / password salah</p>
                <?php endif; ?>

                <form action="" method="post">
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remember this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="../src/php/index.php">Forgot Password ?</a>
                  </div>
                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="login" name="user" type="submit">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">BuatAkun</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.php">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>