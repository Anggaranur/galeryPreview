<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <!-- Logo Tab -->
  <link rel="icon" type="image" href="./assets/img/m.png" sizes="100%">
  
  <title>Pixel Lens</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="output.css">

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
  <link href="assets/css/main.css" rel="stylesheet">

  
</head>

<body>



  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="transform transition-transform hover:scale-90"><i class="bi bi-camera"></i></i>
        <h1 class="transform transition-transform hover:scale-90">Pixel Lens</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="login.php" class="hover:underline duration-1100">Album</a></li>
          <li class="dropdown"><a href="login.php"><span class="hover:underline duration-1100">Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="login.php">Nature</a></li>
              <li><a href="login.php">People</a></li>
              <li><a href="login.php">Architecture</a></li>
              <li><a href="login.php">Animals</a></li>
              <li><a href="login.php">Sports</a></li>
              <li><a href="login.php">Travel</a></li>
            </ul>
          <li><a href="login.php" class="hover:underline duration-1100">Contact</a></li>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="login.php"><p>Login</p><a>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="">I'm <span>M. Anggara Nur Akbar</span> a Professional Photographer from Kediri City</h2>
          <p class="hover:text-[#27A776] duration-700">Saya fotografer profesional dengan keahlian dalam menangkap momen berkesan. Dedikasi penuh untuk menciptakan gambar visual yang memukau dan bermakna.</p>
          <a href="contact.php" class="btn-get-started hover:bg-black">Available for hire</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

  <!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
  <div class="container-fluid">
    <div class="row gy-4 justify-content-center">
      <?php
        // Periksa apakah query telah dilakukan sebelumnya
        if(isset($query)) {
            // Lakukan loop untuk menampilkan setiap foto
            while($data = mysqli_fetch_array($query)){
                // Ambil foto dari hasil query
                $foto = $data['lokasifile'];
      ?>

      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="./assets/img/foto/<?php echo $foto; ?>" class="img-fluid" alt="<?php echo $data['judul']; ?>">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="./assets/img/foto/<?php echo $foto; ?>" title="<?php echo $data['judul']; ?>" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->

      <?php 
            }
        } else {
            echo "Tidak ada foto yang tersedia.";
        }
      ?>
    </div>
  </div>
</section><!-- End Gallery Section -->


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
        Designed by <a href="https://bootstrapmade.com/">M.Anggara Nur Akbar8</a>
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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>