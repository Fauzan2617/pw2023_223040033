<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sehat Plus</title>
  <link rel="icon" a href="images/logo-puskesmas.png" />

  <script src="https://kit.fontawesome.com/080abbda3b.js" crossorigin="anonymous"></script>
  <!-- boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="css/obat.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg main-color py-0">
    <div class="container-fluid py">
      <a class="navbar-brand bold" href="index.html"><img src="images/logo-puskesmas.png" class="logo-pus" alt="" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item px-2">
            <a class="nav-link active color-text fonts" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link active color-text line-hover" href="index.php">Profil</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link active color-text" href="index.php">Layanan</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link active color-text" href="index.php">Dokter</a>
          </li>

          <li class="nav-item px-2">
            <a class="nav-link active color-text" href="obat.php">ObatShop</a>
          </li>

          <li class="nav-item px-2">
            <a class="nav-link active color-text" href="Berita.php">Berita
            </a>
          </li>

          <li class="nav-item px-2">
            <a class="nav-link active color-text" href="#footer">Contact</a>
          </li>
          <li class="nav-item px-2">
            <strong> <a class="nav-link active text-black" href="../user/halamanuser.php"> <span class="text-warning">Your</span> Account</a></strong>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn bg-body" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <span class="target"></span>
  <!-- End Navbar -->
  <!-- All Produk -->
  <div class="container-fluid py-5 margin-top-konten">
    <div class="container">
      <div class="row">
        <!-- Kategori -->
        <div class="col-md-4 col-lg-3 mb-5">
          <h4>Kategori Obat</h4>
          <ul class="list-group">
            <li class="list-group-item active" aria-current="true">
              All Produk
            </li>
            <li class="list-group-item">Vitamin</li>
            <li class="list-group-item">Anak-Anak</li>
            <li class="list-group-item">Obat Sakit Kelapa</li>
            <li class="list-group-item">ObatFlu</li>
          </ul>
        </div>
        <!-- Produk -->
        <div class="col-md-8 col-lg-9">
          <h4 class="text-center mb-4">All Produk</h4>
          <div class="row">
            <div class="col-sm-6 col-lg-4 mb-3">
              <div class="card">
                <a href="img-obat/Actifed.png" data-lightbox="1" data-title="Actifed"><img src="img-obat/Actifed.png" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                  <h5 class="card-title text-center">Actifed</h5>
                  <p class="card-text text-center">
                    <strong>Rp30.000</strong>
                  </p>
                  <a href="./Detail Item/detail.php" class="btn btn-primary w-100 my-cart-btn">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
              <div class="card">
                <a href="img-obat/antasida.webp" data-lightbox="2" data-title="Antasida"><img src="img-obat/antasida.webp" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                  <h5 class="card-title text-center">Antasida</h5>
                  <p class="card-text text-center">
                    <strong>Rp63.000</strong>
                  </p>
                  <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
              <div class="card">
                <a href="img-obat/insto.jpg" data-lightbox="3" data-title="SLIM LINE 2L - BLUE
                      "><img src="img-obat/insto.jpg" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                  <h5 class="card-title text-center">Insto - 120ML</h5>
                  <p class="card-text text-center">
                    <strong>Rp22.000</strong>
                  </p>
                  <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
              <div class="card">
                <a href="img-obat/Mylanta.jpg" data-lightbox="4" data-title="MODULAR BOWL
                      "><img src="img-obat/Mylanta.jpg" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                  <h5 class="card-title text-center">Mylanta</h5>
                  <p class="card-text text-center">
                    <strong>Rp175.000</strong>
                  </p>
                  <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
              <div class="card">
                <a href="img-obat/oralit.jpg" data-lightbox="5" data-title="FROZY COZY WITH BAG
                      "><img src="img-obat/oralit.jpg" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                  <h5 class="card-title text-center">Oralit</h5>
                  <p class="card-text text-center">
                    <strong>Rp95.000</strong>
                  </p>
                  <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
              <div class="card">
                <a href="img-obat/Rhinos-SR.png" data-lightbox="6" data-title="FROZY COZY MINI (4)
                      "><img src="img-obat/Rhinos-SR.png" class="card-img-top" alt="..." /></a>
                <div class="card-body">
                  <h5 class="card-title text-center">Rhinos-SR</h5>
                  <p class="card-text text-center">
                    <strong>Rp200.000</strong>
                  </p>
                  <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
              </div>
            </div>
          </div>
          <nav class="mt-4 d-flex justify-content-center" aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center text-md-left" id="footer
      ">
      <div class="row text-center text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-5 font-weight-bold text-white">
            ABOUT US
          </h5>
          <address>
            Sehat Plus<br />
            jln Sindang Sari no 23 <br />
            RT01/RW26 kecamatan melong<br />
            Cimahi Selatan
          </address>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-white">
            QUICK LINKS
          </h5>
          <p>
            <a href="#" class="text-white" style="text-decoration: none">Our Plan</a>
          </p>
          <p>
            <a href="#" class="text-white" style="text-decoration: none">Our Plan</a>
          </p>
          <p>
            <a href="#" class="text-white" style="text-decoration: none">Privacy Policy</a>
          </p>
          <p>
            <a href="#" class="text-white" style="text-decoration: none">Appointment Schedule</a>
          </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-white">
            MAKE AN APPOINTMENT
          </h5>
          <p>
            <a href="#" class="text-white" style="text-decoration: none">8:00 AM - 11:00 AM</a>
          </p>
          <p>
            <a href="#" class="text-white" style="text-decoration: none">2:00 PM - 05:00 PM</a>
          </p>
          <p>
            <a href="#" class="text-white" style="text-decoration: none">8:00 PM - 11:00 PM</a>
          </p>
          <p>
            <i class="bi bi-envelope-fill"></i>
            <a href="#" class="text-white" style="text-decoration: none">sehatplus@gmail.com</a>
          </p>
          <p>
            <i class="bi bi-telephone-fill"></i>+62 2678 8906<a href="#" class="text-white" style="text-decoration: none"></a>
          </p>
        </div>
      </div>
      <hr class="mb-4" />
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8 text-md-start">
          <p>
            Copyright @2023 All rights reserved by:
            <a href="#" style="text-decoration: none">
              <strong class="text-warning">Sehat Plus</strong></a>
          </p>
        </div>
        <div class="col-md-5 col-lg-4">
          <div class="text-center text-md-end">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font: size 23px"><i class="bi bi-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font: size 50px"><i class="bi bi-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-floating btn-sm text-white" style="font: size 23px"><i class="bi bi-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- JS Bosstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <!-- My JS -->
  <script src="js/obat.js"></script>
</body>

</html>