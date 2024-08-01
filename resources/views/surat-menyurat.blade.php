<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Desa Jabung</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link href="assets/css/surat-menyurat.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/footer.css" />

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  </head>

  <body class="services-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <div class="custom-navbar">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="assets/img/Logo Ponorogo.png" alt="" />
          <div class="nama-logo">
            <h1 class="sitename">Desa Jabung</h1>
            <span style="font-size: 14px">Kec. Mlarak. Kab. Ponorogo</span> <br />
            <span style="font-size: 14px">Jawa Timur</span>
          </div>
        </div>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">Profil Desa</a></li>
            <li><a href="surat-menyurat.html" class="active">Surat Menyurat</a></li>
            <li><a href="anggaran.html">Anggaran</a></li>
            <li><a href="galery.html">Galery</a></li>
            <li><a href="pengaduan.html">Pengaduan</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </header>

    <main class="main">
      <!-- Page Title -->
      <div class="page-title dark-background background-gunung">
        <div class="container position-relative p-5">
          <h1 class="fs-1" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
            Surat Menyurat
          </h1>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Services Section -->
      <section id="services" class="services section light-background">
        <div class="container swiper d-flex justify-content-center">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a href="#" class="pdf-container">
                <img src="./assets/img/pdf-icon.png" alt="" />
                <p>Akta Kematian</p>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="pdf-container">
                <img src="./assets/img/pdf-icon.png" alt="" />
                <p>Akta Kematian</p>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="pdf-container">
                <img src="./assets/img/pdf-icon.png" alt="" />
                <p>Akta Kematian</p>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="pdf-container">
                <img src="./assets/img/pdf-icon.png" alt="" />
                <p>Akta Kematian</p>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" class="pdf-container">
                <img src="./assets/img/pdf-icon.png" alt="" />
                <p>Akta Kematian</p>
              </a>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </section>
      <!-- /Features Cards Section -->
    </main>

    <footer id="footer" class="custom-footer">
      <div class="container p-4">
        <div class="d-flex flex-column justify-content-center align-items-center gap-2">
          <div class="d-flex gap-3 custom-icon">
            <a href="#">
              <img src="./assets/img/email-logo.png" alt="" />
            </a>
            <a href="#">
              <img src="./assets/img/ig-logo.png" alt="" />
            </a>
            <a href="">
              <img src="./assets/img/fb-logo.png" alt="" />
            </a>
            <a href="">
              <img src="./assets/img/ytb-logo.png" alt="" />
            </a>
          </div>
          <p class="text-white text-center mb-0 mt-2">JABUNG.GO.ID</p>
        </div>
        <hr style="border-bottom: 3px solid #fff" />
        <div class="d-flex flex-column gap-1 justify-content-between">
          <div class="text-white footer-text">
            <p class="text-center mb-2 text-white">Jl. Nama Jalan no jalan, Ponorogo, Jawa Timur, Indonesia</p>
          </div>
          <div class="text-white text-center">© 2024 Dinas Komunikasi, Informasi dan Statistik Desa Jabung</div>
        </div>
      </div>
    </footer>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="./assets/js/swiper.js"></script>
  </body>
</html>
