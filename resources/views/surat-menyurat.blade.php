@include('layouts.header')

<main class="main">
  <!-- Hero Gunung -->
  <x-hero-gunung title="Surat Menyurat">
    <h1 class="fs-1" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
      Surat Menyurat
    </h1>
  </x-hero-gunung>
  <!-- End Hero Gunung -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">
    <div class="container swiper d-flex justify-content-center">
      <div class="swiper-wrapper justify-content-center">
        <!-- Slides -->
        <div class="swiper-slide">
          <a href="{{route('surat.menyurat.skk')}}" class="pdf-container">
            <img src="{{asset('img/pdf-icon.png')}}" alt="pdf icon" />
            <p class="text-center">Surat Keterangan Kehilangan</p>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="{{route('surat.menyurat.sku')}}" class="pdf-container">
            <img src="{{asset('img/pdf-icon.png')}}" alt="pdf icon" />
            <p class="text-center">Surat Keterangan Usaha</p>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="{{route('surat.menyurat.skd')}}" class="pdf-container">
            <img src="{{asset('img/pdf-icon.png')}}" alt="pdf icon" />
            <p class="text-center">Surat Keterangan Domisili</p>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="{{route('surat.menyurat.spl')}}" class="pdf-container">
            <img src="{{asset('img/pdf-icon.png')}}" alt="pdf icon" />
            <p class="text-center">Surat <br/> Perizinan <br /> Solar</p>
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