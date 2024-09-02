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
      <div class="swiper-wrapper {{ $berkas->count() < 5 ? 'justify-content-center': '' }}">
        <!-- Slides -->
        @if($berkas->isEmpty())
        <h1 class="fs-1 text-center text-black fw-bold mx-auto">Dokumen Tidak Ada</h1>
        @else
        @foreach ($berkas as $surat)
        <div class="swiper-slide">
          <a href="{{asset('storage/'.$surat->path)}}" target="_blank" class="pdf-container">
            <img src="{{asset('img/pdf-icon.png')}}" alt="pdf icon" />
            <p class="text-center">{{$surat->name}}</p>
          </a>
        </div>
        @endforeach
        @endif
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  </section>
  <!-- /Features Cards Section -->
</main>

@include('layouts.footer')