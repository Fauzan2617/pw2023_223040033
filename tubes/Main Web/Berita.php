<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sehat Plus-Berita</title>
  <link rel="icon" a href="images/logo-puskesmas.png" />
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/080abbda3b.js" crossorigin="anonymous"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />

  <link rel="stylesheet" href="css/Berita.css" />
</head>

<body>
  <!-- Botton Back To Top -->
  <a href="#" class="to-top">
    <i class="fas fa-chevron-up"></i>
  </a>
  <!-- Navbar -->
  <nav class="navbar py-0 fixed-top navbar-expand-lg main-color custom-color">
    <div class="container-fluid">
      <a class="navbar-brand bold" href="index.html"><img src="images/logo-puskesmas.png" alt="" class="logo-pus" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item custom-padding">
            <a class="nav-link active color-text" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item custom-padding">
            <a class="nav-link active color-text" href="index.php">Profil</a>
          </li>
          <li class="nav-item custom-padding">
            <a class="nav-link active color-text" href="index.php">Layanan</a>
          </li>
          <li class="nav-item custom-padding">
            <a class="nav-link active color-text" href="index.php">Dokter</a>
          </li>
          <li class="nav-item custom-padding">
            <a class="nav-link active color-text" href="obat.php">ObatShop</a>
          </li>
          <li class="nav-item custom-padding">
            <a class="nav-link active color-text" href="Berita.php">Berita</a>
          </li>
          <li class="nav-item custom-padding">
            <a class="nav-link active color-text" href="#footer">Contact</a>
          </li>
          <li class="nav-item custom-padding">
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
  <!-- Konten -->
  <div class="container-fluid margin-top-konten">
    <div class="container">
      <div class="row">
        <p class="margin-katalog">Berita dan Kegiatan</p>
        <!-- Kategori -->
        <div class="col-md-4 col-lg-3 mb-5">
          <h4>Kategori</h4>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              Berita
            </a>
            <a href="#" class="list-group-item list-group-item-action">Kegiatan</a>
          </div>
        </div>
        <!-- Berita Kesehatan -->
        <div class="col-md-8 col-lg-9" id="berita">
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="images/b1.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">
                    Anak Bisa Meninggal kena Heatstroke saat Cuaca Panas
                  </h5>
                  <br />
                  <p class="card-text">
                    KOMPAS.com - Anak balita berusia 19 bulan dan 11 tahun di
                    Malaysia meninggal dunia setelah terkena heatstroke karena
                    serangan cuaca panas beberapa waktu belakangan. Untuk
                    diketahui, heatstroke adalah kondisi paling berat pada
                    tubuh akibat cuaca panas karena tubuh tidak dapat
                    mengontrol suhu badan. Kondisi tersebut membuat suhu badan
                    meningkat dengan cepat hingga 41 derajat Celsius dalam 10
                    sampai 15 menit dan tubuh sudah tidak dapat mengeluarkan
                    keringat.
                  </p>
                  <a target="_blank" href="https://health.kompas.com/read/23E05130100268/anak-bisa-meninggal-kena-heatstroke-saat-cuaca-panas-ini-pencegahannya--">
                    <button>Selengkapnya ></button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/b2.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">
                    4 Penyebab Konjungtivitis yang Perlu Diketahui
                  </h5>
                  <br />
                  <p class="card-text">
                    KOMPAS.com - Penyebab konjungtivitis bisa dari alergi
                    hingga infeksi bakteri dan virus. Mengutip Cleveland
                    Clinic, konjungtivitis adalah istilah medis untuk
                    peradangan pada konjungtiva, jaringan bening yang melapisi
                    permukaan bagian dalam kelopak mata dan lapisan luar bola
                    mata Anda.
                  </p>
                  <a target="_blank" href="https://health.kompas.com/read/2023/05/05/143000168/4-penyebab-konjungtivitis-yang-perlu-diketahui"><button>Selengkapnya ></button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/b3.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">
                    Mengapa Gorengan Berbahaya untuk Kesehatan?
                  </h5>
                  <br />
                  <p class="card-text">
                    KOMPAS.com - Makan gorengan sembari menyesap secangkir
                    kopi atau teh memang nikmat rasanya. Selain menjadi
                    camilan, gorengan juga kerap digunakan sebagai lauk atau
                    pendamping makanan. Banyak orang berpikir bahwa rasanya
                    ada yang kurang jika makan atau bersantai tanpa gorengan.
                    Tapi, sudah tahukah Anda bahwa dibalik kelezatan gorengan
                    menyimpan hal buruk untuk kesehatan?
                  </p>
                  <a target="_blank" href="https://health.kompas.com/read/2023/05/05/113100368/mengapa-gorengan-berbahaya-untuk-kesehatan">
                    <button>Selengkapnya ></button></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/b4.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">
                    Kenali Apa Itu Konjungtivitis, Penyebab, dan
                    Tanda-tandanya
                  </h5>
                  <br />
                  <p class="card-text">
                    KOMPAS.com - Konjungtivitis umum dikenal sebagai kondisi
                    mata merah yang banyak penyebabnya. Ini bisa kita alami
                    karena alergen, bakteri, atau virus, termasuk Covid-19.
                    Kondisi ini dapat menyebabkan sakit mata, perasaan ada
                    sesuatu yang mengganjal di mata Anda, penglihatan kabur
                    dan sensitivitas cahaya. Berikut artikel ini akan mengulas
                    lebih lanjut tentang apa itu konjungtivits, penyebab, dan
                    tanda-tandanya.
                  </p>
                  <a target="_blank" href="https://health.kompas.com/read/23E05100000168/kenali-apa-itu-konjungtivitis-penyebab-dan-tanda-tandanya"><button>Selengkapnya ></button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class="bg-dark text-white pt-5 pb-4 margin-top">
    <div class="container text-center text-md-left" id="footer">
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
  <!-- Js -->
  <script src="js/berita.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>