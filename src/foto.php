<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Koleksi Foto</title>
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
    .add-foto{
      color:white;
      background-color: #27a776;
      padding: 1rem;
      font-weight: bold;
      font-size: 20px;
      font-family: Arial;
      border: none;
      border-radius: 0.5rem;
      margin-left: 42.5rem;
      margin-bottom: 2rem;
      margin-top: 2rem;
      transition: background-color 0.5s, box-shadow 0.5s;
    }

    .add-foto:hover{
      background-color: green;
      box-shadow: 5px 5px 10px #27a776;
    }

    .like-button{
      flex: 1;
      margin-left: 16rem;
      margin-top: 1rem;
      border: none;
      padding: 0.5rem;
      border-radius: 100%;
      transition: background-color 0.3s, opacity 0.3s;
    }

    .like-button:hover{
      background-color: lightgreen;
    }

    .like-button:active{
      opacity: 0.8;
    }
    
    .comment-button{
      flex: 1;
      margin-left: 1rem;
      margin-top: 1rem;
      border: none;
      padding: 0.5rem;
      border-radius: 100%;
      transition: background-color 0.3s, opacity 0.3s;
    }

    .comment-button:hover{
      background-color: lightblue;
    }

    .comment-button:active{
      opacity: 0.8;
    }

  </style>

</head>

<body>
    
    <!-- Session Process Album Card -->
    <?php
      session_start();
      include "koneksi.php";
      $userid = $_SESSION['userid'];

      // Ambil album ID dari URL jika tersedia
      if(isset($_GET['albumid'])) {
          $albumid = $_GET['albumid'];

          // Lakukan sanitasi pada variabel albumid untuk mencegah SQL injection
          $albumid = mysqli_real_escape_string($koneksi, $albumid);

          // Query SQL untuk mengambil foto dari album yang dipilih
          $query = mysqli_query($koneksi, "SELECT * FROM foto WHERE userid ='$userid' AND albumid='$albumid'");
      }
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
          <li><a href="index.php">Home</a></li>
          <li><a href="profile.php" >Album</a></li>
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
            <h2>Foto Album Name</h2>
            <p>Pencinta seni lensa, saya menciptakan cerita visual melalui fotografi. Kreatif, penuh dedikasi, dan berfokus pada keindahan setiap momen.</p>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

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
    <a href="tambahfoto.php?albumid=<?php echo $_GET['albumid'];?>"><button class="add-foto">Tambah Foto</button></a>
    <!-- End  Add Album  -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery mb-5">
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 gy-4">
      <?php
        // Periksa apakah query telah dilakukan sebelumnya
        if(isset($query)) {
            // Lakukan loop untuk menampilkan setiap foto
            $count = 0; // Variabel untuk menghitung jumlah foto yang ditampilkan
            while($data = mysqli_fetch_array($query)){
                // Ambil foto dari hasil query
                $foto = $data['lokasifile'];
      ?>

      <div class="col mb-4"> <!-- Tambahkan kelas mb-4 untuk memberikan margin-bottom -->
        <div class="gallery-item h-100">
          <img src="./assets/img/foto/<?php echo $foto; ?>" class="img-fluid" alt="foto name....">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a class="cta-btn" href="detailfoto.php?fotoid=<?php echo $data['fotoid']; ?>">Lihat Detail Foto</a>
          </div>
          <h5 class="text-center mt-3"><?php echo $data['judulfoto']; ?></h5>
        </div>
      </div><!-- End Gallery Item -->

      <?php 
                $count++; // Menambahkan jumlah foto yang ditampilkan
                // Jika jumlah foto yang ditampilkan sudah mencapai 4, maka tutup baris dan buka baris baru
                if ($count % 4 == 0) {
                    echo '</div><div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 gy-4">';
                }
            }
        } else {
            echo "Album ID tidak tersedia atau user belum login";
        }
      ?>
    </div>
  </div>
</section><!-- End Gallery Section -->






   

  </main> <!-- End #main -->

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
