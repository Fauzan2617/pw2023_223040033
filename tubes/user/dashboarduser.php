<?php
session_start();
require("../functions.php");

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$user = query("SELECT * FROM user WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'halamanuser.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'halamanuser.php';
			</script>
		";
  }
}


if (!isset($_SESSION["login"])) {
  header("Location:../Log dan Regis/authentication-login.php ");
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
      <input type="hidden" name="id" value="<?= $user["id"]; ?>">
      <h4 class="display-4 fs-1">Account</h4>
      <br />

      <div class="mb-3">
        <label for="user" class="form-label">Name</label>
        <input type="text" id="user" class="form-control" name="username" required value="<?= $user["username"]; ?>" ? />
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" id="alamat" class="form-control" name="alamat" value="<?= $user["alamat"]; ?>" ? />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Alamat Email</label>
        <input type="email" id="email" class="form-control" name="email" value="<?= $user["email"]; ?>" ? />
      </div>
      <div class="mb-3">
        <label for="telepon" class="form-label">no telepon</label>
        <input type="text" id="telepon" class="form-control" name="nomor_telepon" value="<?= $user["nomor_telepon"]; ?>" ? />
      </div>

      <div class="mb-3">
        <label for="profile" class="form-label">Profile Picture</label>
        <input type="file" id="profile" class="form-control" name="pp" />
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Merubah Data</button>
    </form>
  </div>
</body>

</html>