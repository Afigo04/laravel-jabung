@include('layouts.header')

<main class="main">
    <x-hero-gunung>
        <h1 class="fs-1" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
            Galery
        </h1>
    </x-hero-gunung>

    <div class="custom-row container justify-content-center p-5">
        <div class="col-lg-12">
            <div class="gallery-grid">
                @if ($galery->isEmpty())
                <h1 class="fs-2 text-center text-black fw-bold mx-auto mb-0">Galeri Tidak Ada</h1>
                @else
                @foreach ($galery as $photo)
                <img src="{{asset('storage/'.$photo->photo_path)}}" alt="galeri jabung">
                @endforeach
                @endif
            </div>
        </div>
    </div>
</main>


@include('layouts.footer')