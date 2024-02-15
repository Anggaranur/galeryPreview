<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah Album</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Logo Tab -->
  <link rel="icon" type="image/jpg" href="https://img.freepik.com/free-vector/slr-camera-grunge-tshirt-design-hand-drawn-sketch-vector-illustration_460848-14467.jpg">
  
  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link href="./assets/css/second.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- Session Process -->
    <?php
      session_start() ;
      $userid = $_SESSION['userid'] ;
    ?>
    <!-- End Session Process -->

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="indexlogin.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="transform transition-transform hover:scale-90"><i class="bi bi-camera"></i></i>
        <h1 class="transform transition-transform hover:scale-90">Pixel Lens</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="indexlogin.php">Home</a></li>
          <li><a href="album.php">Album</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="gallery.html">Nature</a></li>
              <li><a href="gallery.html">People</a></li>
              <li><a href="gallery.html">Architecture</a></li>
              <li><a href="gallery.html">Animals</a></li>
              <li><a href="gallery.html">Sports</a></li>
              <li><a href="gallery.html">Travel</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="indexlogin.php"><p>Selamat Datang</p><a>
        <a href="index.php"><p>Logout</p><a>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Album</h2>
            <p>Tambahkan Album Baru.</p>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center mt-4">

      <div class="col-lg-9">

         <?php
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan']=="tambahsukses"){?>
                            <div class="alert alert-success" role="alert">
                                <svg class="centang" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M12 21a9 9 0 0 0 7.51-13.961l-7.155 7.95a2 2 0 0 1-2.687.262L6.4 12.8a1 1 0 0 1 1.2-1.6l3.268 2.451l7.346-8.161A9 9 0 1 0 12 21" clip-rule="evenodd"/></svg><p style="display:inline; position:absolute; top:15rem;">Tambah Album Berhasil<p>
                            </div>
         <?php
                        }elseif ($_GET['pesan']=="tambahgagal") {?>
                            <div class="alert alert-danger" role="alert">
                                <svg class="gagal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2m4.207 12.793l-1.414 1.414L12 13.414l-2.793 2.793l-1.414-1.414L10.586 12L7.793 9.207l1.414-1.414L12 10.586l2.793-2.793l1.414 1.414L13.414 12z"/></svg><p style="display:inline; position:absolute; top:15rem;">Tambah Album Gagal<p>
                            </div>
          <?php
                        }
                    }
          ?>
         <form action="prosestambahalbum.php" method="POST" role="form" class="php-email-form">
             <div class="row">
                <!-- untuk sesion user -->
                <input type="hidden" name="userid" value="<?php echo "$userid"; ?>">
                <!-- end user session -->
              </div>
              
            <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input style="width: 60rem;" type="date" class="form-box" name="tanggaldibuat" id="date" required>
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-box" name="namaalbum" id="title" placeholder="Tambahkan Judul Album" required>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-box" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi Album Anda" required></textarea>
            </div>
            <button type="submit">Tambahkan Album</button>
         </form>
      </div><!-- End Contact Form -->


        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Pixel Lens</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">M. Anggara Nur Akbar</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>