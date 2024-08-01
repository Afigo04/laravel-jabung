@include('layouts.header')
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
    @include('layouts.footer')

