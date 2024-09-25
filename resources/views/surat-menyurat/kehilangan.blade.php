@include('layouts.header')

@if ($errors->any())
    <div class="alert alert-danger custom-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<main class="main">
  <!-- Hero Gunung -->
  <x-hero-gunung title="Surat Menyurat">
    <h1 class="fs-1" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
      Surat Kehilangan
    </h1>
  </x-hero-gunung>
  <!-- End Hero Gunung -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">
      <form class="container" action="{{url(route('surat.menyurat.skk.create'))}}", method="post">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap <span class="text-danger fs-6">*</span></label>
            <input type="text" name="nama_lengkap" class="form-control" id="nama" required>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK <span class="text-danger fs-6">*</span></label>
            <input type="text" name="nik" class="form-control" id="nik" required>
        </div>
        <div class="mb-3">
            <label for="nkk" class="form-label">NKK <span class="text-danger fs-6">*</span></label>
            <input type="text" name="nkk" class="form-control" id="nkk" required>
        </div>
        <div class="mb-3">
            <label for="TTL" class="form-label">Tempat Tgl. Lahir <span class="text-danger fs-6">*</span></label>
            <input type="text" name="ttl" class="form-control" id="TTL" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin <span class="text-danger fs-6">*</span></label>
            <input type="text" name="gender" class="form-control" id="gender" required>
        </div>
        <div class="mb-3">
            <label for="kewarganegaraan" class="form-label">Kewarganegaraan <span class="text-danger fs-6">*</span></label>
            <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" required>
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan <span class="text-danger fs-6">*</span></label>
            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" required>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama <span class="text-danger fs-6">*</span></label>
            <input type="text" name="agama" class="form-control" id="agama" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat <span class="text-danger fs-6">*</span></label>
            <input type="text" name="alamat" class="form-control" id="alamat" required>
        </div>
        <div class="mb-3">
            <label for="barang" class="form-label">Barang Hilang <span class="text-danger fs-6">*</span></label>
            <input type="text" name="barang_hilang" class="form-control" id="barang" required>
        </div>
        <div class="mb-3">
            <label for="tglHilang" class="form-label">Tanggal Hilang <span class="text-danger fs-6">*</span></label>
            <input type="date" name="tanggal_hilang" class="form-control" id="tglHilang" required>
        </div>
        <div class="mb-3">
            <label for="wktHilang" class="form-label">Waktu Hilang <span class="text-danger fs-6">*</span></label>
            <input type="time" name="waktu_hilang" class="form-control" id="wktHilang" required>
        </div>
        <div class="mb-3">
            <label for="tempatHilang" class="form-label">Tempat Hilang <span class="text-danger fs-6">*</span></label>
            <input type="text" name="tempat_hilang" class="form-control" id="tempatHilang" required>
        </div>
        <div class="mb-3">
            <label for="keperluan" class="form-label">Keperluan <span class="text-danger fs-6">*</span></label>
            <input type="text" name="keperluan" class="form-control" id="keperluan" required>
        </div>
        <div class="mb-3">
            <label for="nomor" class="form-label">Nomor Whatsapp <span class="text-danger fs-6">*</span></label>
            <input type="text" name="no_whatsapp" class="form-control" id="nomor" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Kirim Data</button>
    </form>
  </section>
  <!-- /Features Cards Section -->
</main>

@include('layouts.footer')