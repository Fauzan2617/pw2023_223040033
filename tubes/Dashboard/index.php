<?php
session_start();
require("../functions.php");
checkAuthorization('admin');

$datauser = query("SELECT * FROM user");
$obat = query("SELECT * FROM obat");
$obat1 = mysqli_query($conn, "SELECT * FROM obat ");
$userid = mysqli_query($conn, "SELECT * FROM user ");


$row = mysqli_fetch_assoc($obat1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin</title>
  <link rel="icon" a href="images/logo-puskesmas.png" />

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
  <script src="js/main.js"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <section class="header">
    <div class="logo">
      <i class="ri-menu-line icon icon-0 menu"></i>
      <h2>Sehat<span>Plus</span></h2>
    </div>
    <div class="search--notification--profile">
      <div class="search">
        <input type="text" placeholder="Search Scdule.." />
        <button><i class="ri-search-2-line"></i></button>
      </div>
      <div class="notification--profile">
        <div class="picon lock">
          <i class="ri-lock-line"></i>
        </div>
        <div class="picon bell">
          <i class="ri-notification-2-line"></i>
        </div>
        <div class="picon chat">
          <i class="ri-wechat-2-line"></i>
        </div>
        <div class="picon profile">
          <img src="images/profil.jpeg" alt="" />
        </div>
      </div>
    </div>
  </section>
  <section class="main">
    <div class="sidebar">
      <ul class="sidebar--items">
        <li>
          <a href="#" id="active--link">
            <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
            <span class="sidebar--item">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="pdf.php">
            <span class="icon icon-2"><i class="ri-calendar-2-line"></i></span>
            <span class="sidebar--item">Reporting PDF</span>
          </a>
        </li>
        <li>
          <a href="../index.php">
            <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
            <span class="sidebar--item" style="white-space: nowrap">Index Web</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon icon-4"><i class="ri-user-line"></i></span>
            <span class="sidebar--item">Patients</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon icon-5"><i class="ri-line-chart-line"></i></span>
            <span class="sidebar--item">Activity</span>
          </a>
        </li>
      </ul>
      <ul class="sidebar--bottom-items">
        <li>


        </li>
        <li>
          <a href="../user/logout.php">
            <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
            <span class="sidebar--item">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main--content" id="data-wrapper">
      <div class="overview">
        <div class="title">
          <h2 class="section--title">Overview</h2>
          <select name="date" id="date" class="dropdown">
            <option value="today">Today</option>
            <option value="lastweek">Last Week</option>
            <option value="lastmonth">Last Month</option>
            <option value="lastyear">Last Year</option>
            <option value="alltime">All Time</option>
          </select>
        </div>
        <div class="cards">
          <div class="card card-1">
            <div class="card--data">
              <div class="card--content">
                <h5 class="card--title">Total Doctors</h5>
                <h1>152</h1>
              </div>
              <i class="ri-user-2-line card--icon--lg"></i>
            </div>
            <div class="card--stats">
              <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
              <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
              <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
            </div>
          </div>
          <div class="card card-2">
            <div class="card--data">
              <div class="card--content">
                <h5 class="card--title">Total Patients</h5>
                <h1>1145</h1>
              </div>
              <i class="ri-user-line card--icon--lg"></i>
            </div>
            <div class="card--stats">
              <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>82%</span>
              <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>230</span>
              <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>45</span>
            </div>
          </div>
          <div class="card card-3">
            <div class="card--data">
              <div class="card--content">
                <h5 class="card--title">Schedule</h5>
                <h1>102</h1>
              </div>
              <i class="ri-calendar-2-line card--icon--lg"></i>
            </div>
            <div class="card--stats">
              <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>27%</span>
              <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>31</span>
              <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>23</span>
            </div>
          </div>
          <div class="card card-4">
            <div class="card--data">
              <div class="card--content">
                <h5 class="card--title">Beds Available</h5>
                <h1>15</h1>
              </div>
              <i class="ri-hotel-bed-line card--icon--lg"></i>
            </div>
            <div class="card--stats">
              <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>8%</span>
              <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>11</span>
              <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
            </div>
          </div>
        </div>
      </div>

      <div class="doctors" id="data-table">
        <div class="title">
          <h2 class="section--title">ObatShop</h2>
          <div class="doctors--right--btns">
            <select name="date" id="date" class="dropdown doctor--filter">
              <option>Filter</option>
              <option value="free">Free</option>
            </select>
            <a href="tambahobat.php"> <button class="add"><i class="ri-add-line"></i>Add ListObat</button></a>
          </div>
        </div>


        <div class="table2 table">
          <div class="doctors--cards">
            <?php foreach ($obat as $ob) : ?>
              <a href="ubahobat.php?id=<?= $ob["id"]; ?>" class="doctor--card">
                <div class="img--box--cover">
                  <div class="img--box">
                    <img src="../Main Web/img-obat/<?= $ob["gambar"]; ?>" alt="" />
                  </div>
                </div>
                <p class="scheduled"><?= $ob["judul"]; ?></p>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
      <div class="recent--patients">
        <div class="title">
          <h2 class="section--title">Data user</h2>
          <button class="add" type="submit" onclick="generatePDF()"><i class="ri-file-pdf-fill"></i>Reporting PDF</button>

        </div>
        <div class="table">
          <table id="invoice">
            <thead>
              <tr>
                <th>Name</th>
                <th>alamat</th>
                <th>email</th>
                <th>nomor_telepon</th>
                <th>Status</th>
                <th>Settings</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($datauser as $user) : ?>
                <tr>
                  <td><?= $user["username"]; ?></td>
                  <td><?= $user["alamat"]; ?></td>
                  <td><?= $user["email"]; ?></td>
                  <td><?= $user["nomor_telepon"]; ?></td>

                  <td class="pending">pending</td>
                  <td>
                    <a href="hapus.php?id=<?= $user["id"]; ?> " onclick="return confirm('yakin?');"> <span><i class="ri-delete-bin-line delete"></i></span></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>


</body>
<script>
  let menu = document.querySelector(".menu");
  let sidebar = document.querySelector(".sidebar");
  let mainContent = document.querySelector(".main--content");

  menu.onclick = function() {
    sidebar.classList.toggle("active");
    mainContent.classList.toggle("active");
  };

  function generatePDF() {
    const element = document.getElementById("invoice");

    html2pdf().from(element).save();
  }
</script>

</html>