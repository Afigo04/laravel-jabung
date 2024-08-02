@include('layouts.header')
<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg)">
        <div class="container position-relative">
            <nav class="breadcrumbs">
                Ada dua orang yang sama-sama murid dari Kyai Hasan Besari yang terletak di pesantren Desa Tegalsari
                Kecamatan Jetis kabupaten Ponorogo. Santri tersebut berasal dari keluarga berbeda yaitu santri yang bernama
                Ki Ageng Morang merupakan utusan dari kerajaan Mataram yang di daulat untuk menggali ilmu dan fenomena agama
                islam dengan harapan akan di kembangkan di negaranya.
            </nav>
            <div class="tombol-selengkapnya">
                <a href="{{route('selengkapnya')}}">Selengkapnya</a>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About Section -->
    <section class="container">
        <h2 style="text-align: center; color: #003d81">Visi Desa Jabung</h2>
        <h4 style="text-align: center">"Mewujudkan Desa Jabung yang Aman, Damai, Adil dan Berbudaya"</h4>
        <p style="text-align: center">
            Maju dibidang pendidikan, perekonomian, dan pembangunan yang berpola partisipatif, demokratis, sehat, mandiri,
            dan bertaqwa kepada Tuhan Yang Maha Esa berdasarkan hukum dan peraturan yang berlaku di Negara Republik
            Indonesia untuk menuju Ponorogo lebih maju, berbudaya dan religius.
        </p>

        <h2 style="text-align: center; color: #003d81">Misi Desa Jabung</h2>
        <ol>
            <li>
                Menciptakan rasa aman, damai, tertib, dan tentram dengan senantiasa memupuk dan kesatuan serta penyadaran
                kepada masyarakat desa bahwa kepentingan umum harus didahulukan daripada kepentingan pribadi maupun
                golongan.
            </li>
            <li>
                Mengajak masyarakat desa agar diusahakan untuk anaknya diberi pendidikan setinggi-tingginya sehingga dapat
                menatap masa depan yang lebih baik.
            </li>
            <li>Pemberian pinjaman modal kepada masyarakat desa agar dapat meningkatkan taraf perekonomiannya.</li>
            <li>
                Membangun fisik maupun non fisik desa dengan selalu melibatkan partisipasi masyarakat agar pembangunan
                segera dapat dinikmati.
            </li>
            <li>Memberikan penyuluhan dan mendorong kepada masyarakat untuk senantiasa berperilaku sehat dan mandiri.</li>
            <li>Menggalakkan dan mendorong kesadaran berpolitik masyarakat desa dengna demokrasi.</li>
            <li>
                Pemberdayaan aparatur pemerintah desa dengan baik dan benar yang berfungsi melayani masyarakat secara
                profesional, transparan bebas korupsi, kolusi dan nepotisme.
            </li>
            <li>
                Melibatkan partisipasi masyarakat dalam pelaksaan fungsi-fungsi kepada masyarakat serta melaksanakan
                pelayanan masyarakat dengan cepat, tepat, murah, memuaskan, transparan, akuntabel dan tidak deskriminatif.
            </li>
            <li>
                Menggandeng dan mengajak tokoh agama untuk mengembangkan ketaqwaan masyarakat desa kepada Tuhan Yang Maha
                Esa melalui mimbar - mimbar keagamaan sesuai dengan agama yang dianut.
            </li>
            <li>
                Mengajak masyarakat untuk senantiasa menaati hukum dan peraturan yang berlaku melalui sosialisasi dan
                penyuluhan agar masyarakat taat hukum.
            </li>
        </ol>
    </section>
    <!-- /About Section -->

    <!-- Stats Counter Section -->
    <section class="section-demografi">
        <!-- Section Title -->
        <div>
            <h2 style="text-align: center; color: #003d81">Demografi Desa Jabung</h2>
        </div>
        <!-- End Section Title -->

        <div class="kotak-wilayah container">
            <div class="batas-jumlah-luas-orbitasi">
                <div class="batas-jumlah-wilayah">
                    <div class="batas-dan-penduduk">
                        <div class="batas-wilayah pt-1">
                            <h5 style="text-align: center">
                                <p>Batas Wilayah Desa</p>
                            </h5>
                            <div class="list-batas-wilayah">
                                <ul>
                                    <li>Sebelah Utara</li>
                                    <li>Sebelah Selatan</li>
                                    <li>Sebelah Barat</li>
                                    <li>Sebelah Timur</li>
                                </ul>
                                <ul>
                                    <li>: Desa Bajang</li>
                                    <li>: Desa Tegalsari</li>
                                    <li>: Desa Demangan</li>
                                    <li>: Desan Gandu</li>
                                </ul>
                            </div>
                        </div>
                        <div class="jumlah-penduduk pt-1 mt-2">
                            <h5 style="text-align: center">
                                <p>Jumlah Penduduk Berdasarkan Kelamin</p>
                            </h5>
                            <div class="list-jumlah-penduduk">
                                <ul>
                                    <li>Kepala keluarga</li>
                                    <li>Laki-laki</li>
                                    <li>Perempuan</li>
                                </ul>
                                <ul>
                                    <li>: 841 KK</li>
                                    <li>: 1521 Orang</li>
                                    <li>: 1548 Orang</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="luas-wilayah pt-1">
                        <h5 style="text-align: center">
                            <p>Luas Wilayah</p>
                        </h5>
                        <div class="list-luas-wilayah">
                            <ul>
                                <li>Pemukiman</li>
                                <li>Pertanian Sawah</li>
                                <li>Ladang/tegalan</li>
                                <li>Hutan</li>
                                <li>Rawa-rawa</li>
                                <li>Perkantoran</li>
                                <li>Sekolah</li>
                                <li>Jalian</li>
                                <li>Lapangan Sepak Bola</li>
                            </ul>
                            <ul>
                                <li>: 122 ha</li>
                                <li>: 162,5 ha</li>
                                <li>: 161 ha</li>
                                <li>: - ha</li>
                                <li>: - ha</li>
                                <li>: 0,25 ha</li>
                                <li>: 0,75 ha</li>
                                <li>: 80 hs</li>
                                <li>: 1 ha</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="orbitasi pt-1 mt-2">
                    <h5 style="text-align: center">
                        <p>Orbitasi</p>
                    </h5>
                    <div class="list-orbitasi">
                        <ul>
                            <li>Jarak ke ibu kota kecamatan terdekat</li>
                            <li>Lama jarak tempuh ke ibu kota kecamatan</li>
                            <li>Jarak ke ibu kota kabupaten</li>
                            <li>Lama Jarak tempuh ke ibu kota kabupaten</li>
                        </ul>
                        <ul>
                            <li>: 2 KM</li>
                            <li>: 15 menit</li>
                            <li>: 10 KM</li>
                            <li>: 1 Jam</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Stats Counter Section -->

    <!-- Section bagan susunan -->
    <section class="bagan-susunan section">
        <!-- Section Title -->
        <div>
            <h2 style="text-align: center; color: #003d81">
                Bagan Susunan Organisasi dan Tata Kerja <br />
                Pemerintah Desa Jabung, Kecamatan Mlarak
            </h2>
        </div>
        <!-- End Section Title -->
    </section>
    <!-- End Section bagan susunan -->

    <!-- Section kepala desa -->
    <section class="kepala-desa section">
        <!-- Section Title -->
        <div>
            <h2 style="text-align: center; color: #003d81">
                Bagan Susunan Organisasi dan Tata Kerja <br />
                Pemerintah Desa Jabung, Kecamatan Mlarak
            </h2>
        </div>
        <!-- End Section Title -->
    </section>
    <!-- End Section kepala desa -->
</main>
@include('layouts.footer')