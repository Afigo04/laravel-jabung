<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Jabung</title>

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
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet" />
    <link href="assets/css/footer.css" rel="stylesheet" />
    <link href="assets/css/anggaran.css" rel="stylesheet">
</head>
<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
          <div class="custom-navbar">
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
              <li><a href="surat-menyurat.html">Surat Menyurat</a></li>
              <li><a href="anggaran.html" class="active">Anggaran</a></li>
              <li><a href="blog.html">Galery</a></li>
              <li><a href="contact.html">Pengaduan</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
        </div>
    </header>
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(assets/img/background-title.png); height: 291px;">
          <div class="container position-relative">
            <nav class="breadcrumbs">
              <h2>Transparansi Anggaran Pendapatan dan Belanja Daerah</h2>
              <h5>Desa Jabung, Kecamatan Mlarak, Kabupaten Ponorogo</h5>
            </nav>
          </div>
        </div>
        <!-- End Page Title -->
  
        <!-- Info Grafik Section 2023 -->
        <section class="container">
          <h2 style="color: #003d81">Info Grafik APBD</h2>
          <h2 style="color: #003d81; margin-bottom: 40px;">Realisasi Tahun Anggaran 2023</h2>
          <h2 style="text-align: center; color: #003d81;">Pendapatan Desa</h2>
          <div class="parent-container-tabel-anggaran">
            <div class="container-tabel-anggaran">
                <div class="tabel-anggaran">
                    <h5></h5>
                </div>
                <div class="tabel-anggaran">
                    <h5></h5>
                </div>
                <div class="tabel-anggaran">
                    <h5></h5>
                </div>
            </div>
            <div class="container-tabel-anggaran">
                <div class="tabel-anggaran">
                    <h5></h5>
                </div>
                <div class="tabel-anggaran">
                    <h5></h5> 
                </div>
                <div class="tabel-anggaran">
                    <h5></h5>
                </div>
            </div>
            <div class="container-jumlah-pendapatan">
                <div class="jumlah-pendapatan">
                    <h2>Jumlah Pendapatan</h2>
                    <div  class="tabel-jumlah-pendapatan">
                        <p id="jumlah-pendapatan">Rp 1.681.883.791,00</p>
                    </div>
                </div>
            </div>
          </div>
        </section>
        <!-- end info grafik Section 2023-->
  
        <!-- belanja desa section -->
        <section class="container-belanja-desa">
            <!-- section title -->
            <div>
                <h2 style="color: #003d81; text-align: center;">Belanja Desa</h2>
            </div>
            <!-- end section title -->
             <div class="container tabel-belanja">
                <div class="container-tabel-atas">
                    <div class="tabel-belanja-desa">
                        <h5></h5>
                        <p>Rp. 1.801.300.458,00</p>
                    </div>
                    <div class="tabel-belanja-desa">
                        <h5></h5>
                        <p>Rp. 1.801.300.458,00</p>
                    </div>
                    <div class="tabel-belanja-desa">
                        <h5></h5>
                        <p>Rp. 1.801.300.458,00</p>
                    </div>
                </div>
                <div class="container-tabel-bawah">
                    <div class="tabel-belanja-desa">
                        <h5></h5>
                        <p>Rp. 1.801.300.458,00</p>
                    </div>
                    <div class="tabel-belanja-desa">
                        <h5></h5>
                        <p>Rp. 1.801.300.458,00</p>
                    </div>
                </div>
                <div class="container-jumlah-pendapatan">
                    <div class="jumlah-pendapatan">
                        <h2>Jumlah Pendapatan</h2>
                        <div  class="tabel-jumlah-pendapatan">
                            <p id="jumlah-pendapatan">Rp 1.681.883.791,00</p>
                        </div>
                    </div>
                </div>
             </div>
        </section>
        <!-- end belanja desa section -->

        <!-- pembiyaan desa section -->
         <section class="container">
            <!-- section title -->
             <div>
                <h2 style="text-align: center; color: #003d81;">Pembiayaan Desa</h2>
             </div>
             <!-- end section title -->
              <div class="tabel-penerima-pembiayaan">
                <div class="tabel-pembiayaan">
                    <h5>Penerima Pembiayaan</h5>
                </div>
                <div class="tabel-pembiayaan">
                    <h5>Pengeluaran Pembiayaan</h5>
                </div>
              </div>
              <div class="container-jumlah-pendapatan">
                <div class="jumlah-pendapatan">
                    <h2>Jumlah Pendapatan</h2>
                    <div  class="tabel-jumlah-pendapatan">
                        <p id="jumlah-pendapatan">Rp 1.681.883.791,00</p>
                    </div>
                </div>
            </div>
         </section>
         <!-- end pembiayaan data section -->

         <!-- Info Grafik Section 2024 -->
        <section class="container">
            <h2 style="color: #003d81">Info Grafik APBD</h2>
            <h2 style="color: #003d81; margin-bottom: 40px;">Realisasi Tahun Anggaran 2024</h2>
            <h2 style="text-align: center; color: #003d81;">Pendapatan Desa</h2>
            <div class="parent-container-tabel-anggaran">
              <div class="container-tabel-anggaran">
                  <div class="tabel-anggaran">
                      <h5></h5>
                  </div>
                  <div class="tabel-anggaran">
                      <h5></h5>
                  </div>
                  <div class="tabel-anggaran">
                      <h5></h5>
                  </div>
              </div>
              <div class="container-tabel-anggaran">
                  <div class="tabel-anggaran">
                      <h5></h5>
                  </div>
                  <div class="tabel-anggaran">
                      <h5></h5> 
                  </div>
                  <div class="tabel-anggaran">
                      <h5></h5>
                  </div>
              </div>
              <div class="container-jumlah-pendapatan">
                  <div class="jumlah-pendapatan">
                      <h2>Jumlah Pendapatan</h2>
                      <div  class="tabel-jumlah-pendapatan">
                          <p id="jumlah-pendapatan">Rp 1.681.883.791,00</p>
                      </div>
                  </div>
              </div>
            </div>
          </section>
          <!-- end info grafik Section 2024-->

          <!-- belanja desa section -->
        <section class="container-belanja-desa">
            <!-- section title -->
            <div>
                <h2 style="color: #003d81; text-align: center;">Belanja Desa</h2>
            </div>
            <!-- end section title -->
             <div class="container tabel-belanja">
                <div class="container-tabel-atas">
                    <div class="tabel-belanja-desa">
                        <h5></h5>
                        <p>Rp. 1.801.300.458,00</p>
                    </div>
                    <div class="tabel-belanja-desa">
                        <h5></h5>
                        <p>Rp. 1.801.300.458,00</p>
                    </div>
                    <div class="tabel-belanja-desa">
                        <h5></h5>
                        <p>Rp. 1.801.300.458,00</p>
                    </div>
                </div>
                <div class="container-tabel-bawah">
                    <div class="tabel-belanja-desa">
                        <h5></h5>
                        <p>Rp. 1.801.300.458,00</p>
                    </div>
                    <div class="tabel-belanja-desa">
                        <h5></h5>
                        <p>Rp. 1.801.300.458,00</p>
                    </div>
                </div>
                <div class="container-jumlah-pendapatan">
                    <div class="jumlah-pendapatan">
                        <h2>Jumlah Pendapatan</h2>
                        <div  class="tabel-jumlah-pendapatan">
                            <p id="jumlah-pendapatan">Rp 1.681.883.791,00</p>
                        </div>
                    </div>
                </div>
             </div>
        </section>
        <!-- end belanja desa section -->

        <!-- pembiyaan desa section -->
        <section class="container">
            <!-- section title -->
             <div>
                <h2 style="text-align: center; color: #003d81;">Pembiayaan Desa</h2>
             </div>
             <!-- end section title -->
              <div class="tabel-penerima-pembiayaan">
                <div class="tabel-pembiayaan">
                    <h5>Penerima Pembiayaan</h5>
                </div>
                <div class="tabel-pembiayaan">
                    <h5>Pengeluaran Pembiayaan</h5>
                </div>
              </div>
              <div class="container-jumlah-pendapatan">
                <div class="jumlah-pendapatan">
                    <h2>Jumlah Pendapatan</h2>
                    <div  class="tabel-jumlah-pendapatan">
                        <p id="jumlah-pendapatan">Rp 1.681.883.791,00</p>
                    </div>
                </div>
            </div>
         </section>
         <!-- end pembiayaan data section -->

         <!-- APBD desa jabung section -->
        <section class="container">
            <!-- section title -->
            <div>
                <h2 style="text-align: center; color: #003d81;">APBDesa Jabung</h2>
             </div>
             <!-- end section title -->
            <div class="container-pdf-apbd">
                <div class="pdf-apbd"></div>
                <div class="pdf-apbd"></div>
                <div class="pdf-apbd"></div>
                <div class="pdf-apbd"></div>
            </div>
        </section>
        <!-- end APBD Desa Jabung -->

        <!-- Footer -->
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
                  <p class="text-center text-white mb-2">Jl. Nama Jalan no jalan, Ponorogo, Jawa Timur, Indonesia</p>
                </div>
                <div class="text-white text-center">© 2024 Dinas Komunikasi, Informasi dan Statistik Desa Jabung</div>
              </div>
            </div>
          </footer>
      
          <!-- Vendor JS Files -->
          <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
          <!-- Main JS File -->
          <script src="assets/js/main.js"></script>
      </main>
</body>
</html>