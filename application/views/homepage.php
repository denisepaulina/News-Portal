<!-- Hero Section -->
<div class="hero" id="home">
    <div class="hero__container">
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <a href="https://www.cnnindonesia.com/nasional/20210409103507-12-627794/polda-metro-jaya-tak-gelar-penyekatan-mudik-sebelum-6-mei" target='_blank'>
                    <img src="https://akcdn.detik.net.id/visual/2020/05/21/173e4bf4-ac4e-4f50-a4b9-31275ce6a968_169.jpeg?w=650" style="width:100%">
                </a>
                <div class="text">Polda Metro Jaya Tak Gelar Penyekatan Mudik Sebelum 6 Mei</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <a href="https://www.cnnindonesia.com/internasional/20210409101918-113-627786/dalam-9-hari-bhutan-vaksinasi-corona-60-persen-penduduk" target='_blank'>
                    <img src="https://akcdn.detik.net.id/visual/2020/07/21/ilustrasi-vaksin-corona_169.jpeg?w=650" style="width:100%">
                </a>
                <div class="text">Dalam 9 Hari, Bhutan Vaksinasi Corona 60 Persen Penduduk
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <a href="https://www.cnnindonesia.com/olahraga/20210409102618-178-627789/momen-magnus-carlsen-kalahkan-bill-gates-dalam-80-detik" target='_blank'>
                    <img src="https://akcdn.detik.net.id/visual/2021/04/06/magnus-carlsen-1_169.png?w=650" style="width:100%">
                </a>
                <div class="text">Momen Magnus Carlsen Kalahkan Bill Gates dalam 80 Detik</div>
            </div>


        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <h1 class="hero__heading">Baca <span>berita</span>mu hari ini</h1>
        <p class="hero__description">Informasi Harian Terupdate</p>
        <button class="main__btn"><a href="#">Lihat sekarang</a></button>
    </div>
</div>

<!-- About Section -->
<div class="main" id="about">
    <div class="main__container">
        <div class="main__video--container">
            <iframe src="https://20.detik.com/embed/210408137" frameborder="0" width="420" scrolling="no" allowfullscreen="true" height="236"></iframe>
        </div>
        <div class="main__content">
            <h1>Berita terkini</h1>
            <h2>Kemenhub Larang Semua Moda Transportasi Beroperasi 6-17 Mei</h2>
            <p>Kementerian Perhubungan resmi melarang pengoperasian sarana moda transportasi darat, laut, udara dan perkeretaapian pada masa mudik Idul Fitri 1442 H. Aturan berlaku mulai tanggal 6 hingga 17 Mei 2021.</p>
            <button class="main__btn"><a href="https://20.detik.com/detikflash/20210408-210408137/kemenhub-larang-semua-moda-transportasi-beroperasi-6-17-mei">Lihat sekarang</a></button>
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="services" id="services">
    <h1>Berita Lainnya</h1>
    <div class="services__wrapper">
        <div class="services__card">
            <h2>Operasi Semua Moda Transportasi Dilarang Total 6-17 Mei 2021</h2>
            <p>Pemerintah melalui Kementerian Perhubungan melarang total operasi semua moda transportasi...</p>
            <div class="services__btn"><button><a href="https://www.cnnindonesia.com/ekonomi/20210408155331-92-627551/operasi-semua-moda-transportasi-dilarang-total-6-17-mei-2021" target='_blank'>Baca</a></button></div>
        </div>
        <div class="services__card">
            <h2>KPK Resmi Bebaskan Lucas dari Lapas Tangerang</h2>
            <p> Komisi Pemberantasan Korupsi (KPK) mengeksekusi putusan bebas Mahkamah Agung (MA) bagi terdakwa kasus merintangi penyidikan Lucas dengan mengeluarkannya dari tahanan...</p>
            <div class="services__btn"><button><a href="https://www.cnnindonesia.com/nasional/20210409101255-12-627782/kpk-resmi-bebaskan-lucas-dari-lapas-tangerang" target='_blank'>Baca</a></button></div>
        </div>
        <div class="services__card">
            <h2>Mengenal Revolusi Jaringan 5G</h2>
            <p>Jaringan 5G merupakan generasi kelima dari revolusi kemajuan teknologi komunikasi ponsel atau smartphone...</p>
            <div class="services__btn"><button><a href="https://www.cnnindonesia.com/teknologi/20210405155206-213-626185/mengenal-revolusi-jaringan-5g" target='_blank'>Baca</a></button></div>
        </div>
        <div class="services__card">
            <h2>Kebakaran Tanah Abang Hanguskan 174 Lapak, Kerugian Rp1 M</h2>
            <p> Sebanyak 174 lapak dagang hangus saat kebakaran melanda Pasar Lontar, Tanah Abang, Jakarta Pusat, Kamis (8/4)...</p>
            <div class="services__btn"><button><a href="https://www.cnnindonesia.com/nasional/20210409103741-20-627793/kebakaran-tanah-abang-hanguskan-174-lapak-kerugian-rp1-m" target='_blank'>Baca</a></button></div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="main" id="sign-up">
    <div class="main__container">
        <div class="main__content">
            <h1>Join Us Now</h1>
            <h2>Sign Up Today</h2>
            <p>See what makes us different</p>
            <button class="main__btn"><a href="<?= base_url('auth/registration'); ?>">Sign Up</a></button>
        </div>
    </div>
</div>