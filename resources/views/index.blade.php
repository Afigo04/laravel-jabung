@include('layouts.header')

<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6 text-center">
                        <img class="hero-logo" src="{{asset('img/logo-ponorogo.png')}}" alt="Logo Desa Jabung" />
                        <h2>Sukses Jabung untuk Indonesia</h2>
                        <p>
                            Sebuah platform digital yang disiapkan oleh pemerintah desa, berfungsi untuk menyediakan informasi dan
                            layanan kepada masyarakat desa yang terpadu berbasis web, instagram, dan aplikasi mobile android.
                            Website ini bertujuan untuk meningkatkan pelayanan publik, mempermudah akses informasi, meningkatkan
                            transparansi, dan mempererat interaksi antara desa dan warganya dengan jalan penyebaran, dan kemudahan
                            untuk mendapatkan informasi.
                        </p>
                        <a href="#get-started" class="btn-get-started">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- /Hero Section -->
    <!-- Get Started Section -->
    <section id="get-started" class="get-started section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content" data-aos="zoom-out" data-aos-delay="100">
                    <div class="header">
                        <div class="header-top">
                            <div class="title-box">
                                <div class="title-with-image">
                                    <div class="image">
                                        <img src="img/Rekomendawet.png" alt="Dawet Jabung" />
                                    </div>
                                    <div class="title">
                                        <h1>8 Rekomendasi Warung Dawet Jabung Paling Enak di Ponorogo, Wajib Dicoba untuk Jelajahi Cita Rasa yang Otentik</h1>
                                        <p>Ponorogo adalah kota yang tak hanya terkenal dengan kekayaan budaya, tetapi juga menyajikan kenikmatan kuliner yang menggugah selera. Salah satu ikon kuliner yang melekat erat dengan kota ini adalah Dawet Jabung, minuman tradisional yang begitu khas dan lezat.</p>
                                        <a href="#" class="button">Selengkapnya ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-box">
                                <div class="menu">
                                    <a href="#" class="menu-item">POPULER</a>
                                    <a href="#" class="menu-item">TERBARU</a>
                                </div>
                                <div class="additional-text">
                                    <p>----------------------------------------------------------------------</p>
                                    <p>----------------------------------------------------------------------</p>
                                    <p>----------------------------------------------------------------------</p>
                                    <p>----------------------------------------------------------------------</p>
                                    <p>----------------------------------------------------------------------</p>
                                    <p>----------------------------------------------------------------------</p>
                                    <p>----------------------------------------------------------------------</p>
                                    <p>----------------------------------------------------------------------</p>
                                    <p>----------------------------------------------------------------------</p>
                                    <p>----------------------------------------------------------------------</p>
                                </div>
                            </div>
                        </div>

                        <div class="content">
                            <div class="card-grid">
                                <div class="card">
                                    <img src="{{asset('img/MitosOne.png')}}" alt="Dawet Jabung" />
                                    <h2>Mitos Dawet Jabung Ponorogo, Jangan Sesekali Ambil Lepeknya Bakal Terjadi Hal Ini</h2>
                                    <a href="#" class="button">Selengkapnya ></a>
                                </div>
                                <div class="card">
                                    <img src="{{asset('img/MitosTwo.png')}}" alt="Dawet Jabung" />
                                    <h2>Mitos Dawet Jabung Ponorogo, Jangan Sesekali Ambil Lepeknya Bakal Terjadi Hal Ini</h2>
                                    <a href="#" class="button">Selengkapnya ></a>
                                </div>
                                <div class="card">
                                    <img src="{{asset('img/MitosThree.png')}}" alt="Dawet Jabung" />
                                    <h2>Mitos Dawet Jabung Ponorogo, Jangan Sesekali Ambil Lepeknya Bakal Terjadi Hal Ini</h2>
                                    <a href="#" class="button">Selengkapnya ></a>
                                </div>
                                <div class="card">
                                    <img src="{{asset('img/MitosFour.png')}}" alt="Dawet Jabung" />
                                    <h2>Mitos Dawet Jabung Ponorogo, Jangan Sesekali Ambil Lepeknya Bakal Terjadi Hal Ini</h2>
                                    <a href="#" class="button">Selengkapnya ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class="row">
        <div class="col-lg-12">
            <h2 class="section-title">Surat Menyurat</h2>
            <div class="pdf-grid">
                <div class="card">
                    <img src="{{asset('img/pdf-icon.png')}}" alt="Akta Kematian" />
                    <h2>Akta Kematian</h2>
                </div>
                <div class="card">
                    <img src="{{asset('img/pdf-icon.png')}}" alt="Akta Kematian" />
                    <h2>Akta Kematian</h2>
                </div>
                <div class="card">
                    <img src="{{asset('img/pdf-icon.png')}}" alt="Akta Kematian" />
                    <h2>Akta Kematian</h2>
                </div>
                <div class="card">
                    <img src="{{asset('img/pdf-icon.png')}}" alt="Akta Kematian" />
                    <h2>Akta Kematian</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 class="section-title">Transparansi Anggaran</h2>
            <h3 class="text-center">Realisasi Tahun Anggaran 2023</h3>
            <div class="budget-grid">
                <div class="budget-card">
                    <p>Jumlah Pendapatan</p>
                    <h3>Rp. 1.681.883.791,00</h3>
                </div>
                <div class="budget-card">
                    <p>Jumlah Belanja</p>
                    <h3>Rp. 1.801.300.458,00</h3>
                </div>
                <div class="budget-card">
                    <p>Jumlah Pembiayaan</p>
                    <h3>Rp. 127.684.423,00</h3>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('anggaran')}}" class="more-info-btn">Selengkapnya ></a>
            </div>
            <h3 class="text-center">Tahun Anggaran 2024</h3>
            <div class="budget-grid">
                <div class="budget-card">
                    <p>Jumlah Pendapatan</p>
                    <h3>Rp. 1.686.164.500,00</h3>
                </div>
                <div class="budget-card">
                    <p>Jumlah Belanja</p>
                    <h3>Rp. 1.626.270.009,00</h3>
                </div>
                <div class="budget-card">
                    <p>Jumlah Pembiayaan</p>
                    <h3>Rp. 59.894.491,00</h3>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('anggaran')}}" class="more-info-btn">Selengkapnya ></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 class="section-title">Galery</h2>
            <div class="gallery-grid">
                <img src="{{asset('img/MitosOne.png')}}" alt="Dawet Jabung">
                <img src="{{asset('img/MitosTwo.png')}}" alt="Dawet Jabung">
                <img src="{{asset('img/MitosThree.png')}}" alt="Dawet Jabung">
                <img src="{{asset('img/MitosFour.png')}}" alt="Dawet Jabung">
                <img src="{{asset('img/MitosOne.png')}}" alt="Dawet Jabung">
                <img src="{{asset('img/MitosTwo.png')}}" alt="Dawet Jabung">
                <img src="{{asset('img/MitosThree.png')}}" alt="Dawet Jabung">
                <img src="{{asset('img/MitosFour.png')}}" alt="Dawet Jabung">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 class="section-title">Wilayah Desa Jabung</h2>
            <div class="map-grid">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126831.55230581848!2d110.15941327879654!3d-7.767637975029834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ddf9e8b517b%3A0x81b0f5e2c5197aa4!2sDesa%20Jabung!5e0!3m2!1sid!2sid!4v1693086730634!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    </section>
    <!-- /Get Started Section -->
</main>

@include('layouts.footer')