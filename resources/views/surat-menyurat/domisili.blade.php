@include('layouts.header')

<main class="main">
  <!-- Hero Gunung -->
  <x-hero-gunung title="Surat Menyurat">
    <h1 class="fs-1" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
      Surat Keterangan Domisili
    </h1>
  </x-hero-gunung>
  <!-- End Hero Gunung -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">
    <form class="container" action="send" method="post" id="submitOnce">
      @csrf
      <div class="row">
          <div class="mb-3 col">
              <label for="name" id="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" name="nama_lengkap" maxlength="50" required>
          </div>
          <div class="mb-3 col">
              <label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
              <input type="text" class="form-control" id="ttl" name="ttl" required maxlength="50">
          </div>
      </div>

      <div class="row">
          <div class="mb-3 col">
              <label for="nik" class="form-label">NIK</label>
              <input type="text" class="form-control" id="nik" name="nik" required maxlength="16">
          </div>
          <div class="mb-3 col">
              <label for="pekerjaan" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required maxlength="50">
          </div>
      </div>

      <div class="row">
          <div class="mb-3 col">
              <label for="agama" class="form-label">Agama</label>
              <input type="text" class="form-control" id="agama" name="agama" required maxlength="50">
          </div>
          <div class="mb-3 col">
              <label for="gender" class="form-label">Jenis Kelamin</label>
              <input type="text" class="form-control" id="gender" name="gender" required maxlength="50">
          </div>
          <div class="mb-3 col">
              <label for="status" class="form-label">Status</label>
              <input type="text" class="form-control" id="status" name="status" required maxlength="50">
          </div>
      </div>

      <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" required maxlength="100">
      </div>

      <div class="mb-3">
          <label for="keperluan" class="form-label">Keperluan</label>
          <input type="text" class="form-control" id="keperluan" name="keperluan" required maxlength="100">
      </div>

      <div class="mb-3">
          <label for="no_whatsapp" class="form-label">No. Whatsapp</label>
          <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp" maxlength="20">
      </div>

      <input type="text" value="2" hidden name="document_category_id">
      <button type="submit" id="btn-submitOnce">
          <a class="more-info-btn">Kirim</a>
      </button>
    </form>
  </section>
  <!-- /Features Cards Section -->
</main>

<script src="{{asset('js/submitButtonOnce.js')}}"></script>
@include('layouts.footer')