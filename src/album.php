<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Koleksi Album</title>
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
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  Style in one file
  ======================================================== -->

  <style scoped>
.add-album {
    color: white;
    background-color: #27a776;
    padding: 1rem;
    font-weight: bold;
    font-size: 20px;
    font-family: Arial;
    border: none;
    border-radius: 0.5rem;
    margin: 2rem auto; /* Menengahkan button secara horizontal dan memberikan margin atas/bawah */
    transition: background-color 0.5s, box-shadow 0.5s, opacity 0.5s;
}

.add-album:hover {
  background-color: green;
  box-shadow: 5px 5px 10px #27a776;
}

.add-album:active{
  opacity: 0.6;
}

.title-album{
  font-size: 18px;
}

   
  </style>

</head>

<body>

  <!-- Session Process Album Card -->
    <?php
      session_start();
      include "koneksi.php";
      $userid = $_SESSION['userid'];
    ?>
  <!-- End SessionProcess Album Card -->

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="album.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="transform transition-transform hover:scale-90"><i class="bi bi-camera"></i></i>
        <h1 class="transform transition-transform hover:scale-90">Pixel Lens</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="indexlogin.php">Home</a></li>
          <li><a href="album.php" class="active">Album</a></li>
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
        <?php
          $query_user = mysqli_query($koneksi, "SELECT * FROM user WHERE userid ='$userid'");
          $data_user = mysqli_fetch_assoc($query_user); 
          $username = $data_user['username'];
        ?>
        <a href="indexlogin.php"><p>Selamat Datang <?php echo $username; ?></p><a>
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
            <p>Pencinta seni lensa, saya menciptakan cerita visual melalui fotografi. Kreatif, penuh dedikasi, dan berfokus pada keindahan setiap momen.</p>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2>Professional Photographer from Kediri</h2>
            <p class="fst-italic py-3">
            Pencipta kisah visual. Fotografer berjiwa kreatif dengan fokus pada keindahan dan makna dalam setiap momen yang terabadikan.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>17 Jan 2005</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>https://kimo-six.vercel.app/</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 85735532113</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Kediri, Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>m.anggaranurakbar@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
            <p class="m-0">
              Recusandae est praesentium consequatur eos voluptatem. Vitae dolores aliquam itaque odio nihil. Neque ut neque ut quae voluptas. Maxime corporis aut ut ipsum consequatur. Repudiandae sunt sequi minus qui et. Doloribus molestiae officiis.
              Soluta eligendi fugiat omnis enim. Numquam alias sint possimus eveniet ad. Ratione in earum eum magni totam.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Hasil</h2>
          <p>Koleksi kami</p>
        </div>


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  <!-- Tambah Add Album -->
  <div class="text-center"> <!-- Tambah class 'text-center' di sini -->
      <a href="tambahalbum.php"><button class="add-album">Tambah Album</button></a>
  </div>

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container-fluid">

      <div class="row gy-4 justify-content-center">
        <?php
          $query = mysqli_query($koneksi, "SELECT * FROM album WHERE userid ='$userid'");
          while($data = mysqli_fetch_array($query)){
        ?>

        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="https://img.freepik.com/premium-vector/gallery-icon-picture-landscape-vector-sign-symbol_660702-412.jpg?" class="img-fluid" alt="album name....">
            <div class="gallery-links d-flex align-items-center justify-content-center">
            <a class="cta-btn" href="foto.php?albumid=<?php echo $data['albumid']; ?>">Lihat Foto</a>
            </div>
            <!-- Tambahkan class 'text-center' untuk pusatkan judul -->
            <h1 class="title-album text-center" style="margin-top:2rem;"><?php echo $data['namaalbum']; ?></h1>
          </div>
        </div><!-- End Gallery Item -->
        <?php } ?>
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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>