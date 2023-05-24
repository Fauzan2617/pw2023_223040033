<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sehat Plus-Account</title>
  <link rel="icon" a href="../images/logo-puskesmas.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="../css/dashboarduser.css " />
</head>

<body>
  <div class="d-flex justify-content-center align-items-center vh-100">
    <form class="shadow w-450 p-3" action="php/signup.php" method="post" enctype="multipart/form-data">
      <h4 class="display-4 fs-1">Account</h4>
      <br />
      <!-- <?php if (isset($_GET['error'])) { ?> -->
      <div class="alert alert-danger" role="alert">
        <!-- <?php echo $_GET['error']; ?> -->
      </div>
      <!-- <?php } ?> -->

      <!-- <?php if (isset($_GET['success'])) { ?> -->
      <div class="alert alert-success" role="alert">
        <!-- <?php echo $_GET['success']; ?> -->
      </div>
      <!-- <?php } ?> -->
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" name="fname" value="" ? ">
        </div>
      <div class=" mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" />
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="uname" value="" ? />
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat Email</label>
        <input type="text" class="form-control" name="uname" value="" ? />
      </div>

      <div class="mb-3">
        <label class="form-label">Profile Picture</label>
        <input type="file" class="form-control" name="pp" />
      </div>

      <button type="submit" class="btn btn-primary">Merubah Data</button>
    </form>
  </div>
</body>

</html>