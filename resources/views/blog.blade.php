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

  <body class="blog-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div
        class="container-fluid position-relative d-flex align-items-center justify-content-between"
      >
        <a
          href="{{ route('home') }}"
          class="logo d-flex align-items-center me-auto me-xl-0"
        >
        <h1 class="sitename"><img src="assets/img/logo.png" height="100px"></h1> 
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <marquee direction="right" class="hhe"> SMK N 10</marquee>
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
                <li><a href="{{ route('guru') }}">Guru</a></li>
              </ul>
            </li>
            
            <li><a href="{{ route('home') }}#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="{{ route('home') }}#about">Get Started</a>
      </div>
    </header>

    <main class="main">
      <!-- Page Title -->
      <div class="page-title">
        <div
          class="container d-lg-flex justify-content-between align-items-center"
        >
          <h1 class="mb-2 mb-lg-0">Blog</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="/">Home</a></li>
              <li class="current">Blog</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Blog Posts Section -->
      <section id="blog-posts" class="blog-posts section">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4">
              <article>
                <div class="post-img">
                  <img
                    src="{{ asset('assets/img/blog/blog-1.jpg') }}"
                    alt=""
                    class="img-fluid"
                  />
                </div>

                <p class="post-category">Politics</p>

                <h2 class="title">
                  <a href="blog-details.html"
                    >Dolorum optio tempore voluptas dignissimos</a
                  >
                </h2>

                <div class="d-flex align-items-center">
                  <img
                    src="{{ asset('assets/img/blog/blog-author.jpg') }}"
                    alt=""
                    class="img-fluid post-author-img flex-shrink-0"
                  />
                  <div class="post-meta">
                    <p class="post-author">Maria Doe</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jan 1, 2022</time>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <!-- End post list item -->

            <div class="col-lg-4">
              <article>
                <div class="post-img">
                  <img
                    src="{{ asset('assets/img/blog/blog-2.jpg') }}"
                    alt=""
                    class="img-fluid"
                  />
                </div>

                <p class="post-category">Sports</p>

                <h2 class="title">
                  <a href="blog-details.html"
                    >Nisi magni odit consequatur autem nulla dolorem</a
                  >
                </h2>

                <div class="d-flex align-items-center">
                  <img
                    src="assets/img/blog/blog-author-2.jpg"
                    alt=""
                    class="img-fluid post-author-img flex-shrink-0"
                  />
                  <div class="post-meta">
                    <p class="post-author">Allisa Mayer</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 5, 2022</time>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <!-- End post list item -->

            <div class="col-lg-4">
              <article>
                <div class="post-img">
                  <img
                    src="{{ asset('assets/img/blog/blog-3.jpg') }}"
                    alt=""
                    class="img-fluid"
                  />
                </div>

                <p class="post-category">Entertainment</p>

                <h2 class="title">
                  <a href="blog-details.html"
                    >Possimus soluta ut id suscipit ea ut in quo quia et
                    soluta</a
                  >
                </h2>

                <div class="d-flex align-items-center">
                  <img
                    src="assets/img/blog/blog-author-3.jpg"
                    alt=""
                    class="img-fluid post-author-img flex-shrink-0"
                  />
                  <div class="post-meta">
                    <p class="post-author">Mark Dower</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 22, 2022</time>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <!-- End post list item -->

            <div class="col-lg-4">
              <article>
                <div class="post-img">
                  <img
                    src="{{ asset('assets/img/blog/blog-4.jpg') }}"
                    alt=""
                    class="img-fluid"
                  />
                </div>

                <p class="post-category">Sports</p>

                <h2 class="title">
                  <a href="blog-details.html"
                    >Non rem rerum nam cum quo minus olor distincti</a
                  >
                </h2>

                <div class="d-flex align-items-center">
                  <img
                    src="{{ asset('assets/img/blog/blog-author-4.jpg') }}"
                    alt=""
                    class="img-fluid post-author-img flex-shrink-0"
                  />
                  <div class="post-meta">
                    <p class="post-author">Lisa Neymar</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 30, 2022</time>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <!-- End post list item -->

            <div class="col-lg-4">
              <article>
                <div class="post-img">
                  <img
                    src="{{ asset('assets/img/blog/blog-5.jpg') }}"
                    alt=""
                    class="img-fluid"
                  />
                </div>

                <p class="post-category">Politics</p>

                <h2 class="title">
                  <a href="blog-details.html"
                    >Accusamus quaerat aliquam qui debitis facilis
                    consequatur</a
                  >
                </h2>

                <div class="d-flex align-items-center">
                  <img
                    src="{{ asset('assets/img/blog/blog-author-5.jpg') }}"
                    alt=""
                    class="img-fluid post-author-img flex-shrink-0"
                  />
                  <div class="post-meta">
                    <p class="post-author">Denis Peterson</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jan 30, 2022</time>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <!-- End post list item -->

            <div class="col-lg-4">
              <article>
                <div class="post-img">
                  <img
                    src="{{ asset('assets/img/blog/blog-6.jpg') }}"
                    alt=""
                    class="img-fluid"
                  />
                </div>

                <p class="post-category">Entertainment</p>

                <h2 class="title">
                  <a href="blog-details.html"
                    >Distinctio provident quibusdam numquam aperiam aut</a
                  >
                </h2>

                <div class="d-flex align-items-center">
                  <img
                    src="{{ asset('assets/img/blog/blog-author-6.jpg') }}"
                    alt=""
                    class="img-fluid post-author-img flex-shrink-0"
                  />
                  <div class="post-meta">
                    <p class="post-author">Mika Lendon</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Feb 14, 2022</time>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <!-- End post list item -->
          </div>
        </div>
      </section>
      <!-- /Blog Posts Section -->

      <!-- Blog Pagination Section -->
      <section id="blog-pagination" class="blog-pagination section">
        <div class="container">
          <div class="d-flex justify-content-center">
            <ul>
              <li>
                <a href="#"><i class="bi bi-chevron-left"></i></a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#" class="active">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li>...</li>
              <li><a href="#">10</a></li>
              <li>
                <a href="#"><i class="bi bi-chevron-right"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- /Blog Pagination Section -->
    </main>

    <<footer id="footer" class="footer dark-background">
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
                      Designed by <a href="https://github.com/ntesseract" class="text-blue-500 hover:text-blue-400">ntesseract</a>
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
