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

  <body class="index-page bg-blue-50">
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div
        class="container-fluid position-relative d-flex align-items-center justify-content-between"
      >
      
        <a
          href="index.html"
          class="logo d-flex align-items-center me-auto me-xl-0"
        >
        <h1 class="sitename"><img src="assets/img/logo.png" height="100px"></h1> 
          <!-- Uncomment the line
             below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          
          <marquee direction="right" class="hhe"> SMK N 10</marquee>
        
          <span></span>
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

        <a class="btn-getstarted" href="login">Login</a>
      </div>
    </header>

    <main class="bg-blue-50">
        <section id="teachers" class="teachers">
            <div class="container" data-aos="fade-up">
                <div class="section-header flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold">Guru</h2>
                        <p class="text-gray-500">
                            Jajaran Guru SMK N 10 Semarang
                        </p>
                    </div>
                    <div class="relative w-full sm:w-96">
                        <input type="text" class="search-input w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" placeholder="Cari guru..." oninput="filterTeachers(this.value)">
                    </div>
                </div>
        
                <div class="row gy-6 teacher-list mt-4">
                    @if(count($gurus) > 0)
                    @foreach($gurus as $guru)
                    <div class="col-lg-3 col-md-4 col-sm-6 teacher-card" data-aos="fade-up" data-aos-delay="100" style="display: block;">
                        <div class="card bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="card-img">
                                <img src="{{ $guru->foto ? url('storage/' . $guru->foto) : asset('assets/img/default-avatar.jpg') }}" class="w-full h-64 object-cover rounded-t-md" alt="{{ $guru->namaguru }}">
                            </div>
                            <div class="card-body p-4 text-center">
                                <h5 class="card-title text-lg font-medium">{{ $guru->namaguru }}</h5>
                                <div class="teacher-info text-gray-500">
                                    <p class="nip mb-1"><strong>NIP:</strong> {{ $guru->nip }}</p>
                                    <p class="gender mb-2">
                                        <i class="bi {{ $guru->jeniskelamin == 'L' ? 'bi-gender-male text-blue-500' : 'bi-gender-female text-pink-500' }}"></i>
                                        {{ $guru->jeniskelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                                    </p>
                                    <p class="contact">
                                        <i class="bi bi-telephone"></i> {{ $guru->kontak }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12 text-center py-8">
                        <h3 class="text-gray-500 font-medium">Tidak Ada</h3>
                    </div>
                    @endif
                </div>
        
                @if($gurus->hasPages())
                <div class="d-flex justify-content-center mt-8">
                    {{ $gurus->links() }}
                </div>
                @endif
            </div>
        </section>
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
    
    <script>
        function filterTeachers(searchValue) {
            const teacherCards = document.querySelectorAll('.teacher-card');
            const searchValueLower = searchValue.toLowerCase();
            let hasResults = false;
    
            teacherCards.forEach(card => {
                const teacherName = card.querySelector('.card-title').textContent.toLowerCase();
                const teacherNip = card.querySelector('.nip').textContent.toLowerCase();
    
                if (teacherName.includes(searchValueLower) || teacherNip.includes(searchValueLower)) {
                    card.style.display = 'block';
                    hasResults = true;
                } else {
                    card.style.display = 'none';
                }
            });
    
            const noResultsMessage = document.querySelector('.col-12.text-center.py-8');
            if (noResultsMessage) {
                noResultsMessage.style.display = hasResults ? 'none' : 'block';
            }
        }
    </script>

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
