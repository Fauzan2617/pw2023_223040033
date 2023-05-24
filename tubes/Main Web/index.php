<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sehat plus</title>
  <link rel="icon" a href="images/logo-puskesmas.png" />
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- normalize css -->
  <link rel="stylesheet" href="css/nomal.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Botton Back To Top -->
  <a href="#" class="to-top">
    <i class="fas fa-chevron-up"></i>
  </a>
  <!-- header -->
  <header class="header bg-blue">
    <nav class="navbar bg-blue">
      <div class="container flex">
        <a href="index.html" class="navbar-brand">
          <img src="images/logo-puskesmas.png" alt="site logo" />
        </a>
        <button type="button" class="navbar-show-btn">
          <img src="images/ham-menu-icon.png" />
        </button>

        <div class="navbar-collapse bg-white">
          <button type="button" class="navbar-hide-btn">
            <img src="images/close-icon.png" />
          </button>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">Profil</a>
            </li>
            <li class="nav-item">
              <a href="#services" class="nav-link">Layanan</a>
            </li>
            <li class="nav-item">
              <a href="#doc-panel" class="nav-link">Dokter</a>
            </li>
            <li class="nav-item">
              <a target="_blank" href="obat.php" class="nav-link">ObatShop</a>
            </li>
            <li class="nav-item">
              <a target="_blank" href="Berita.php" class="nav-link">Berita</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
          </ul>
          <div class="search-bar">
            <form>
              <div class="search-bar-box flex">
                <span class="search-icon flex">
                  <img src="images/search-icon-dark.png" />
                </span>
                <input type="search" class="search-control" placeholder="Search here" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </nav>

    <div class="header-inner text-white text-center">
      <div class="container grid">
        <div class="header-inner-left">
          <h1>
            pilih sekarang<br />
            <span>sehat plus</span>
          </h1>
          <p class="lead">layanan yang terbaik bagi anda</p>
          <p class="text text-md">
            "Pelayanan rumah sakit terbaik memberikan perawatan terbaik bagi
            pasien dengan mengutamakan kualitas, keamanan, dan kenyamanan."
          </p>
          <div class="btn-group">
            <a href="#" class="btn btn-white">Learn More</a>
            <a href="#" class="btn btn-light-blue">Sign In</a>
          </div>
        </div>
        <div class="header-inner-right">
          <img src="images/dokter 2.png" />
        </div>
      </div>
    </div>
  </header>
  <!-- end of header -->

  <main>
    <!-- about section -->
    <section id="about" class="about py">
      <div class="about-inner">
        <div class="container grid">
          <div class="about-left text-center">
            <div class="section-head">
              <h2>About Us</h2>
              <div class="border-line"></div>
            </div>
            <p class="text text-lg">
              Kami telah dipercaya selama hampir 40tahun dalam menangani
              pasien, kami selalu mengutamakan kenyamanan serta kualitas dalam
              berhadapan dengan pasien. Kami akan selalu meningkatkan performa
              Pelayanan hingga menjadi kepercayaan anda dalam mencari solusi
              untuk kesehatan anda atau berkonsultasi untuk penyakit anda
            </p>
            <a href="#" class="btn btn-white">Learn More</a>
          </div>
          <div class="about-right flex">
            <div class="img">
              <img src="images/dokter-1.png" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of about section -->

    <!-- banner one -->
    <section id="banner-one" class="banner-one text-center">
      <div class="container text-white">
        <blockquote class="lead">
          <i class="fas fa-quote-left"></i> "Kesehatan bukanlah tujuan akhir
          hidup, tetapi kesehatan yang baik memungkinkan seseorang mengejar
          dan mencapai tujuan hidupnya dengan lebih baik."
          <i class="fas fa-quote-right"></i>
        </blockquote>
        <small class="text text-sm">- Dr. Siti Setiati, SpPD-KGEH, FINASIM (Profesor Endokrinologi
          Universitas Indonesia)</small>
      </div>
    </section>
    <!-- end of banner one -->

    <!-- services section -->
    <section id="services" class="services py">
      <div class="container">
        <div class="section-head text-center">
          <h2 class="lead">Dokter Terbaik Memberikan Obat Paling Sedikit</h2>
          <p class="text text-lg">
            Cara sempurna untuk menunjukkan layanan rumah sakit Anda
          </p>
          <div class="line-art flex">
            <div></div>
            <img src="images/4-dots.png" />
            <div></div>
          </div>
        </div>
        <div class="services-inner text-center grid">
          <article class="service-item">
            <div class="icon">
              <img src="images/service-icon-1.png" />
            </div>
            <h3>Pemantauan Jantung</h3>
            <p class="text text-sm">
              Layanan berupa monitoring kesehatan jantung anda dengan
              fasilitas yang modern dan terbarukan, sehingga tindakan medis
              bisa cepat dilakukan bila terdeteksi masalah pada jantung!
            </p>
          </article>

          <article class="service-item">
            <div class="icon">
              <img src="images/service-icon-2.png" />
            </div>
            <h3>Layanan Medis</h3>
            <p class="text text-sm">
              Kami siap melayani anda selama 24/7 sampai anda benar benar puas
              dengan pelayanan kami. Menjamin uang anda akan 100% dikembalikan
              jika anda tidak puas dengan pelayanan rumah sakit!
            </p>
          </article>

          <article class="service-item">
            <div class="icon">
              <img src="images/service-icon-3.png" />
            </div>
            <h3>Bantuan Darurat</h3>
            <p class="text text-sm">
              Dengan pelayanan antar jemput kami akan selalu siaga dengan
              situasi darurat apapun dari anda!
            </p>
          </article>

          <article class="service-item">
            <div class="icon">
              <img src="images/service-icon-4.png" />
            </div>
            <h3>Tindakan Pertama</h3>
            <p class="text text-sm">
              Setiap pasien akan selalu mengambil tindakan pertama sesuai
              aturan kedokteran, jika situasi berubah menjadi darurat kami
              selalu siap mengambil tindakan darurat!
            </p>
          </article>
        </div>
      </div>
    </section>
    <!-- end of services section -->

    <!-- banner two section -->
    <section id="banner-two" class="banner-two text-center">
      <div class="container grid">
        <div class="banner-two-left">
          <img src="images/banner-3.png" />
        </div>
        <div class="banner-two-right">
          <p class="lead text-white">
            Ketika Anda Muda Dan Sehat, Tidak Pernah Terpikirkan Bahwa Dalam
            Satu Detik Seluruh Hidup Anda Bisa Berubah.
          </p>
          <div class="btn-group">
            <a href="#" class="btn btn-white">Learn More</a>
            <a href="#" class="btn btn-light-blue">Sign In</a>
          </div>
        </div>
      </div>
    </section>
    <!-- end of banner two section -->

    <!-- doctors section -->
    <section id="doc-panel" class="doc-panel py">
      <div class="container">
        <div class="section-head">
          <h2>Panel Dokter kami</h2>
        </div>

        <div class="doc-panel-inner grid">
          <div class="doc-panel-item">
            <div class="img flex">
              <img src="images/doc-1.png" alt="doctor image" />
              <div class="info text-center bg-blue text-white flex">
                <p class="lead">samuel goe</p>
                <p class="text-lg">Medicine</p>
              </div>
            </div>
          </div>

          <div class="doc-panel-item">
            <div class="img flex">
              <img src="images/doc-2.png" alt="doctor image" />
              <div class="info text-center bg-blue text-white flex">
                <p class="lead">elizabeth ira</p>
                <p class="text-lg">Cardiology</p>
              </div>
            </div>
          </div>

          <div class="doc-panel-item">
            <div class="img flex">
              <img src="images/doc-3.png" alt="doctor image" />
              <div class="info text-center bg-blue text-white flex">
                <p class="lead">tanya collins</p>
                <p class="text-lg">Medicine</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of doctors section -->

    <!-- package services section -->
    <section id="package-service" class="package-service py text-center">
      <div class="container">
        <div class="package-service-head text-white">
          <h2>Layanan Terbaik</h2>
          <p class="text text-lg">Paket layanan terbaik untuk Anda</p>
        </div>
        <div class="package-service-inner grid">
          <div class="package-service-item bg-white">
            <div class="icon flex">
              <i class="fas fa-phone fa-2x"></i>
            </div>
            <h3>Regular Case</h3>
            <p class="text text-sm">
              Memeriksa kesehatan anda dengan banyak layanan kami diantaranya
              poli gigi, monitoring jantung, spesialis kanker, serta masih
              banyak lagi. Maka pesan sekarang juga !
            </p>
            <a href="#" class="btn btn-blue">Pesan Layanan</a>
          </div>

          <div class="package-service-item bg-white">
            <div class="icon flex">
              <i class="fas fa-calendar-alt fa-2x"></i>
            </div>
            <h3>Serious Case</h3>
            <p class="text text-sm">
              Jangan hanya diam ketika anda atau orang disekitar anda
              mengalami gejala gejala penyakit. Cepatlah untuk berkonsultasi
              dengan dokter terbaik kami !
            </p>
            <a href="#" class="btn btn-blue">Pesan layanan</a>
          </div>

          <div class="package-service-item bg-white">
            <div class="icon flex">
              <i class="fas fa-comments fa-2x"></i>
            </div>
            <h3>Emergency Case</h3>
            <p class="text text-sm">
              Kami selalu siaga akan situasi darurat yang mungkin akan dialami
              oleh anda dan orang sekitar anda, selama 24/7 kamipun siap untuk
              antar jemput langsung ke rumah anda !
            </p>
            <a href="#" class="btn btn-blue">Pesan layanan</a>
          </div>
        </div>
      </div>
    </section>
    <!-- end of package services section -->

    <!-- posts section -->
    <section id="posts" class="posts py">
      <div class="container">
        <div class="section-head">
          <h2><a href="#">Berita Kesehatan</a></h2>
        </div>
        <div class="posts-inner grid">
          <article class="post-item bg-white">
            <div class="img">
              <img src="images/post-1.jpg" />
            </div>
            <div class="content">
              <h4>
                Inspiring stories of person and family centered care during a
                global pandemic.
              </h4>
              <p class="text text-sm">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Dolor voluptas eius recusandae sunt obcaecati esse facere
                cumque. Aliquid, cupiditate debitis.
              </p>
              <p class="text text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                quia ipsam, quis iure sed nulla.
              </p>
              <div class="info flex">
                <small class="text text-sm"><i class="fas fa-clock"></i> October 27, 2021</small>
                <small class="text text-sm"><i class="fas fa-comment"></i> 5 comments</small>
              </div>
            </div>
          </article>

          <article class="post-item bg-white">
            <div class="img">
              <img src="images/post-2.jpg" />
            </div>
            <div class="content">
              <h4>
                Inspiring stories of person and family centered care during a
                global pandemic.
              </h4>
              <p class="text text-sm">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Dolor voluptas eius recusandae sunt obcaecati esse facere
                cumque. Aliquid, cupiditate debitis.
              </p>
              <p class="text text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                quia ipsam, quis iure sed nulla.
              </p>
              <div class="info flex">
                <small class="text text-sm"><i class="fas fa-clock"></i> October 27, 2021</small>
                <small class="text text-sm"><i class="fas fa-comment"></i> 5 comments</small>
              </div>
            </div>
          </article>

          <article class="post-item bg-white">
            <div class="img">
              <img src="images/post-3.jpg" />
            </div>
            <div class="content">
              <h4>
                Inspiring stories of person and family centered care during a
                global pandemic.
              </h4>
              <p class="text text-sm">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Dolor voluptas eius recusandae sunt obcaecati esse facere
                cumque. Aliquid, cupiditate debitis.
              </p>
              <p class="text text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                quia ipsam, quis iure sed nulla.
              </p>
              <div class="info flex">
                <small class="text text-sm"><i class="fas fa-clock"></i> October 27, 2021</small>
                <small class="text text-sm"><i class="fas fa-comment"></i> 5 comments</small>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>
    <!-- end of posts section -->

    <!-- contact section -->
    <section id="contact" class="contact py">
      <div class="container grid">
        <div class="contact-left">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1034.0293028475362!2d107.56374214267447!3d-6.919369208870208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5faaafdf9af%3A0x6bd6c957eba8f326!2sRumah%20Bersalin%20Melong%20Asih!5e0!3m2!1sid!2sid!4v1683109318426!5m2!1sid!2sid">
            width="600" height="450" style="border: 0" allowfullscreen=""
            loading="lazy" ></iframe>
        </div>
        <div class="contact-right text-white text-center bg-blue">
          <div class="contact-head">
            <h3 class="lead">Kontak Kami</h3>
            <p class="text text-md">
              Pesan sekarang juga ketika anda merasakan sesuatu pada tubuh
              anda atau orang sekitar anda !
            </p>
          </div>
          <form>
            <div class="form-element">
              <input type="text" class="form-control" placeholder="Your name" />
            </div>
            <div class="form-element">
              <input type="email" class="form-control" placeholder="Your email" />
            </div>
            <div class="form-element">
              <textarea rows="5" placeholder="Your Message" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-white btn-submit">
              <i class="fas fa-arrow-right"></i> Send Message
            </button>
          </form>
        </div>
      </div>
    </section>
    <!-- end of contact section -->
  </main>

  <!-- footer  -->
  <footer id="footer" class="footer text-center">
    <div class="container">
      <div class="footer-inner text-white py grid">
        <div class="footer-item">
          <h3 class="footer-head">about us</h3>
          <div class="icon">
            <img src="images/logo-puskesmas.png" />
          </div>
          <p class="text text-md"></p>
          <address>
            Sehat Plus<br />
            jln Sindang Sari no 23 <br />
            RT01/RW26 kecamatan melong<br />
            Cimahi Selatan
          </address>
        </div>

        <div class="footer-item">
          <h3 class="footer-head">tags</h3>
          <ul class="tags-list flex">
            <li>medical care</li>
            <li>emergency</li>
            <li>therapy</li>
            <li>surgery</li>
            <li>medication</li>
            <li>nurse</li>
          </ul>
        </div>

        <div class="footer-item">
          <h3 class="footer-head">Quick Links</h3>
          <ul>
            <li><a href="#" class="text-white">Our Services</a></li>
            <li><a href="#" class="text-white">Our Plan</a></li>
            <li><a href="#" class="text-white">Privacy Policy</a></li>
            <li><a href="#" class="text-white">Appointment Schedule</a></li>
          </ul>
        </div>

        <div class="footer-item">
          <h3 class="footer-head">make an appointment</h3>
          <ul class="appointment-info">
            <li>8:00 AM - 11:00 AM</li>
            <li>2:00 PM - 05:00 PM</li>
            <li>8:00 PM - 11:00 PM</li>
            <li>
              <i class="fas fa-envelope"></i>
              <span>sehatplus@gmail.com</span>
            </li>
            <li>
              <i class="fas fa-phone"></i>
              <span>+62 2678 8906</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="footer-links">
        <ul class="flex">
          <li>
            <a href="#" class="text-white flex">
              <i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a href="#" class="text-white flex">
              <i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="#" class="text-white flex">
              <i class="fab fa-linkedin"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- end of footer  -->

  <!-- custom js -->
  <script src="js/script.js"></script>
</body>

</html>