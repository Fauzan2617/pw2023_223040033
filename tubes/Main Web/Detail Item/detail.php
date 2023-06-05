<?php
session_start();

require("../../functions.php");

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$detail = query("SELECT * FROM obat WHERE id = $id")[0];

if (!isset($_SESSION["login"])) {
  header("Location:../../Log dan Regis/authentication-login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Sehat plus-Product</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../css/detail.css" />
  <link rel="icon" a href="../images/logo-puskesmas.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>
  <div class="card-wrapper">
    <div class="card">
      <!-- card left -->
      <div class="product-imgs">
        <div class="img-display">
          <div class="img-showcase">
            <img src="../img-obat/<?= $detail["gambar"]; ?>" alt="shoe image" />
            <img src="" alt="shoe image" />
          </div>
        </div>
      </div>
      <!-- card right -->

      <div class="product-content">
        <h2 class="product-title"><?= $detail["judul"]; ?></h2>
        <a href="#" class="product-link">visit ObatShop</a>
        <div class="product-rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>4.7(21)</span>
        </div>

        <div class="product-price">
          <p class="new-price">New Price: <span>Rp<?= $detail["harga"]; ?></span></p>
        </div>

        <div class="product-detail">
          <h2>Deskripsi:</h2>
          <p>
            <?= $detail["deskripsi"]; ?>
          </p>

        </div>

        <div class="purchase-info">
          <input type="number" min="0" value="1" />
          <button type="button" class="btn">
            Add to Cart <i class="fas fa-shopping-cart"></i>
          </button>
          <button type="button" class="btn">Compare</button>
        </div>

        <div class="social-links">
          <p>Share At:</p>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/detail.js"></script>
</body>

</html>