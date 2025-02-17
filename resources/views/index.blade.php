<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SMK N 10 Semarang</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>


    <link href="{{ asset('assets/img/logo.png') }}" rel="icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div
        class="container-fluid position-relative d-flex align-items-center justify-content-between"
      >
      
        <a
          href="index.html"
          class="logo d-flex align-items-center me-auto me-xl-0"
        >
        <h1 class="sitename"><img src="assets/img/logo.png" height="100px"></h1> 
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          
          {{-- <marquee direction="right" class="hhe"> SMK N 10</marquee> --}}
        
          <span>SMK N 10</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="{{ route('home') }}#hero" class="active">Home<br /></a>
            </li>
            <li><a href="{{ route('home') }}#about">About</a></li>
            <li><a href="{{ route('home') }}#services">Jurusan</a></li>
            <li><a href="{{ route('home') }}#portfolio">Galeri</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li class="dropdown">
              <a href="#"><span>Lainnya</span>
                {{-- <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a> --}}
              <ul>
                <li><a href="{{ route('produk') }}">Produk</a></li>
                <li><a href="{{ route('siswa') }}">Siswa</a></li>
                <li><a href="{{ route('guru') }}">Guru</a></li>
              </ul>
            </li>
            
            <li><a href="{{ route('home') }}#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="login">Login</a>
      </div>
    </header>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid animated" alt="" />
            <h1>Selamat Datang di Website <span>SMK N 10 Semarang</span></h1>
            <p>
              Tempat di mana inovasi, keterampilan, dan masa depan bertemu! 🌟
              Bersiaplah untuk menjadi generasi unggul dengan pendidikan berkualitas dan pengalaman praktis terbaik. 🚀💡
            </p>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>

      <!-- Featured Services Section -->
      <section id="featured-services" class="featured-services section">
        <div class="container">
          <div class="row gy-3">
            <div
              class="col-xl-3 col-md-6 d-flex"
              data-aos="fade-up"
              data-aos-delay="100"
              
            >
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-activity icon"></i></div>
                <h4><a href="{{ route('siswa') }}" class="stretched-link">SISWA</a></h4>
                <p>
                  Para Siswa SMK N 10 Semarang.
                </p>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-xl-3 col-md-6 d-flex"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-bounding-box-circles icon"></i>
                </div>
                <h4><a href="{{ route('guru') }}" class="stretched-link">GURU</a></h4>
                <p>
                  Para Guru SMK N 10 Semarang.
                </p>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-xl-3 col-md-6 d-flex"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                <h4><a href="{{ route('produk') }}" class="stretched-link">Produk</a></h4>
                <p>
                  Produk Hasil SMK N 10 Semarang.
                </p>
              </div>
            </div>
            <!-- End Service Item -->
          </div>

        </div>
      </section>
      <!-- /Featured Services Section -->

      <!-- About Section -->
      <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Profil SMK N 10 Semarang</h2>
          <p>
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up">
          <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-5">
              <div class="about-img">
                <img
                  src="{{ asset('assets/img/img-2.jpg') }}"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>

            <div class="col-lg-7">
              <h3 class="pt-0 pt-lg-5">
                Profil Singkat SMK N 10 Semarang
              </h3>

              <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">Kurikulum</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Fasilitas</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Biaya</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="about-tab1">

                <p class="fst-italic">SMK N 10 Semarang menyediakan kurikulum pembelajaran yang berorientasi pada tiga poin di bawah ini, sehingga memaksimalkan pendidikan peserta didik hingga titik terbaiknya.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ilmu Sosialisasi</h4>
                </div>
                <p>Mempelajari berbagai ilmu sosiologi seperti cara pikir efisien, public speaking, dan keberanian untuk mengutarakan pendapat inovatif.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ilmu Psikologi</h4>
                </div>
                <p>Mendidik peserta didik untuk mengembangkan psikologi mereka dan membuat mereka teguh pada pendirian serta tak goyah dan independen secara pemikiran psikologi.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ilmu Pengetahuan</h4>
                </div>
                <p>Tak lupa, kami juga mengajarkan tentang ilmu pengetahuan dari yang umum bahkan hingga titik spesifik secara mendalam di bidang favoritnya.</p>

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade" id="about-tab2">

                <p class="fst-italic">Dengan menyediakan fasilitas yang lengkap, peserta didik mampu melakukan hal baru tanpa terbatas oleh fasilitas yang tidak memadai.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Laboratorium Komputer</h4>
                </div>
                <p>Menggunakan teknologi yang terbarui, komputer di SMK N 10 Semarang menggunakan hardware yang memungkinkan untuk melakukan rendering dan coding dengan cepat.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ekstrakurikuler dan Klub</h4>
                </div>
                <p>Menyediakan ekskul dan klub untuk membantu peserta didik bersosialisasi dan mengembangkan minat serta bakatnya masing-masing.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ruangan yang Nyaman</h4>
                </div>
                <p>Meja yang bersih dan ruangan yang sejuk memungkinkan peserta didik belajar dengan fokus dan serius tanpa khawatir gerah maupun tidak nyaman.</p>

              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade" id="about-tab3">

                <p class="fst-italic">Biaya yang terjangkau, tidak membuat orang tua dari peserta didik merasa takut berhenti di tengah masa sekolah.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Beasiswa</h4>
                </div>
                <p>Menghadirkan beasiswa untuk siswa berprestasi hingga sekolah dengan potongan harga bahkan hingga tamat sekolah.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ekonomis</h4>
                </div>
                <p>Harga lebih murah dibandingkan dengan sekolah swasta lainnya.</p>
              </div><!-- End Tab 3 Content -->

            </div>

            </div>
          </div>
        </div>
      </section>
      <!-- /About Section -->

    <section id="clients" class="clients section">
      <h2 style="text-align: center">Kolaborasi Bersama :</h2>
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
      
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->
      
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->
      
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->
      
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->
      
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->
      
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->
      
        </div>
      
      </div>
    </section>
    

      <!-- /Call To Action Section -->

      {{-- End of OnFocus --}}
      <section id="onfocus" class="onfocus section dark-background">
        <div class="container-fluid p-0" data-aos="fade-up">
      
          <div class="row g-0">
            <div class="col-lg-6 video-play position-relative">
              <a href="https://youtu.be/1Fpivi5ljhI?si=jOelHCdGOhC7TLY4" class="glightbox pulsating-play-btn"></a>
            </div>
            <div class="col-lg-6">
              <div class="content d-flex flex-column justify-content-center h-100">
                <h3>Manfaat Bersekolah di SMK N 10</h3>
                <p class="fst-italic">
                  SMK N 10 Semarang menyediakan lingkungan pendidikan yang inovatif dan mendukung pengembangan keterampilan serta potensi setiap siswa untuk masa depan yang gemilang.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Program kurikulum yang dirancang untuk mengintegrasikan teori dan praktik secara seimbang.</li>
                  <li><i class="bi bi-check-circle"></i> Fasilitas modern dan teknologi terkini yang mendukung proses pembelajaran.</li>
                  <li><i class="bi bi-check-circle"></i> Dosen dan pengajar yang kompeten, berdedikasi, dan berpengalaman di bidang masing-masing.</li>
                  <li><i class="bi bi-check-circle"></i> Kesempatan magang dan kerja sama dengan institusi serta perusahaan terkemuka.</li>
                  <li><i class="bi bi-check-circle"></i> Dukungan penuh terhadap kegiatan ekstrakurikuler untuk membentuk karakter siswa yang tangguh dan kreatif.</li>
                </ul>
                <a href="#" class="read-more align-self-start"><span>Pelajari Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
      
        </div>
      </section><!-- /Onfocus Section -->

      <!-- Features Section -->
      <section id="features" class="features section">
        <div class="container" data-aos="fade-up">
          <h3>Fitur dalam SMK N 10 Semarang</h3>
          <ul class="nav nav-tabs row gy-4 d-flex">
            <li class="nav-item col-6 col-md-4 col-lg-2">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                <i class="bi bi-book" style="color: #0dcaf0;"></i>
                <h4>Kurikulum Inovatif</h4>
              </a>
            </li><!-- End Tab 1 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                <i class="bi bi-building" style="color: #6610f2;"></i>
                <h4>Fasilitas Modern</h4>
              </a>
            </li><!-- End Tab 2 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                <i class="bi bi-people" style="color: #20c997;"></i>
                <h4>Pengajar Kompeten</h4>
              </a>
            </li><!-- End Tab 3 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                <i class="bi bi-briefcase" style="color: #df1529;"></i>
                <h4>Program Magang</h4>
              </a>
            </li><!-- End Tab 4 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
                <i class="bi bi-trophy" style="color: #0d6efd;"></i>
                <h4>Ekstrakurikuler</h4>
              </a>
            </li><!-- End Tab 5 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
                <i class="bi bi-globe" style="color: #fd7e14;"></i>
                <h4>Jaringan Global</h4>
              </a>
            </li><!-- End Tab 6 Nav -->

          </ul>

          <div class="tab-content">

            <div class="tab-pane fade active show" id="features-tab-1">
              <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                  <h3>Kurikulum Inovatif</h3>
                  <p class="fst-italic">
                    Kurikulum di Joaquin Academy dirancang untuk memadukan teori dan praktik, membantu siswa memahami konsep sekaligus menerapkannya dalam kehidupan nyata.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle-fill"></i> Integrasi teknologi modern dalam pembelajaran.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Pendekatan pembelajaran berbasis proyek (project-based learning).</li>
                    <li><i class="bi bi-check-circle-fill"></i> Fokus pada pengembangan keterampilan abad ke-21.</li>
                  </ul>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/features-curriculum.svg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End Tab Content 1 -->

            <div class="tab-pane fade" id="features-tab-2">
              <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1">
                  <h3>Fasilitas Modern</h3>
                  <p>
                    Dengan fasilitas lengkap dan modern, Joaquin Academy mendukung pengalaman belajar yang nyaman dan efektif bagi setiap siswa.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle-fill"></i> Laboratorium sains dan teknologi yang mutakhir.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Ruang kelas yang dilengkapi dengan perangkat multimedia.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Perpustakaan digital dengan akses ke berbagai sumber belajar.</li>
                  </ul>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 text-center">
                  <img src="assets/img/features-facilities.svg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End Tab Content 2 -->

            <div class="tab-pane fade" id="features-tab-3">
              <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1">
                  <h3>Pengajar Kompeten</h3>
                  <p>
                    Tim pengajar di Joaquin Academy terdiri dari para profesional yang berpengalaman dan berdedikasi tinggi dalam bidangnya.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle-fill"></i> Pendekatan pembelajaran yang personal dan interaktif.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Pelatihan dan pengembangan profesional secara berkala.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Dukungan akademik yang holistik untuk setiap siswa.</li>
                  </ul>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 text-center">
                  <img src="assets/img/features-teachers.svg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End Tab Content 3 -->

            <div class="tab-pane fade" id="features-tab-4">
              <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1">
                  <h3>Program Magang</h3>
                  <p>
                    Joaquin Academy bekerja sama dengan berbagai perusahaan untuk menyediakan program magang yang memberikan pengalaman dunia kerja nyata.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle-fill"></i> Magang di perusahaan terkemuka di dalam dan luar negeri.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Dukungan karir melalui bimbingan dan pelatihan.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Kesempatan membangun jaringan profesional sejak dini.</li>
                  </ul>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 text-center">
                  <img src="assets/img/features-internship.svg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End Tab Content 4 -->

            <div class="tab-pane fade" id="features-tab-5">
              <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1">
                  <h3>Ekstrakurikuler</h3>
                  <p>
                    Joaquin Academy menyediakan berbagai kegiatan ekstrakurikuler untuk mendukung pengembangan minat dan bakat siswa.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle-fill"></i> Klub olahraga, seni, dan sains yang beragam.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Kompetisi dan festival yang diadakan secara rutin.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Dukungan penuh untuk pengembangan bakat siswa.</li>
                  </ul>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 text-center">
                  <img src="assets/img/features-extracurricular.svg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End Tab Content 5 -->

            <div class="tab-pane fade" id="features-tab-6">
              <div class="row gy-4">
                <div class="col-lg-8 order-2 order-lg-1">
                  <h3>Jaringan Global</h3>
                  <p>
                    Joaquin Academy memiliki koneksi dengan institusi pendidikan dan perusahaan global untuk membuka peluang yang lebih luas bagi siswa.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle-fill"></i> Program pertukaran pelajar internasional.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Akses ke seminar dan konferensi global.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Kerja sama dengan universitas ternama di dunia.</li>
                  </ul>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 text-center">
                  <img src="assets/img/features-global-network.svg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End Tab Content 6 -->

          </div>

        </div>

      </section>
      <!-- /Features Section -->

      <!-- Services Section -->
      <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Jurusan SMK N 10 Semarang</h2>
          <p>
            Sekolah dengan Jurusan yang unggulan dan berprestasi.
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-5">
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="service-item">
                  <div class="img">
                      <img src="{{ asset('assets/img/nkn.jpeg') }}" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                      <div class="icon">
                          <ion-icon name="boat-outline"></ion-icon>
                      </div>
                      <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#serviceModal">
                          <h3>Nautika</h3>
                      </a>
                      <p>
                        Jurusan Nautika Kapal Niaga (NKN) di SMK N 10 Semarang berfokus pada
                        pendidikan dan pelatihan di bidang navigasi dan operasional kapal niaga. 
                      </p>
                  </div>
              </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="serviceModalLabel">Nautika</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('assets/img/nkn.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6">
                                <h2>
                                  Nautika Kapal Niaga
                                </h2>
                                <p>
                                    Jurusan Nautika Kapal Niaga (NKN) di SMK N 10 Semarang berfokus pada pendidikan dan pelatihan di bidang navigasi dan operasional kapal niaga. Program ini dirancang untuk mempersiapkan siswa menjadi tenaga profesional yang kompeten dalam mengoperasikan dan mengelola kapal niaga, dengan pengetahuan mendalam tentang navigasi, keselamatan pelayaran, serta hukum maritim. 
                                    Lulusan jurusan ini diharapkan mampu berkarir sebagai perwira nautika di berbagai perusahaan pelayaran nasional maupun internasional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            <!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="service-item">
                  <div class="img">
                      <img src="{{ asset('assets/img/tpk copy.jpg') }}" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                      <div class="icon">
                          <ion-icon name="construct-outline"></ion-icon>
                      </div>
                      <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#serviceModal3">
                          <h3>Tekhnik Permesinan Kapal</h3>
                      </a>
                      <p>
                        Jurusan Teknik Pemesinan Kapal di SMK N 10 Semarang menawarkan pendidikan yang komprehensif dan berkualitas tinggi bagi siswa yang tertarik dengan dunia perkapalan.
                      </p>
                  </div>
              </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="serviceModal3" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="serviceModalLabel">Tekhnik Permesinan Kapal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('assets/img/tpk copy.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6">
                              <h3>Tekhnik Permesinan Kapal</h3>
                                <p>
                                  Jurusan Teknik Pemesinan Kapal di SMK N 10 Semarang menawarkan pendidikan yang komprehensif dan berkualitas tinggi bagi siswa yang tertarik dengan dunia perkapalan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            <!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <div class="service-item">
                  <div class="img">
                      <img src="{{ asset('assets/img/kkb.jpeg') }}" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                      <div class="icon">
                          <i class="bi bi-motherboard"></i>
                      </div>
                      <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#serviceModal4">
                          <h3>Konstruksi Kapal Baja</h3>
                      </a>
                      <p>
                        Jurusan ini menawarkan pendidikan dalam perancangan, pembangunan, dan perbaikan kapal berbahan baja. 
                        
                  </div>
              </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="serviceModal4" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="serviceModalLabel">Konstruksi Kapal Baja</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('assets/img/kkb.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6">
                                <h2>
                                  Konstruksi Kapal Baja
                                </h2>
                                <p>
                                  Jurusan ini menawarkan pendidikan dalam perancangan, pembangunan, dan perbaikan kapal berbahan baja. Siswa akan mempelajari ilmu bahan teknik, struktur kapal, rancangan kapal, fabrikasi, serta pengujian dan perawatan kapal.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

            <!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
              <div class="service-item">
                  <div class="img">
                      <img src="{{ asset('assets/img/tp.jpeg') }}" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                      <div class="icon">
                          <i class="bi bi-hammer"></i>
                      </div>
                      <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#serviceModal5">
                          <h3>Tekhnik Pengelasan</h3>
                      </a>
                      <p>
                        Jurusan ini memfokuskan pada penguasaan teknik pengelasan untuk berbagai jenis logam.
                      </p>
                  </div>
              </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="serviceModal5" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="serviceModalLabel">Tekhnik Pengelasan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('assets/img/tp.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6">
                                <h2>Tekhnik Pengelasan</h2>
                                <p>
                                  : Jurusan ini memfokuskan pada penguasaan teknik pengelasan untuk berbagai jenis logam. Siswa akan mempelajari berbagai metode pengelasan, penggunaan peralatan las, serta standar keselamatan kerja. Lulusan diharapkan mampu bekerja di industri manufaktur, konstruksi, dan perkapalan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            <!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
              <div class="service-item">
                  <div class="img">
                      <img src="{{ asset('assets/img/tbsm.jpeg') }}" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                      <div class="icon">
                          <i class="bi bi-tools"></i>
                      </div>
                      <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#serviceModal6">
                          <h3>Tekhnik Bisnis Sepeda Motor</h3>
                      </a>
                      <p>
                        Jurusan ini berfokus pada perawatan, perbaikan, dan modifikasi sepeda motor.
                      </p>
                  </div>
              </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="serviceModal6" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="serviceModalLabel">Tekhnik Bisnis Sepeda Motor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('assets/img/tbsm.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6">
                              <h3>Tekhnik Bisnis Sepeda Motor</h3>
                                <p>
                                    Jurusan ini berfokus pada perawatan, perbaikan, dan modifikasi sepeda motor. Siswa akan mempelajari sistem mesin, kelistrikan, dan rangka sepeda motor. Lulusan dapat bekerja di bengkel, dealer, atau membuka usaha sendiri di bidang otomotif roda dua.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            <!-- End Service Item -->

            

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <div class="service-item">
                <div class="img">
                  <img src="assets/img/tkro.jpeg" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-easel"></i>
                  </div>
                  <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#serviceModal7">
                    <h3>Teknik Kendaraan Ringan Otomotif (TKRO)
                    </h3>
                  </a>
                  <p>
                    Jurusan ini mempelajari perawatan dan perbaikan kendaraan bermotor roda empat, seperti mobil dan truk ringan
                  </p>
                </div>
              </div>
            </div>

            <!-- modal -->
            <div class="modal fade" id="serviceModal7" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="serviceModalLabel">Tekhnik Kendaraan Ringan Dan Otomotif</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-6">
                                  <img src="{{ asset('assets/img/tkro.jpeg') }}" class="img-fluid" alt="">
                              </div>
                              <div class="col-md-6">
                                  <h3>Tekhnik Kendaraan Ringan Dan Otmotif</h3>
                                  <br>
                                  <p>
                                    Jurusan ini mempelajari perawatan dan perbaikan kendaraan bermotor roda empat, seperti mobil dan truk ringan. Siswa akan belajar tentang sistem mesin, transmisi, kelistrikan, dan sistem suspensi. Lulusan dapat bekerja di bengkel, dealer, atau industri otomotif.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
              <div class="service-item">
                  <div class="img">
                      <img src="{{ asset('assets/img/rpl.jpeg') }}" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                      <div class="icon">
                          <i class="bi bi-laptop"></i>
                      </div>
                      <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#serviceModal9">
                          <h3>Rekayasa Perangkat Lunak</h3>
                      </a>
                      <p>
                        Jurusan ini menekankan pada pengembangan dan pemeliharaan perangkat lunak, termasuk aplikasi, situs web, dan sistem informasi.
                      </p>
                  </div>
              </div>
          </div>
            <!-- modal -->
            <div class="modal fade" id="serviceModal9" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="serviceModalLabel">Rekayasa Perangkat Lunak</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-6">
                                  <img src="{{ asset('assets/img/rpl.jpeg') }}" class="img-fluid" alt="">
                              </div>
                              <div class="col-md-6">
                                  <h3>Jurusan Rekayasa Perangkat Lunak dan Gim</h3>
                                  <br>
                                  <p>
                                    Jurusan ini menekankan pada pengembangan dan pemeliharaan perangkat lunak, termasuk aplikasi, situs web, dan sistem informasi. Siswa akan mempelajari pemrograman, analisis sistem, desain antarmuka, dan pengujian perangkat lunak. Lulusan dapat berkarir sebagai pengembang perangkat lunak, analis sistem, atau profesional IT lainnya.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

            <div
              class="col-xl-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="700"
            >
            <div class="service-item">
              <div class="img">
                  <img src="{{ asset('assets/img/manlog.jpeg') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                  <div class="icon">
                      <i class="bi bi-bar-chart-fill"></i>
                  </div>
                  <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#serviceModal8">
                      <h3>Manajemen Logistik</h3>
                  </a>
                  
                  <p>
                     Jurusan ini mempelajari pengelolaan aliran barang dan jasa, mulai dari perencanaan, pengadaan, penyimpanan, hingga distribusi.
                  </p>
              </div>
          </div>
          
            </div>
              <!--modal-->
            <div class="modal fade" id="serviceModal8" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="serviceModalLabel">Manajemen Logistik</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-6">
                                  <img src="{{ asset('assets/img/manlog.jpeg') }}" class="img-fluid" alt="">
                              </div>
                              <div class="col-md-6">
                                <h3>Jurusan Manajemen Logistik</h3>
                                <br>
                                  <p>
                                    Jurusan ini mempelajari pengelolaan aliran barang dan jasa, mulai dari perencanaan, pengadaan, penyimpanan, hingga distribusi. Siswa akan belajar tentang rantai pasok, manajemen persediaan, dan transportasi. Lulusan memiliki peluang bekerja di berbagai sektor, seperti industri, perdagangan, dan transportasi.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

            <!-- End Service Item -->
          </div>
        </div>
      </section>
      <!-- /Services Section -->

      <!-- Testimonials Section -->
      <section id="testimonials" class="testimonials section dark-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Testimonial</h2>
          <p>
            Testimoni dari Alumni dan Ceo Perusahaan yang berkolaborasi dengan kami.
          </p>
        </div>
        <!-- End Section Title -->

        <img
          src="{{ asset('assets/img/testimonials-bg.jpg') }}"
          class="testimonials-bg"
          alt=""
        />

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/alum/alum-1.jpg" class="testimonial-img" alt="">
                    <h3>Ayanokouji</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Kamu mungkin menyesal mencoba memanipulasiku." – Ayanokouji Kiyotaka.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="assets/img/alum/alum-2.jpg" class="testimonial-img" alt="">
                    <h3>Andi Wijaya</h3>
                    <h4>Alumni Teknologi Informasi</h4>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Ilmu yang saya peroleh dari akademi ini benar-benar menjadi fondasi kokoh dalam karier saya sebagai pengembang web. Pengajarannya tidak hanya fokus pada teknis, tetapi juga membentuk pola pikir kritis yang sangat saya rasakan manfaatnya dalam dunia kerja.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->
                
                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="assets/img/alum/alum-3.jpg" class="testimonial-img" alt="">
                    <h3>Siti Rahma</h3>
                    <h4>Alumni Kewirausahaan</h4>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Pendidikan dari instansi ini memberikan saya keberanian untuk memulai bisnis sendiri. Materi yang disampaikan relevan dan aplikatif, memberikan bekal yang luar biasa dalam mengelola usaha saya hingga berkembang seperti saat ini.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->
                
                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="assets/img/alum/alum-4.jpg" class="testimonial-img" alt="">
                    <h3>Rizky Pratama</h3>
                    <h4>Alumni Ilmu Komputer</h4>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Menjadi bagian dari instansi ini adalah keputusan terbaik yang pernah saya buat. Kurikulumnya dirancang dengan sangat baik, dan dukungan para dosen tidak ternilai harganya. Semua ini telah membimbing saya untuk menjadi profesional di bidang teknologi.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->              

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/alum/alum-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
            </div>
        </div>
      </section>
      <!-- /Testimonials Section -->

      <!-- Portfolio Section -->
      <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Potret di SMK N 10 Semarang</p>
        </div><!-- End Section Title -->
  
        <div class="container-fluid">
  
          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
  
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Guru</li>
              <li data-filter=".filter-product">Siswa</li>
              <li data-filter=".filter-branding">Kejuaraan</li>
              <li data-filter=".filter-books">Kegiatan</li>
            </ul><!-- End Portfolio Filters -->
  
            <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                  <img src="assets/img/gallery/rpll.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="assets/img/gallery/rpll.jpg" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <div class="portfolio-content h-100">
                  <img src="assets/img/gallery/siswa2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="assets/img/gallery/siswa2.jpg" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <div class="portfolio-content h-100">
                  <img src="assets/img/gallery/j.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="assets/img/gallery/j.png" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                <div class="portfolio-content h-100">
                  <img src="assets/img/gallery/keg1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="assets/img/gallery/keg1.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                  <img src="assets/img/gallery/guru1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="assets/img/gallery/guru1.jpg" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <div class="portfolio-content h-100">
                  <img src="assets/img/gallery/siswa1.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="assets/img/gallery/siswa1.jpeg" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('assets/img/gallery/j1.jpeg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="{{ asset('assets/img/gallery/j1.jpeg') }}" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('assets/img/gallery/keg2.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="{{ asset('assets/img/gallery/keg2.jpg') }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('assets/img/gallery/guru.jpeg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="{{ asset('assets/img/gallery/guru.jpeg') }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('assets/img/gallery/mpls.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="{{ asset('assets/img/gallery/mpls.jpg') }}" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('assets/img/gallery/j2.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="{{ asset('assets/img/gallery/j2.jpg') }}" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('assets/img/gallery/keg3.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <a href="{{ asset('assets/img/gallery/keg3.jpg') }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
  
      </section>
      <!-- /Portfolio Section -->

      <!-- Contact Section -->
      <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>
            Hubungi kami dibawah ini
          </p>
        </div>
        <!-- End Section Title -->

        <div class="mb-5">
          <iframe
            style="width: 100%; height: 400px"
            src="https://www.google.com/maps/embed?pb=!3m2!1sen!2sid!4v1736932904067!5m2!1sen!2sid!6m8!1m7!1sHlOwMtrbb0CtBy2jrZ1IZw!2m2!1d-6.96652965810596!2d110.401535711537!3f77.150894!4f0!5f0.7820865974627469"
            frameborder="0"
            allowfullscreen=""
          ></iframe>
        </div>
        <!-- End Google Maps -->

        <div class="container" data-aos="fade">
          <div class="row gy-5 gx-lg-5">
            <div class="col-lg-4">
              <div class="info">
                <h3>Kritik dan Saran</h3>
                <p>
                  Hubungi kami dibawah ini.
                </p>

                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Lokasi:</h4>
                    <p>Jl. Kokrosono No.75 Semarang, Jawa Tengah.</p>
                  </div>
                </div>
                <!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>whiteroom@sch.co.id</p>
                  </div>
                </div>
                <!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>No. Telp:</h4>
                    <p>(024) 1221213</p>
                  </div>
                </div>
                <!-- End Info Item -->
              </div>
            </div>

            <div class="col-lg-8">
              <form
                action="forms/contact.php"
                method="post"
                role="form"
                class="php-email-form"
              >
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      required=""
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required=""
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    required=""
                  />
                </div>
                <div class="form-group mt-3">
                  <textarea
                    class="form-control"
                    name="message"
                    placeholder="Message"
                    required=""
                  ></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit">Send Message</button>
                </div>
              </form>
            </div>
            <!-- End Contact Form -->
          </div>
        </div>
      </section>
      <!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer dark-background">
      <div class="footer-top">
          <div class="container">
              <div class="row gy-4">
                  <div class="col-lg-4 col-md-6 footer-about">
                      <a href="index.html" class="logo flex items-center">
                          <span class="sitename text-xl font-bold">SMK N 10 Semarang.</span>
                      </a>
                      <div class="footer-contact pt-3">
                          <p>SMK N 10 Semarang.</p>
                          <p>50172, Semarang, Jawa Tengah.</p>
                          <p class="mt-3">
                              <strong>Phone:</strong> <span>(024) 26678239</span>
                          </p>
                          <p><strong>Email:</strong> <span>whiteroom@sch.co.id</span></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  
      <div class="copyright text-center py-4 border-t border-gray-700">
          <div class="container px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-content-center justify-content-lg-between items-center">
              <div class="flex flex-col items-center sm:items-start mb-4 sm:mb-0">
                  <div>
                      © Copyright <strong><span>ntesseract</span></strong>. All Rights Reserved
                  </div>
                  <div class="credits">
                      Designed by <a href="https://github.com/PannXXX06" class="text-blue-500 hover:text-blue-400">ntesseract</a>
                  </div>
              </div>
  
              <div class="social-links flex space-x-4 order-first sm:order-last">
                  <a href="" class="text-gray-400 hover:text-blue-500"><i class="bi bi-twitter-x"></i></a>
                  <a href="" class="text-gray-400 hover:text-blue-500"><i class="bi bi-facebook"></i></a>
                  <a href="" class="text-gray-400 hover:text-pink-500"><i class="bi bi-instagram"></i></a>
                  <a href="" class="text-gray-400 hover:text-blue-500"><i class="bi bi-linkedin"></i></a>
              </div>
          </div>
      </div>
  </footer>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>
