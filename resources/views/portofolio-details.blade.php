<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SMK N 10 Semarang</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />


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

  <body class="portfolio-details-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div
        class="container-fluid position-relative d-flex align-items-center justify-content-between"
      >
        <a
          href="index.html"
          class="logo d-flex align-items-center me-auto me-xl-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">HeroBiz</h1>
          <span>.</span>
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
              <a href="#"
                ><span>Lainnya</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li><a href="{{ route('produk') }}">Produk</a></li>
                <li><a href="{{ route('siswa') }}">Siswa</a></li>
                <li><a href="#">Guru</a></li>
              </ul>
            </li>
            
            <li><a href="{{ route('home') }}#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="index.html#about">Get Started</a>
      </div>
    </header>

    <main class="main">
      <!-- Page Title -->
      <div class="page-title">
        <div
          class="container d-lg-flex justify-content-between align-items-center"
        >
          <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Portfolio Details</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Portfolio Details Section -->
      <section id="portfolio-details" class="portfolio-details section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Portfolio Details</h2>
          <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up">
          <div class="portfolio-details-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                },
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <img src="assets/img/portfolio/app-1.jpg" alt="" />
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/product-1.jpg" alt="" />
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/branding-1.jpg" alt="" />
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/books-1.jpg" alt="" />
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
          </div>

          <div class="row justify-content-between gy-4 mt-4">
            <div class="col-lg-8" data-aos="fade-up">
              <div class="portfolio-description">
                <h2>This is an example of portfolio details</h2>
                <p>
                  Autem ipsum nam porro corporis rerum. Quis eos dolorem eos
                  itaque inventore commodi labore quia quia. Exercitationem
                  repudiandae officiis neque suscipit non officia eaque itaque
                  enim. Voluptatem officia accusantium nesciunt est omnis
                  tempora consectetur dignissimos. Sequi nulla at esse enim cum
                  deserunt eius.
                </p>
                <p>
                  Amet consequatur qui dolore veniam voluptatem voluptatem sit.
                  Non aspernatur atque natus ut cum nam et. Praesentium error
                  dolores rerum minus sequi quia veritatis eum. Eos et doloribus
                  doloremque nesciunt molestiae laboriosam.
                </p>

                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span
                      >Export tempor illum tamen malis malis eram quae irure
                      esse labore quem cillum quid cillum eram malis quorum
                      velit fore eram velit sunt aliqua noster fugiat irure amet
                      legam anim culpa.</span
                    >
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <div>
                    <img
                      src="assets/img/testimonials/testimonials-2.jpg"
                      class="testimonial-img"
                      alt=""
                    />
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                  </div>
                </div>

                <p>
                  Impedit ipsum quae et aliquid doloribus et voluptatem quasi.
                  Perspiciatis occaecati earum et magnam animi. Quibusdam non
                  qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque
                  minus deserunt assumenda tempore. Delectus voluptas
                  necessitatibus est.
                </p>

                <p>
                  Sunt voluptatum sapiente facilis quo odio aut ipsum repellat
                  debitis. Molestiae et autem libero. Explicabo et quod
                  necessitatibus similique quis dolor eum. Numquam eaque
                  praesentium rem et qui nesciunt.
                </p>
              </div>
            </div>

            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                  <li><strong>Category</strong> Web design</li>
                  <li><strong>Client</strong> ASU Company</li>
                  <li><strong>Project date</strong> 01 March, 2020</li>
                  <li>
                    <strong>Project URL</strong> <a href="#">www.example.com</a>
                  </li>
                  <li>
                    <a href="#" class="btn-visit align-self-start"
                      >Visit Website</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Portfolio Details Section -->
    </main>
    
    <footer id="footer" class="footer dark-background">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="index.html" class="logo d-flex align-items-center">
                <span class="sitename">HeroBiz</span>
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

      <div class="copyright text-center">
        <div
          class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center"
        >
          <div
            class="d-flex flex-column align-items-center align-items-lg-start"
          >
            <div>
              © Copyright <strong><span>ntesseract</span></strong
              >. All Rights Reserved
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
              Designed by <a href="https://github.com/PannXXX06">ntesseract</a>
            </div>
          </div>

          <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
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
