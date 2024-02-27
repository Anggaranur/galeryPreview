<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail Foto</title>
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
  <link href="assets/css/second.css" rel="stylesheet">

  <!-- =======================================================
  Style in one file
  ======================================================== -->

  <style scoped>
    .add-foto {
      color: white;
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

    .add-foto:hover {
      background-color: green;
      box-shadow: 5px 5px 10px #27a776;
    }

    .photo-container {
      display: flex;
      justify-content: space-between;
      margin-top: 5rem;
      height: 30rem;
      width: 80rem;
    }

    .photo {
      flex: 1;
    }

    .description {
      flex: 1;
      padding: 1rem;
      padding-top: 0;
      margin-left: 2rem;
    }


    .detail-box{
      position: relative;
    }


    .like-button{
      flex: 1;
      margin-left: 15rem;
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

    .img-fluid{
      height: 30rem;
      width: 80rem;
    }

    .hidden{
      display: none;
    }

    .active{
      display: block;
    }

    /* CSS comment on file detail foto */

    .second{
    width: 350px;
    background-color: white;
    border-radius: 4px;
    box-shadow: 10px 10px 5px #aaaaaa;
  }
  .text1{
    font-size: 13px;
      font-weight: 500;
      color: #56575b;
  }
  .text2{
    font-size: 13px;
      font-weight: 500;
      margin-left: 6px;
      color: #56575b;
  }
  .text3{
    font-size: 13px;
      font-weight: 500;
      margin-right: 4px;
      color: #828386;
  }
  .text3o{
    color: #00a5f4;

  }
  .text4{
    font-size: 13px;
      font-weight: 500;
      color: #828386;
  }
  .text4i{
    color: #00a5f4;
  }
  .text4o{
    color: white;
  }
  .thumbup{
    font-size: 13px;
      font-weight: 500;
      margin-right: 5px;
  }
  .thumbup{
    color: #17a2b8;
  }

  .submit-comment{
    border: none;
    border-radius: 0.5rem;
    margin-left: 0.5rem;
  }

  .comment-text {
    overflow: hidden;
    word-wrap: break-word;
}

.comment-body{
  background-color: white;
  padding:1rem;
}
 .comment-user{
  background-color: lightslategray;
  padding:1rem;
  border-radius: 1rem;
 }
  </style>

</head>

<body>

   <?php
  
    include "koneksi.php";
    session_start();
    $_SESSION['userid']=$userid;
   ?>
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
          <li><a href="index.php">Home</a></li>
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
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->


  <main id="main" class="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-start" style="margin-left:2rem;">
          <div class="col-xl-8 col-lg-8 col-md-8">
            <div class="photo-container">
              <div class="photo">
                <?php
                $fotoid=$_GET['fotoid'];
                  $query = mysqli_query($koneksi,"SELECT * FROM foto WHERE fotoid='$fotoid'");
                  $data=mysqli_fetch_array($query);
                  $lokasi_file = $data['lokasifile'];
                  $judul = $data['judulfoto'];
                  $tanggalunggah = $data['tanggalunggah'];
                  $deskripsifoto = $data['deskripsifoto'];
                ?>
                <img src="./assets/img/foto/<?php echo $lokasi_file ?>" class="img-fluid" alt="detail foto" style="border-radius:1.5rem;">
              </div>
              <div class="description">
                <h2><?php echo $judul ?></h2> 
                <p>Tanggal upload : <?php echo $tanggalunggah ?></p>
                <p>Deskripsi : <?php echo $deskripsifoto ?> </p> 
                
              </div>
            </div>
            <div class="detail-box">
              <!-- Like Button -->
             <div>
              <button class="like-button">
                <svg class="like" width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20.9752 12.1852L20.2361 12.0574L20.9752 12.1852ZM20.2696 16.265L19.5306 16.1371L20.2696 16.265ZM6.93777 20.4771L6.19056 20.5417L6.93777 20.4771ZM6.12561 11.0844L6.87282 11.0198L6.12561 11.0844ZM13.995 5.22142L14.7351 5.34269V5.34269L13.995 5.22142ZM13.3323 9.26598L14.0724 9.38725V9.38725L13.3323 9.26598ZM6.69814 9.67749L6.20855 9.10933H6.20855L6.69814 9.67749ZM8.13688 8.43769L8.62647 9.00585H8.62647L8.13688 8.43769ZM10.5181 4.78374L9.79208 4.59542L10.5181 4.78374ZM10.9938 2.94989L11.7197 3.13821V3.13821L10.9938 2.94989ZM12.6676 2.06435L12.4382 2.77841L12.4382 2.77841L12.6676 2.06435ZM12.8126 2.11093L13.042 1.39687L13.042 1.39687L12.8126 2.11093ZM9.86195 6.46262L10.5235 6.81599V6.81599L9.86195 6.46262ZM13.9047 3.24752L13.1787 3.43584V3.43584L13.9047 3.24752ZM11.6742 2.13239L11.3486 1.45675V1.45675L11.6742 2.13239ZM3.9716 21.4707L3.22439 21.5353L3.9716 21.4707ZM3 10.2342L3.74721 10.1696C3.71261 9.76945 3.36893 9.46758 2.96767 9.4849C2.5664 9.50221 2.25 9.83256 2.25 10.2342H3ZM20.2361 12.0574L19.5306 16.1371L21.0087 16.3928L21.7142 12.313L20.2361 12.0574ZM13.245 21.25H8.59635V22.75H13.245V21.25ZM7.68498 20.4125L6.87282 11.0198L5.3784 11.149L6.19056 20.5417L7.68498 20.4125ZM19.5306 16.1371C19.0238 19.0677 16.3813 21.25 13.245 21.25V22.75C17.0712 22.75 20.3708 20.081 21.0087 16.3928L19.5306 16.1371ZM13.2548 5.10015L12.5921 9.14472L14.0724 9.38725L14.7351 5.34269L13.2548 5.10015ZM7.18773 10.2456L8.62647 9.00585L7.64729 7.86954L6.20855 9.10933L7.18773 10.2456ZM11.244 4.97206L11.7197 3.13821L10.2678 2.76157L9.79208 4.59542L11.244 4.97206ZM12.4382 2.77841L12.5832 2.82498L13.042 1.39687L12.897 1.3503L12.4382 2.77841ZM10.5235 6.81599C10.8354 6.23198 11.0777 5.61339 11.244 4.97206L9.79208 4.59542C9.65573 5.12107 9.45699 5.62893 9.20042 6.10924L10.5235 6.81599ZM12.5832 2.82498C12.8896 2.92342 13.1072 3.16009 13.1787 3.43584L14.6307 3.05921C14.4252 2.26719 13.819 1.64648 13.042 1.39687L12.5832 2.82498ZM11.7197 3.13821C11.7548 3.0032 11.8523 2.87913 11.9998 2.80804L11.3486 1.45675C10.8166 1.71309 10.417 2.18627 10.2678 2.76157L11.7197 3.13821ZM11.9998 2.80804C12.1345 2.74311 12.2931 2.73181 12.4382 2.77841L12.897 1.3503C12.3873 1.18655 11.8312 1.2242 11.3486 1.45675L11.9998 2.80804ZM14.1537 10.9842H19.3348V9.4842H14.1537V10.9842ZM4.71881 21.4061L3.74721 10.1696L2.25279 10.2988L3.22439 21.5353L4.71881 21.4061ZM3.75 21.5127V10.2342H2.25V21.5127H3.75ZM3.22439 21.5353C3.2112 21.3828 3.33146 21.25 3.48671 21.25V22.75C4.21268 22.75 4.78122 22.1279 4.71881 21.4061L3.22439 21.5353ZM14.7351 5.34269C14.8596 4.58256 14.8241 3.80477 14.6307 3.0592L13.1787 3.43584C13.3197 3.97923 13.3456 4.54613 13.2548 5.10016L14.7351 5.34269ZM8.59635 21.25C8.12244 21.25 7.72601 20.887 7.68498 20.4125L6.19056 20.5417C6.29852 21.7902 7.3427 22.75 8.59635 22.75V21.25ZM8.62647 9.00585C9.30632 8.42 10.0392 7.72267 10.5235 6.81599L9.20042 6.10924C8.85404 6.75767 8.3025 7.30493 7.64729 7.86954L8.62647 9.00585ZM21.7142 12.313C21.9695 10.8365 20.8341 9.4842 19.3348 9.4842V10.9842C19.9014 10.9842 20.3332 11.4959 20.2361 12.0574L21.7142 12.313ZM3.48671 21.25C3.63292 21.25 3.75 21.3684 3.75 21.5127H2.25C2.25 22.1953 2.80289 22.75 3.48671 22.75V21.25ZM12.5921 9.14471C12.4344 10.1076 13.1766 10.9842 14.1537 10.9842V9.4842C14.1038 9.4842 14.0639 9.43901 14.0724 9.38725L12.5921 9.14471ZM6.87282 11.0198C6.8474 10.7258 6.96475 10.4378 7.18773 10.2456L6.20855 9.10933C5.62022 9.61631 5.31149 10.3753 5.3784 11.149L6.87282 11.0198Z" fill="black"></path> </g></svg>
              </button>
              <!-- Comment Button -->
              <button class="comment-button"
              onclick="message();">
              <svg class="comment" width="28px" height="28px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>comment-3</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-204.000000, -255.000000)" fill="#000000"> <path d="M228,267 C226.896,267 226,267.896 226,269 C226,270.104 226.896,271 228,271 C229.104,271 230,270.104 230,269 C230,267.896 229.104,267 228,267 L228,267 Z M220,281 C218.832,281 217.704,280.864 216.62,280.633 L211.912,283.463 L211.975,278.824 C208.366,276.654 206,273.066 206,269 C206,262.373 212.268,257 220,257 C227.732,257 234,262.373 234,269 C234,275.628 227.732,281 220,281 L220,281 Z M220,255 C211.164,255 204,261.269 204,269 C204,273.419 206.345,277.354 210,279.919 L210,287 L217.009,282.747 C217.979,282.907 218.977,283 220,283 C228.836,283 236,276.732 236,269 C236,261.269 228.836,255 220,255 L220,255 Z M212,267 C210.896,267 210,267.896 210,269 C210,270.104 210.896,271 212,271 C213.104,271 214,270.104 214,269 C214,267.896 213.104,267 212,267 L212,267 Z M220,267 C218.896,267 218,267.896 218,269 C218,270.104 218.896,271 220,271 C221.104,271 222,270.104 222,269 C222,267.896 221.104,267 220,267 L220,267 Z" id="comment-3" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
              </button>
            </div>
            <p style="margin-left:16rem; display:inline;">0</p>
            <p style="margin-left:3.2rem; display:inline;">0</p>
          </div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- Comment Section -->
    <?php

    // Query ke database untuk mendapatkan username berdasarkan user ID
    // $query_user = mysqli_query($koneksi, "SELECT username FROM user WHERE userid = '$userid'");
    // $data_user = mysqli_fetch_assoc($query_user);
    // $username = $data_user['username'];

    // Tampilkan komentar bersama dengan username dan tanggal
    ?>
    <section id="comment" class="container py-5 hidden" class="comment">
        <!-- Add Comment Form -->
        <form class="add-comment-form mb-4" action="tambahkomentar.php" method="POST">
            <div class="input-group">
                <!-- <input type="date" style="border:none; background-color:white;"> -->
                <input type="hidden" name="userid" value="<?php echo $userid;?>">
                <input type="hidden" name="fotoid" value="<?php echo $fotoid;?>">
                <input type="text" name="isikomentar" class="form-control" placeholder="Add a comment" aria-label="Add a comment" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="submit" id="button-addon2">Kirim</button>
            </div>
        </form>
        <!-- End Add Comment Form -->

        <!-- Comment List -->
        <div class="comment-list">
            <!-- Sample Comment -->
            <div class="comment">
                <div class="comment-body">
                    <div class="comment-user">

                    <div name='isi-komentar'>
                      <?php
                      $komen = mysqli_query($koneksi, "select*from komentarfoto k JOIN user u ON k.userid=u.userid where fotoid='$fotoid'");
                      while ($data = mysqli_fetch_array($komen)) {
                      ?>
                        <span class="comment-author"> User : <?php echo $username; ?>
                        <span class="comment-date"><?php echo isset($data['tanggalkomentar']) ? $data['tanggalkomentar'] : date('Y-m-d'); ?></span>
                        <p class="comment-text mt-4"><?php echo isset($data['isikomentar']) ? $data['isikomentar'] : ''; ?></p>
                      <?php }?>
                    </div>
                    </div>
                </div>
            </div>
            <!-- End Sample Comment -->

            <!-- You can dynamically append new comments here using JavaScript -->
        </div>
        <!-- End Comment List -->
    </section>
    <!-- End Comment Section -->


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

  <!-- On File JS -->
  <script>
  function message() {
    let commentBox = document.getElementById('comment');
        commentBox.classList.toggle('active');
    }

  </script>
</body>

</html>
