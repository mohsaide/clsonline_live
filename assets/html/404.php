<?php 
session_start(); 
if (!empty($_SESSION)) {
  session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CLS - 404 Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../img/logo.jpg" rel="icon">

  <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../vendor/aos/aos.css" rel="stylesheet">
  <link href="../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Custom Css Files -->
  <link href="../css/land_main.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/land_404.css" />


</head>

<body>


  <header id="header" class="header d-flex align-items-center ">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="../../index.php" class="logo d-flex align-items-center">

        <h1>CLS<span>.</span></h1>
      </a>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  <main id="main">

    <section class="sample-page" >
      <div class="container" data-aos="fade-up">
        
        
      	<div id="notfound" >
          <div class="notfound">
            <div class="notfound-404">
              <h3>Oops! Page not found</h3>
              <h1><span>4</span><span>0</span><span>4</span></h1>
            </div>
            <h2>we are sorry, but the page you requested was not found</h2>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->


  

  <?php
include('h_footer.php');
   ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/aos/aos.js"></script>
  <script src="../vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../js/main.js"></script>

</body>

</html>