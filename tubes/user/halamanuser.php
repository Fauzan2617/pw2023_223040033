 <?php
  session_start();
  require("../functions.php");

  // Mengambil data dari session
  $id = $_SESSION["id"];

  $user = mysqli_query($conn, "SELECT * FROM user WHERE id = $id ");
  $row = mysqli_fetch_assoc($user);

  $username = $row["username"];
  $email = $row["email"];
  $alamat = $row["alamat"];
  $nomor_telepon = $row["nomor_telepon"];


  if (!isset($_SESSION["login"])) {
    header("Location:../Log dan Regis/authentication-login.php ");
    exit;
  }

  ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>Profil</title>
   <link rel="icon" a href="../Main Web/images/logo-puskesmas.png" />
   <!-- Bootstrap CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />

   <style>
     .color-ubah {
       color: white;
     }
   </style>

   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>

 <body>
   <!-- HEADER START -->
   <header class="bg-black shadow sticky-top">
     <div class="container d-flex flex-wrap justify-content-between py-2 text-light">
       <a href="../Main Web/index.php" class="text-decoration-none color-ubah"> <strong> <span class=""> Beranda</span></strong></a>

       <div>

         <?php echo "<b> $username </b>" ?>
         <a href="logout.php" class="link-warning text-decoration-none fw-bold ms-2">
           <i class="fa-solid fa-sign-out"></i>
           Keluar
         </a>
       </div>
     </div>
   </header>
   <!-- HEADER END -->
   <b></b>
   <!-- CONTENT START -->
   <section>
     <!-- .container start -->
     <div class="container py-5">
       <!-- .row start -->
       <div class="row">
         <!-- .col start -->

         <div class="col-lg-4">
           <div class="card text-center p-5">
             <div class="card-body">
               <img src="../images/image.png" alt="Profil Picture" class="img img-thumbnail rounded-circle w-50" />
               <h2><?php echo $username; ?></h2>

               <button class="btn btn-success btn-sm ">
                 <?php foreach ($user as $us) : ?>
                   <i class="fa-solid fa-pencil me-1"></i> <a href="dashboarduser.php?id=<?= $us["id"]; ?>" class="text-decoration-none"> <span class="color-ubah">Ubah Profil</span>
                   <?php endforeach; ?></a></button>
             </div>
           </div>
         </div>

         <!-- .col end -->

         <!-- .col start -->
         <div class="col-lg-8">


           <div class="shadow border rounded p-5 mb-5">
             <h2>Informasi Kontak</h2>

             <!-- .row start -->
             <div class="row">
               <!-- .col start -->
               <div class="col-lg-6">
                 <p class="card-text">
                   <span class="text-muted mb-1 d-block">Alamat </span>

                   <i class="fa-solid fa-map me-2 text-success"></i>

                   <?php echo $alamat; ?>
                 </p>
                 <!-- alamat end -->

                 <p class="card-text">
                   <span class="text-muted mb-1 d-block">Alamat Email</span>

                   <i class="fa-solid fa-envelope me-2 text-success"></i>
                   <?php echo $email; ?>
                 </p>
                 <!-- alamat email end -->

                 <p class="card-text">
                   <span class="text-muted mb-1 d-block">Nomor Telepon</span>
                   <i class="fa-solid fa-phone me-2 text-success"></i> +62
                   <?php echo $nomor_telepon; ?>
                 </p>
                 <!-- nomor telepon end -->

               </div>
               <!-- .col end -->

               <!-- .col start -->
               <div class="col-lg-6">
                 <div>Ikuti saya di :</div>

                 <a href="https://github.com/janzenfaidiban" target="_blank" class="text-decoration-none link-success fs-2">
                   <i class="fa-brands fa-github"></i>
                 </a>

                 <a href="https://instagram.com/janzen.faidiban" target="_blank" class="text-decoration-none link-success fs-2">
                   <i class="fa-brands fa-instagram"></i>
                 </a>

                 <a href="https://facebook.com/" target="_blank" class="text-decoration-none link-success fs-2">
                   <i class="fa-brands fa-facebook"></i>
                 </a>

                 <a href="https://youtube.com/" target="_blank" class="text-decoration-none link-success fs-2">
                   <i class="fa-brands fa-youtube"></i>
                 </a>

                 <a href="https://linkedin.com/" target="_blank" class="text-decoration-none link-success fs-2">
                   <i class="fa-brands fa-linkedin"></i>
                 </a>
               </div>
               <!-- .col end -->
             </div>
             <!-- .row end -->
           </div>
         </div>
         <!-- .col end -->
       </div>
       <!-- .row end -->
     </div>
     <!-- .container end -->
   </section>
   <!-- CONTENT END -->


 </body>

 </html>