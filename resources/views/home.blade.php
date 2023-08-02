<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1" />
    <link rel="stylesheet" href="{{ asset('landing_page/css/style.css') }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Vendor -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('landing_page/vendor/js/accordion-js/accordion.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('landing_page/css/lightslider.css') }}" />
    <script type="text/javascript" src="{{ asset('landing_page/js/lightslider.js') }}"></script>
    <script src="{{ asset('landing_page/vendor/accordion-js/accordion.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('landing_page/vendor/aos/aos.css') }}" />
    <script src="{{ asset('landing_page/vendor/aos/aos.js') }}"></script>

    <script src="{{ asset('landing_page/vendor/anime-js/anime.min.js') }}"></script>

    <script src="{{ asset('landing_page/vendor/magicline-js/magicline.min.js') }}"></script>

    <script src="https://unpkg.com/phosphor-icons"></script>

    <link rel="shortcut icon" href="{{ asset('landing_page/img/logo-web.png') }}" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet" />

    <title>Koperasi Tunas Kencana</title>
</head>

<body class="light">
    <div class="all-wrapper">
        <div class="position-fixed container-fluid" id="navbar">
            <div class="container-lg">
                <nav
                    class="nav-navbar d-flex flex-wrap align-items-center justify-content-between position-relative px-3">
                    <a href="#" class="d-flex align-items-center col-md-3 text-dark text-decoration-none">
                        <div class="d-flex gap-3">
                            <img class="logo h-10" src="{{ asset('landing_page/img/logo-web.png') }}"
                                alt="Koperasi Tunaskencana" />
                            <div class="flex-row">
                                <h2 class="text-md font-bold">Koperasi</h2>
                                <h4 class="text-md font-bold">Tunas Kencana</h4>
                            </div>
                        </div>
                    </a>

                    <div class="nav-menu">
                        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                            <li>
                                <a href="#" class="px-2 active nav-link">Beranda</a>
                            </li>
                            <li><a href="#products" class="px-2 nav-link">Profil</a></li>
                            <li><a href="#faq" class="px-2 nav-link">Layanan</a></li>
                            <li><a href="#get-started" class="px-2 nav-link">Unit</a></li>
                            <li>
                                <a href="#footer" class="px-2 nav-link">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <section id="hero">
        <div class="container-fluid container-lg">
            <div class="row p-0 m-0">
                <div class="col-lg-6 kiri pl-20">
                    <div class="wrapper">
                        <div class="">
                            <img src="{{ asset('landing_page/img/kop.png') }}" alt="Koperasi Tunas Kencana"
                                style="margin-top: -6em" class="img-fluid h-auto" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 kanan">
                    <div class="mainHero flex flex-column gap-3">
                        <h1 class="text-white">
                            <span>KOPERASI</span>
                            <span>TUNAS</span>
                            <span>KENCANA</span>
                        </h1>
                        <p class="text-white text-xl">Kabupaten Cirebon</p>
                        <hr class="h-1 text-white font-bold w-75" size="2" />
                        <h2 class="font-bold text-white text-[2em]">Melayani</h2>
                        <div class="bk w-75">
                            <ul id="lightSlider">
                                <li>
                                    <div
                                        class="text-md font-semibold text-[white] p-3 bg-[#98ef96] rounded-md text-center">
                                        <h1 class="">SIMPAN PINJAM</h1>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="text-md font-semibold text-white p-3 bg-[#98ef96] rounded-md text-center">
                                        <h1 class="">JASA</h1>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="text-md font-semibold text-white p-3 bg-[#98ef96] rounded-md text-center">
                                        <h1 class="">TOKO / MINIMARKET</h1>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="products">
        <div class="container-fluid container-lg">
            <div class="row product-strength-2 p-0 m-0 align-items-center">
                <div class="col-lg-6 d-flex justify-content-center flex-column kiri order-last order-lg-first">
                    <div class="flex justify-start">
                        <h3 class="title mb-3 z-10">Tentang Kami</h3>
                        <div style="margin-left: 2em;margin-top: 1.5em;"
                            class="bg-[#fff212] position-absolute z-0 w-48 h-4"></div>
                    </div>
                    <p class="desc">
                        Sebagaimana diketahui bahwa koperasi mempunyai peran strategis dalam memajukan dan meningkatkan
                        perekonomian dan kesejahteraan masyarakat melalui pelayanan prima dan peningkatan berbagai usaha
                        yang produktif yang diawali dari peningkatan kesejahteraan anggota koperasi. Keberadaan koperasi
                        yang maju bukan saja untuk kesejahteraan anggota, tetapi juga berperan dalam pengembangan tenaga
                        kerja dan peningkatan kesejahteraan bagimasyarakat yang berada disekitar usaha koperasi. <br>

                        Keberadaan Koperasi KPRI Tunas Kencana telah menunjukkan perkembangan dan peningkatan dalam
                        kinerjanya yang ditandai dengan semakin meningkatnya jumlah anggota, meningkatknya jenis usaha,
                        peningkatan pendapatan dan SHU serta peningkatan jumlah asset.

                        Peningkatan kinerja koperasi tersebut selain adanya jalinan kerjasama dan komunikasi yang baik
                        antara Pengurus, Pengawas dan Pengelola dan anggota secara profesional juga karena telah
                        dibangun dan dilaksanakannya system manajemen Koperasi KPRI Tunas Kencana secara profesional dan
                        proporsional dengan mendasarkan asas perkoperasian di Indonesia.

                        Dengan perkembangan koperasi yang diajukan dalam Profil Koperasi KPRI Tunas Kencana tersebut,
                        dimaksudkan sebagai catatan untuk lebih mengembangkan dan meningkatkan Koperasi KPRI Tunas
                        Kencana Provinsi Jawa Barat untuk masa yang akan datang
                    </p>
                </div>
                <div class="col-lg-6 kanan order-first order-lg-last">
                    <img src="{{ asset('landing_page/img/husen.jpg') }}" alt="Baju Belakang" class="baju-belakang" />
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="mb-4">
        <div class="container-fluid container-lg">
            <div class="row">
                <div id="faq-head" class="col-12 text-center mb-4 flex justify-center">
                    <h3 class="title mb-3 z-10 position-relative">Statistik</h3>
                    <div style="margin-top: 1.5em;" class="bg-[#fff212] position-absolute z-0 w-36 h-4"></div>
                </div>
                <div class="col-lg-12">
                    <div class="flex justify-center bg-white rounded-2xl mx-32"
                        style="box-shadow: 0px 0px 29px 0px rgba(0, 0, 0, 0.151);">
                        <div class="flex justify-center p-5 gap-20">
                            <div class="col-12 col-md-4">
                                <div class="flex gap-2 flex-column align-center items-center">
                                    <div class="mb-2 p-3 flex align-center items-center rounded-circle bg-[#55D852]">
                                        <span class="font-bold text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="50" height="50" fill="#ffffff" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none"></rect>
                                                <circle cx="80" cy="168" r="32" fill="none"
                                                    stroke="#f0f0f0" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="12"></circle>
                                                <path d="M32,224a60,60,0,0,1,96,0" fill="none" stroke="#f0f0f0"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="12">
                                                </path>
                                                <circle cx="80" cy="64" r="32" fill="none"
                                                    stroke="#f0f0f0" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="12"></circle>
                                                <path d="M32,120a60,60,0,0,1,96,0" fill="none" stroke="#f0f0f0"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="12">
                                                </path>
                                                <circle cx="176" cy="168" r="32" fill="none"
                                                    stroke="#f0f0f0" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="12"></circle>
                                                <path d="M128,224a60,60,0,0,1,96,0" fill="none" stroke="#f0f0f0"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="12">
                                                </path>
                                                <circle cx="176" cy="64" r="32" fill="none"
                                                    stroke="#f0f0f0" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="12"></circle>
                                                <path d="M128,120a60,60,0,0,1,96,0" fill="none" stroke="#f0f0f0"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="12">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div class="text-[#028a00]">Anggota</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="flex gap-2 flex-column align-center items-center">
                                    <div class="mb-2 p-3 flex align-center items-center rounded-circle bg-[#55D852]">
                                        <span class="font-bold text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="50" height="50" fill="#ffffff" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none"></rect>
                                                <path
                                                    d="M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.5a8.3,8.3,0,0,1,2.6-5.9l80-72.7a8,8,0,0,1,10.8,0l80,72.7a8.3,8.3,0,0,1,2.6,5.9V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z"
                                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="12">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div class="font-bold text-2xl text-[#55D852]">3</div>
                                    <div class="text-[#028a00]">Unit</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="flex gap-2 flex-column align-center items-center">
                                    <div class="mb-2 p-3 flex align-center items-center rounded-circle bg-[#55D852]">
                                        <span class="font-bold text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="50" height="50" fill="#ffffff" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none"></rect>
                                                <circle cx="128" cy="128" r="24" fill="none"
                                                    stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="12"></circle>
                                                <circle cx="96" cy="56" r="24" fill="none"
                                                    stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="12"></circle>
                                                <circle cx="200" cy="104" r="24" fill="none"
                                                    stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="12"></circle>
                                                <circle cx="200" cy="184" r="24" fill="none"
                                                    stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="12"></circle>
                                                <circle cx="56" cy="192" r="24" fill="none"
                                                    stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="12"></circle>
                                                <line x1="118.3" y1="106.1" x2="105.7" y2="77.9"
                                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="12"></line>
                                                <line x1="177.2" y1="111.6" x2="150.8" y2="120.4"
                                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="12"></line>
                                                <line x1="181.1" y1="169.3" x2="146.9" y2="142.7"
                                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="12"></line>
                                                <line x1="110.1" y1="143.9" x2="73.9" y2="176.1"
                                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="12"></line>
                                            </svg></span>
                                    </div>
                                    <div class="font-bold text-2xl text-[#55D852]">5</div>
                                    <div class="text-[#028a00]">Mitra</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="get-started" class="bg-[#D4FFD3] mb-4">
        <div class="container-fluid container-lg">
            <div class="row product-strength-2 p-0 m-0 align-items-center">
                <div id="faq-head" class="col-12 text-center mb-4 flex justify-center">
                    <h3 class="title mb-3 z-10 position-relative">Unit</h3>
                    <div style="margin-top: 1.5em;" class="bg-[#fff212] position-absolute z-0 w-28 h-4"></div>
                </div>
                <div class="flex h-96 gap-6">
                    <div
                        class="flex justify-content-center justify-content-md-start col-12 col-md-4 place-items-start">
                        <div class="flex flex-column">
                            <div>
                                <div class="mb-2 p-3 inline-flex align-center items-center rounded-2xl bg-[#55D852]">
                                    <span class="font-bold text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="50" height="50" fill="#ffffff" viewBox="0 0 256 256">
                                            <rect width="256" height="256" fill="none"></rect>
                                            <rect x="16" y="64" width="224" height="128"
                                                rx="8" fill="none" stroke="#ffffff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="12">
                                            </rect>
                                            <circle cx="128" cy="128" r="32" fill="none"
                                                stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="12"></circle>
                                            <line x1="176" y1="64" x2="240" y2="120"
                                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="12"></line>
                                            <line x1="176" y1="192" x2="240" y2="136"
                                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="12"></line>
                                            <line x1="80" y1="64" x2="16" y2="120"
                                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="12"></line>
                                            <line x1="80" y1="192" x2="16" y2="136"
                                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="12"></line>
                                        </svg></span>
                                </div>
                            </div>
                            <div class="font-bold text-2xl text-gray-700">Simpan Pinjam</div>
                            <div class="text-gray-700">

                                Pengertian koperasi simpan pinjam termasuk contoh koperasi simpan pinjam sudah diatur
                                dalam Peraturan Otoritas Jasa Keuangan (POJK) Nomor 5 Tahun 2014 tentang Penyelenggaraan
                                Usaha Lembaga Keuangan Mikro.

                                Disebutkan, bahwa koperasi simpan pinjam juga harus tunduk pada aturan UU yakni
                                Undang-Undang Nomor 17 tahun 2012 tentang Perkoperasian yang merupakan pengganti dari UU
                                Nomor 25 Tahun 1992 tentang Perkoperasian.

                                Koperasi simpan pinjam adalah lembaga keuangan mikro yang memberikan pinjaman modal
                                kepada para anggotanya. Koperasi simpan pinjam seringkali disebut dengan KSP dan Kospin
                                Jasa.

                                Dalam menjalankan usahanya, koperasi simpan pinjam mengelola modal yang berasal dari
                                simpanan pokok anggota koperasi, simpanan wajib, dan simpanan sukarela. Selain itu,
                                koperasi simpan pinjam juga mendapatkan dana dari skema dana cadangan dari sisa hasil
                                usaha (SHU), modal pinjaman dari pengurus koperasi, dan hibah.</div>
                        </div>
                    </div>
                    <div
                        class="flex justify-content-center justify-content-md-start col-12 col-md-4 place-items-center">
                        <div class="flex flex-column">
                            <div>
                                <div class="mb-2 p-3 inline-flex align-center items-center rounded-2xl bg-[#55D852]">
                                    <span class="font-bold text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="50" height="50" fill="#ffffff" viewBox="0 0 256 256">
                                            <rect width="256" height="256" fill="none"></rect>
                                            <path
                                                d="M240.7,121.8,216,134.1,184,72.9l25-12.5a7.9,7.9,0,0,1,10.6,3.4l24.6,47.1A8,8,0,0,1,240.7,121.8Z"
                                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="12"></path>
                                            <path
                                                d="M40,133.1,15.3,120.7a7.9,7.9,0,0,1-3.5-10.8L36.4,62.8A8,8,0,0,1,47,59.3L72,71.8Z"
                                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="12"></path>
                                            <path
                                                d="M216,134.1l-16,18.8-36.8,36.8a8.5,8.5,0,0,1-7.6,2.1l-58-14.5a8,8,0,0,1-2.9-1.5L40,133.1"
                                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="12"></path>
                                            <path
                                                d="M200,152.9l-44-32-12.8,9.6a32.1,32.1,0,0,1-38.4,0l-5.4-4.1a8.1,8.1,0,0,1-.9-12.1l39.2-39.1a7.9,7.9,0,0,1,5.6-2.3H184"
                                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="12"></path>
                                            <path d="M72.6,71.8l51.3-15a8,8,0,0,1,5.5.4L164,72.9" fill="none"
                                                stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="12"></path>
                                            <path d="M112,212.9l-30.1-7.6a7.4,7.4,0,0,1-3.3-1.7L56,184" fill="none"
                                                stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="12"></path>
                                        </svg></span>
                                </div>
                            </div>
                            <div class="font-bold text-2xl text-gray-700">Jasa</div>
                            <div class="text-gray-700">Koperasi Tunas Kencana salah satu unit usahanya yaitu Jasa
                                penyedia layanan foto kopi dokument dan menjualan alat - alat tulis kantor.</div>
                        </div>
                    </div>
                    <div class="flex justify-content-center justify-content-md-start col-12 col-md-4 place-items-end">
                        <div class="flex flex-column">
                            <div>
                                <div class="mb-2 p-3 inline-flex align-center items-center rounded-2xl bg-[#55D852]">
                                    <span class="font-bold text-white"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="50" height="50" fill="#ffffff" viewBox="0 0 256 256">
                                            <rect width="256" height="256" fill="none"></rect>
                                            <path d="M48,139.6V208a8,8,0,0,0,8,8H200a8,8,0,0,0,8-8V139.6"
                                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="12"></path>
                                            <path
                                                d="M54,40H202a8.1,8.1,0,0,1,7.7,5.8L224,96H32L46.3,45.8A8.1,8.1,0,0,1,54,40Z"
                                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="12"></path>
                                            <path d="M96,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="#ffffff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="12">
                                            </path>
                                            <path d="M160,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="#ffffff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="12">
                                            </path>
                                            <path d="M224,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="#ffffff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="12">
                                            </path>
                                        </svg></span>
                                </div>
                            </div>
                            <div class="font-bold text-2xl text-gray-700">Minimarket</div>
                            <div class="text-gray-700">Warung serba ada Tunas Kencana menyediakan segala kebutuhan
                                sehari-hari untuk anggota koperasi diantaranya kebutuhan sembako, dan kebutuhan warga
                                koperasi sekitarnya. </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="grid grid-cols-3 justify-center gap-5 align-items-stretch" style="height:120px;">
          <div class="flex">
            <div class="d-flex flex-column align-content-start flex-wrap align-self-stretch align-self-md-start">
              <div class="bg-primary">tes</div>
            </div>
          </div>
          <div class="flex">
            <div class="d-flex align-content-start flex-wrap align-self-stretch align-self-md-start">
              <div class="bg-primary">tes</div>
            </div>
          </div>
          <div class="flex">
            <div class="d-flex align-content-start flex-wrap align-self-stretch align-self-md-start">
              <div class="bg-primary">tes</div>
            </div>
          </div>
        </div> -->
            </div>
        </div>
    </section>

    <footer class="text-center text-lg-start" id="footer">
        <section class="p-4">
            <div class="d-grid gap-2 align-items-center align-center justify-content-center p-4">
                <div class="align-center align-items-center d-flex flex-column gap-3 justify-content-center mb-3">
                    <img class="logo h-28" src="{{ asset('landing_page/img/logo-web.png') }}"
                        alt="Koperasi Tunas Kencana" />
                    <h4 class="text-md font-semibold">Koperasi Tunas Kencana</h4>
                </div>
                <div class="d-grid justify-content-center text-white">
                    <h1 class="text-center text-black mb-0" style="margin:0 10%">Jl. Pangeran Kejaksan, Sumber, Kec.
                        Sumber, Kabupaten Cirebon, Jawa Barat 45611</h1>
                    <h1 class="text-center text-black">tunaskencana@gmail.com</h1>
                    <h1 class="text-center text-black">08XXXXXXXXX | 08XX XXXX XXXX</h1>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <a class="nav-link p-2 mx-2 rounded-circle border border-[#fff212]" href="#"
                        style=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="#000" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"></rect>
                            <path
                                d="M245.7,77.7l-30.2,30.1C209.5,177.7,150.5,232,80,232c-14.5,0-26.5-2.3-35.6-6.8-7.3-3.7-10.3-7.6-11.1-8.8a8,8,0,0,1,3.9-11.9c.2-.1,23.8-9.1,39.1-26.4a108.6,108.6,0,0,1-24.7-24.4c-13.7-18.6-28.2-50.9-19.5-99.1a8.1,8.1,0,0,1,5.5-6.2,8,8,0,0,1,8.1,1.9c.3.4,33.6,33.2,74.3,43.8V88a48.3,48.3,0,0,1,48.6-48,48.2,48.2,0,0,1,41,24H240a8,8,0,0,1,7.4,4.9A8.4,8.4,0,0,1,245.7,77.7Z">
                            </path>
                        </svg></a>
                    <a class="nav-link p-2 mx-2 rounded-circle border border-[#fff212]" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000"
                            viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"></rect>
                            <path
                                d="M232,128a104.3,104.3,0,0,1-91.5,103.3,4.1,4.1,0,0,1-4.5-4V152h24a8,8,0,0,0,8-8.5,8.2,8.2,0,0,0-8.3-7.5H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,8-8.5,8.2,8.2,0,0,0-8.3-7.5H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0-8,8.5,8.2,8.2,0,0,0,8.3,7.5H120v75.3a4,4,0,0,1-4.4,4C62.8,224.9,22,179,24.1,124.1A104,104,0,0,1,232,128Z">
                            </path>
                        </svg></a>
                    <a class="nav-link p-2 mx-2 rounded-circle border border-[#fff212]" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000"
                            viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"></rect>
                            <circle cx="128" cy="128" r="32"></circle>
                            <path
                                d="M172,28H84A56,56,0,0,0,28,84v88a56,56,0,0,0,56,56h88a56,56,0,0,0,56-56V84A56,56,0,0,0,172,28ZM128,176a48,48,0,1,1,48-48A48,48,0,0,1,128,176Zm52-88a12,12,0,1,1,12-12A12,12,0,0,1,180,88Z">
                            </path>
                        </svg></a>
                </div>
            </div>
            <hr class="p-0.5 text-gray-300 mb-4">
            <div class="container-fluid container-lg text-center text-md-center">
                <h1 class="text-sm"><b>© 2023 Koperasi Tunas Kencana.</b> All Rights Reserved.</h1>
            </div>
        </section>
    </footer>
    </div>

    <script src="{{ asset('landing_page/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#lightSlider").lightSlider({
                item: 3,
                autoWidth: true,
                slideMove: 1, // slidemove will be 1 if loop is true
                slideMargin: 20,

                addClass: "",
                mode: "slide",
                useCSS: true,
                cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
                easing: "linear", //'for jquery animation',////

                speed: 400, //ms'
                auto: true,
                loop: true,
                slideEndAnimation: true,
                pause: 2000,

                rtl: false,
                adaptiveHeight: false,

                vertical: false,
                verticalHeight: 500,
                vThumbWidth: 500,

                thumbItem: 10,
                pager: false,
                gallery: false,
                galleryMargin: 5,
                thumbMargin: 5,
                currentPagerPosition: "middle",

                enableTouch: true,
                enableDrag: true,
                freeMove: true,
                swipeThreshold: 40,

                responsive: [{
                        breakpoint: 800,
                        settings: {
                            item: 2,
                            slideMove: 1,
                            slideMargin: 6,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            item: 2,
                            slideMove: 1,
                        },
                    },
                ],
            });
        });
    </script>
</body>

</html>
