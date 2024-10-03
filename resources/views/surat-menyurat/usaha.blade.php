@include('layouts.header')

<main class="main">
  <!-- Hero Gunung -->
  <x-hero-gunung title="Surat Menyurat">
    <h1 class="fs-1" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
      Surat Keterangan Usaha
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
            <input type="text" class="form-control" id="ttl" name="ttl" required>
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" required maxlength="16">
        </div>
        <div class="mb-3 col">
            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="gender" name="gender" required>
        </div>
        <div class="mb-3 col">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
        </div>
        <div class="mb-3 col">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama" required>
        </div>
    </div>
    
    <div class="row">
        <div class="mb-3 col">
            <label for="keperluan" class="form-label">Keperluan</label>
            <input type="text" class="form-control" id="keperluan" name="keperluan" required>
        </div>
        <div class="mb-3 col">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" required>
    </div>
    </div>

    <div class="row">
        <div class="mb-3 col">
            <label for="nama_usaha" class="form-label">Nama Usaha</label>
            <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" required>
        </div>
        <div class="mb-3 col">
            <label for="alamat_usaha" class="form-label">Alamat Usaha</label>
            <input type="text" class="form-control" id="alamat_usaha" name="alamat_usaha" required>
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col">
            <label for="jenis_usaha" class="form-label">Jenis Usaha</label>
            <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" required>
        </div>
        <div class="mb-3 col">
            <label for="klasifikasi" class="form-label">Klasifikasi</label>
            <input type="text" class="form-control" id="klasifikasi" name="klasifikasi" required>
        </div>
        <div class="mb-3 col">
            <label for="berlaku_mulai" class="form-label">Berlaku Mulai</label>
            <input type="text" class="form-control" id="berlaku_mulai" name="berlaku_mulai" required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="penanggung_jawab" class="form-label">Penanggung Jawab</label>
            <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab" required>
        </div>
        <div class="mb-3 col">
            <label for="no_whatsapp" class="form-label">No. Whatsapp</label>
            <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp">
         </div>
    </div>
   
    <input type="text" value="3" hidden name="document_category_id">
    <button type="submit" id="btn-submitOnce">
        <a class="more-info-btn">Kirim</a>
    </button>
    </form>
  </section>
  <!-- /Features Cards Section -->
</main>

<script src="{{asset('js/submitButtonOnce.js')}}"></script>
@include('layouts.footer')