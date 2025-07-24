<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>LKPD Generator PhET</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Feb 22 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.php" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.webp" alt=""> -->
                <h1 class="sitename">LKPDgen</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Jenjang</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>SD</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Kelas 1</a></li>
                                    <li><a href="#">Kelas 2</a></li>
                                    <li><a href="#">Kelas 3</a></li>
                                    <li><a href="#">Kelas 4</a></li>
                                    <li><a href="#">Kelas 5</a></li>
                                    <li><a href="#">Kelas 6</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>SMP</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Kelas 7</a></li>
                                    <li><a href="#">Kelas 8</a></li>
                                    <li><a href="#">Kelas 9</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>SMA</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Kelas 10</a></li>
                                    <li><a href="#">Kelas 11</a></li>
                                    <li><a href="#">Kelas 12</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about.php">About</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Galeri Dokumen</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body class="bg-gray-100 p-6">
<section id="hero" class="dark-background">

<!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>LKPD</h2>
  </div><!-- End Section Title -->

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">

    <?php
$folder = 'upload/pecahan/';
$files = glob($folder . "*.pdf");

foreach ($files as $file):
  $filename = basename($file);
?>
<div class="bg-white shadow-md rounded-lg overflow-hidden">
  <img src="assets/pdf/cover1.png" class="w-full h-48 object-cover" alt="PDF Cover" />
  <div class="p-4">
    <h2 class="font-semibold text-black text-lg mb-2"><?= htmlspecialchars($filename) ?></h2>
    <div class="flex justify-between items-center">
      <a href="<?= $file ?>" target="_blank" class="text-blue-600 hover:underline">Lihat PDF</a>
      <a href="<?= $file ?>" download class="text-gray-600 hover:text-black text-xl">
        <i class="fas fa-download"></i>
      </a>
    </div>
  </div>
</div>
<?php endforeach; ?>


    <!-- Tambahkan card lainnya sesuai kebutuhan -->

  </div>
</section>


 
  <footer id="footer" class="footer">


    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Arsha</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Ciwaru Raya</p>
            <p>Serang, Banten</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 8781 0661 807</span></p>
            <p><strong>Email:</strong> <span>lkpdgen@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="about.php">About us</a></li>
          </ul>
        </div>


        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Ikuti kami di media sosial untuk mendapatkan update terbaru</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">LKPDgen</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>