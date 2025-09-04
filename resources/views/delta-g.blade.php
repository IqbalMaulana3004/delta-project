<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delta Group Banjarmasin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
  <!-- Alpine js -->
  <script src="https://unpkg.com/alpinejs" defer></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- tailwind css -->
   @vite('resources/css/app.css')

  <!-- responsive css -->
  <link rel="stylesheet" href="./src/css/responsive_ship.css">
  <link rel="stylesheet" href="./src/css/main.css">

  <style>
    html {
      scroll-behavior: smooth;
    }

    @media (max-width: 1024px) {
      .kapal {
        width: 60px;
      }

      .svg-button {
        transform: translate(-50%, -50%);
        padding: 0.25rem 0.5rem;
        font-size: 0.625rem;
        /* text-xs */
      }

      .svg-button i {
        font-size: 0.75rem;
      }

      .svg-button span {
        font-size: 0.625rem;
      }

      #modalTitle {
        font-size: 1rem;
      }

      #modalDescription {
        font-size: 0.875rem;
      }
    }

    @media (max-width: 768px) {
      .kapal {
        width: 40px;
      }

      .svg-button {
        padding: 0.25rem 0.4rem;
        font-size: 0.5rem;
      }

      .svg-button i {
        font-size: 0.625rem;
      }

      .svg-button span {
        font-size: 0.5rem;
      }

      #modalTitle {
        font-size: 0.875rem;
      }

      #modalDescription {
        font-size: 0.75rem;
      }
    }
  </style>
</head>

<body class="scroll-smooth" data-company="PT Delta Group Banjarmasin" data-color="bg-blue-900"
  data-accent="text-red-600">
  <!-- Tombol Fixed WhatsApp -->
  <div class="fixed bottom-6 right-6 z-50">
    <div class="relative">
      <!-- Tombol utama -->
      <button id="wa-toggle" class="bg-green-500 hover:bg-green-600 text-white w-14 h-14 p-3 rounded-full shadow-lg">
        <i class="fab fa-whatsapp text-2xl"></i>
      </button>

      <!-- List Kontak -->
      <div id="wa-list" style="display: none;"
        class="absolute bottom-14 right-0 w-56 bg-gray-50 border border-gray-200 rounded-lg shadow-lg p-2">
        <a href="https://wa.me/+628315408471" target="_blank" class="flex items-center p-2 hover:bg-gray-100 rounded">
          <i class="fab fa-whatsapp text-green-500 mr-2"></i>
          Nadia
        </a>
        <a href="https://wa.me/+6285923284745" target="_blank" class="flex items-center p-2 hover:bg-gray-100 rounded">
          <i class="fab fa-whatsapp text-green-500 mr-2"></i>
          Kania
        </a>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="bg-red-800 text-white backdrop-blur-sm shadow fixed w-full z-50 px-6">
    <div class="max-w-7xl mx-auto md:px-10">
      <div class="flex justify-between items-center h-16">
        <div class="flex-shrink-0 flex items-center space-x-2">
          <img src="/storage/img/logo.webp" alt="Delta Group Logo" class="h-10 rounded-full">
          <span class="text-md font-bold">DELTA GROUP</span>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-6">
            <a href="#home"
              class="relative text-sm font-medium px-3 py-0 text-white after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
              Beranda
            </a>
            <a href="#about"
              class="relative text-sm font-medium px-3 py-0 text-white after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">Profil</a>
            <a href="#companies"
              class="relative text-sm font-medium px-3 py-0 text-white after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">Perusahaan</a>
            <a href="#clients"
              class="relative text-sm font-medium px-3 py-0 text-white after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">Klien</a>

          </div>
        </div>
        <div class="md:hidden">
          <button class="mobile-menu-button p-2 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Mobile Menu (hidden by default) -->
  <div class="mobile-menu hidden md:hidden fixed w-full z-10 mt-16 bg-blue-900 bg-opacity-95">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <a href="#" class="block px-3 py-2 text-base font-medium hover:bg-blue-800">Beranda</a>
      <a href="#about" class="block px-3 py-2 text-base font-medium hover:bg-blue-800">Profil</a>
      <a href="#companies" class="block px-3 py-2 text-base font-medium hover:bg-blue-800">Perusahaan</a>
      <a href="#clients" class="block px-3 py-2 text-base font-medium hover:bg-blue-800">Klien</a>
    </div>
  </div>

  <!-- Hero -->
  <section id="home" class="relative h-screen flex items-center justify-center overflow-hidden">
    <img src="/storage/img/background.webp" alt="Kapal besar mengangkut batu bara melintasi lautan dengan matahari terbenam"
      class="absolute inset-0 w-full h-full object-cover opacity-80">
    <div class="absolute inset-0 blue-gradient opacity-80"></div>
    <div class="container mx-auto px-6 relative z-10 text-center text-white">
      <div class="flex justify-center mb-6 mt-10">
        <img src="/storage/img/logo.webp" alt="Delta Group Company logo modern dengan ikon segitiga biru gradasi dan teks putih"
          class="h-20 rounded-full" />
      </div>
      <h1 class="text-4xl md:text-6xl font-bold mb-6 drop-shadow-lg">SOLUSI MARITIM <span
          class="font-bold bg-gradient-to-r from-yellow-500 via-amber-500 to-yellow-600 text-transparent bg-clip-text text-shadow-md">TERPERCAYA</span>
      </h1>
      <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Perusahaan terpercaya di bidang jasa maritim, konstruksi,
        dan pengadaan barang dengan layanan
        terintegrasi dan armada modern.</p>
    </div>
  </section>

  <section id="about" class="h-screen py-20">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4" words-slide-up text-split>Tentang Kami</h2>
        <div class="w-20 h-1 bg-red-600 mx-auto"></div>
      </div>
      <div class="flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2" data-gsap="fade-up">
          <img src="/storage/img/about.webp" alt="Pelabuhan batu bara modern dengan kapal besar sedang bersandar"
            class="rounded-lg shadow-xl">
        </div>
        <div class="md:w-1/2">
          <h3 class="text-2xl font-bold text-gray-800 mb-4 opacity-0" words-slide-from-right text-split>Delta Group
            Company</h3>
          <p class="text-gray-600 mb-6 opacity-0" words-slide-up text-split>Didirikan pada tahun 2005, PT Batubara
            Maritime
            telah tumbuh menjadi salah satu perusahaan pengangkutan batu bara terkemuka di Indonesia. Dengan
            komitmen terhadap keselamatan, keandalan, dan efisiensi, kami melayani klien dari berbagai
            industri dengan solusi transportasi maritim yang terintegrasi.</p>
          <ul class="space-y-3 opacity-0" words-slide-from-right text-split>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-red-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Lebih dari 11 tahun pengalaman di industri batu bara</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-red-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Mengoperasikan lebih dari 25 kapal pengangkut</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-red-600 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Jaringan distribusi ke lebih dari 10 provinsi</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-16 bg-red-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-4 gap-8 text-center" data-gsap="fade-left">
        <div class="p-4">
          <div class="flex items-center justify-center">
            <div class="counter text-4xl font-bold mb-2" data-target="100">0</div>
            <span class="text-4xl font-semibold mb-[6px]">+</span>
          </div>
          <div class="text-sm uppercase tracking-wider">Proyek Selesai</div>
        </div>
        <div class="p-4">
          <div class="flex items-center justify-center">
            <div class="counter text-4xl font-bold mb-2" data-target="50">0</div>
            <span class="text-4xl font-semibold mb-[6px]">+</span>
          </div>
          <div class="text-sm uppercase tracking-wider">Kapal Terdaftar</div>
        </div>
        <div class="p-4">
          <div class="flex items-center justify-center">
            <div class="counter text-4xl font-bold mb-2" data-target="150"></div>
            <span class="text-4xl font-semibold mb-[6px]">+</span>
          </div>
          <div class="text-sm uppercase tracking-wider">Klien Puas</div>
        </div>
        <div class="p-4">
          <div class="flex items-center justify-center">
            <div class="counter text-4xl font-bold mb-2" data-target="50">0</div>
            <span class="text-4xl font-semibold mb-[6px]">+</span>
          </div>
          <div class="text-sm uppercase tracking-wider">Area Operasi</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sejarah -->
  <section class="py-10 bg-gray-100 mt-5">
    <div class="container mx-auto px-6">
      <div class="text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4" words-slide-up text-split>Perjalanan Delta Group
          Menuju Kesuksesan
        </h2>
        <div class="w-20 h-1 bg-red-600 mx-auto"></div>
        <p class="mt-5" words-slide-from-right text-split>Delta Taklukkan Setiap Ombak, Catat Prestasi Hebat, dan Terus
          Pimpin Industri Maritim.
        </p>
      </div>
    </div>
    <div class="relative w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] overflow-hidden" id="svgContainer">
      <img src="/storage/img/jalur-kapal-7.webp" alt="sungai" class="absolute object-cover w-full z-0">
      <svg id="riverSvg" viewBox="-0.1 -4.1 18.2 4.2" class="w-full h-auto sm:mt-[120px] mt-10">
        <path id="river" d="M 0 0 L 10 0 C 12 0 12 -2 10 -2 C 8 -2 8 -4 10 -4 H 18" stroke="#FF0000" stroke-width="0.1"
          fill="none" />
      </svg>

      <img id="ship" src="/storage/img/kapal.webp" alt="kapal" class="absolute w-8 sm:w-14 md:w-16 top-0 left-0 z-30">
    </div>
  </section>

  <!-- Group Perusahaan -->
  <section class="py-10 bg-gray-100" id="companies">
    <div class="container mx-auto px-6">
      <div class="text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4" words-slide-up text-split>Group Perusahaan</h2>
        <div class="w-20 h-1 bg-red-600 mx-auto"></div>
        <p class="mt-5" words-slide-from-right text-split>Sebagai bagian dari grup perusahaan yang telah lama berdiri
          dan terus berkembang, kami
          bangga
          mempersembahkan lini usaha yang tergabung dalam keluarga besar kami.</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">

        <!-- Card 1 -->
        <div
          class="border-t-4 border-red-600 relative flex flex-col items-center p-5 rounded-md group w-full h-[250px] transition-all duration-300 shadow-lg hover:h-[390px] hover:shadow-2xl hover:z-20">
          <div
            class="text-blue-900 text-4xl font-bold top-5 absolute w-[270px] h-[180px] group-hover:scale-[0.9] transition-all duration-300 shadow-lg">
            <img src="/storage/img/jasa-sandblasting-lampung.webp" alt="CV Delta Barito Global" class="rounded-md object-cover">
          </div>
          <div
            class="absolute top-[210px] w-full h-[35px] p-[10px] text-center transition-all duration-300 group-hover:top-[200px] group-hover:h-[170px] flex flex-col items-center justify-center">
            <h4 class="text-lg font-semibold mb-3">PT Delta Borneo Global</h4>
            <p class="text-gray-600 hidden group-hover:block ">Bergerak di teknik perkapalan, maritim, dan konstruksi
            </p>
            <a href="delta-borneo.html" class="hidden group-hover:block py-1 mt-2 bg-red-700 w-60 rounded-full text-yellow-50">
              Lihat lebih lanjut
            </a>
          </div>
        </div>

        <!-- Card 2 -->
        <div
          class="border-t-4 border-blue-600 relative flex flex-col items-center p-5 rounded-md group w-full h-[250px] transition-all duration-300 shadow-lg hover:h-[390px] hover:shadow-2xl hover:z-20">
          <div
            class="text-blue-900 text-4xl font-bold top-5 absolute w-[270px] h-[180px] group-hover:scale-[0.9] transition-all duration-300 shadow-lg">
            <img src="/storage/img/jasa-sandblasting-lampung.webp" alt="PT Delta Indo Marine" class="rounded-md object-cover">
          </div>
          <div
            class="absolute top-[210px] w-full h-[35px] p-[10px] text-center transition-all duration-300 group-hover:top-[200px] group-hover:h-[170px] flex flex-col items-center justify-center">
            <h4 class="text-lg font-semibold mb-3">PT Delta Indo Marine</h4>
            <p class="text-gray-600 hidden group-hover:block">Bergerak di teknik perkapalan, maritim, dan konstruksi</p>
            <a href="delta-indo.html" class="hidden group-hover:block py-1 mt-2 bg-red-700 w-60 rounded-full text-yellow-50">
              Lihat lebih lanjut
            </a>
          </div>
        </div>

        <!-- Card 3 -->
        <div
          class="border-t-4 border-yellow-600 relative flex flex-col items-center p-5 rounded-md group w-full h-[250px] transition-all duration-300 shadow-lg hover:h-[390px] hover:shadow-2xl hover:z-20">
          <div
            class="text-blue-900 text-4xl font-bold top-5 absolute w-[270px] h-[180px] group-hover:scale-[0.9] transition-all duration-300 shadow-lg">
            <img src="/storage/img/jasa-sandblasting-lampung.webp" alt="PT Delta Borneo Global" class="rounded-md object-cover">
          </div>
          <div
            class="absolute top-[210px] w-full h-[35px] p-[10px] text-center transition-all duration-300 group-hover:top-[200px] group-hover:h-[170px] flex flex-col items-center justify-center">
            <h4 class="text-lg font-semibold mb-3">CV Delta Barito Global</h4>
            <p class="text-gray-600 hidden group-hover:block">Bergerak di teknik perkapalan, maritim, dan konstruksi</p>
            <a href="delta-barito.html" class="hidden group-hover:block py-1 mt-2 bg-red-700 w-60 rounded-full text-yellow-50">
              Lihat lebih lanjut
            </a>
          </div>
        </div>

      </div>


    </div>
  </section>

  <!-- Klien -->
  <section class="bg-[#f6f7fb] py-10 mb-16" id="clients">
    <div class="container mx-auto px-6 overflow-hidden">
      <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4" words-slide-up text-split>Klien Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto" words-slide-from-right text-split>Berbagai perusahaan telah
          mempercayakan proyek mereka kepada
          kami sebagai mitra profesional</p>
        <div class="w-20 h-1 bg-red-600 mx-auto mt-4"></div>
      </div>
      <div class="w-full">
        <div class="flex items-center justify-center gap-20 p-5">
          <div class="overflow-hidden p-2 items-center flex justify-center h-[150px] w-auto">
            <img src="/storage/img/adaro.webp" class="w-24 h-auto object-contain" fade-1 />
            <img src="/storage/img/bek.webp" class="w-24 h-auto object-contain opacity-0" fade-2 />
          </div>
          <div class="overflow-hidden p-2 items-center flex justify-center h-[150px] w-auto">
            <img src="/storage/img/jhonlin.webp" class="w-24 h-auto object-contain" fade-3 />
            <img src="/storage/img/kpc.webp" class="w-24 h-auto object-contain opacity-0" fade-4 />
          </div>
          <div class="overflow-hidden p-2 items-center flex justify-center h-[150px] w-auto">
            <img src="/storage/img/dh.webp" class="w-24 h-auto object-contain" fade-5 />
            <img src="/storage/img/arutmin.webp" class="w-24 h-auto object-contain opacity-0" fade-6 />
          </div>
          <div class="overflow-hidden p-2 items-center flex justify-center h-[150px] w-auto">
            <img src="/storage/img/hasnur.webp" class="w-24 h-auto object-contain" fade-7 />
            <img src="/storage/img/mpp.webp" class="w-24 h-auto object-contain opacity-0" fade-8 />
          </div>
          <div class="overflow-hidden p-2 items-center flex justify-center h-[150px] w-auto">
            <img src="/storage/img/tjm.webp" class="w-24 h-auto object-contain" fade-9 />
            <img src="/storage/img/berau.webp" class="w-24 h-auto object-contain opacity-0" fade-10 />
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="h-96 bg-gray-100">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3983.271097019718!2d114.57978437497172!3d-3.2828349966921064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zM8KwMTYnNTguMiJTIDExNMKwMzQnNTYuNSJF!5e0!3m2!1sen!2sid!4v1753235532319!5m2!1sen!2sid"
      width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white pt-16 pb-8 sm:px-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-4 gap-8 mb-12">
        <div>
          <img src="logo.webp" alt="PT Delta Borneo Global Footer Logo - Simplified version of main logo"
            class="h-10 mb-4 rounded-full">
          <p class="text-gray-400 mb-4">Solusi maritim terdepan untuk operasi kapal yang efisien dan aman.</p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-4">Layanan</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white transition">Penyewaan Kapal</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Perbaikan Kapal</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Perawatan Kapal</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Konsultasi Maritim</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Sertifikasi Kapal</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-4">Perusahaan</h4>
          <ul class="space-y-2">
            <li><a href="#about" class="text-gray-400 hover:text-white transition">Tentang Kami</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Tim Kami</a></li>
            <li><a href="#client" class="text-gray-400 hover:text-white transition">Karir</a></li>
            <!-- <li><a href="#" class="text-gray-400 hover:text-white transition">Blog</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">FAQ</a></li> -->
          </ul>
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-4">Kontak</h4>
          <address class="not-italic text-gray-400 space-y-2">
            <p>Jl. Perdagangan Komplek Raudatul Permai RT.11 RW.001 N0.17<br>
              Banjarmasin Utara, Kota Banjarmasin<br>
              Indonesia 70127</p>
            <p><i class="fas fa-phone-alt mr-2"></i> 0831-5408-471</p>
            <p><i class="fas fa-envelope mr-2"></i> info@deltagroupbjm.co.id</p>
          </address>
        </div>
      </div>

      <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
        <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2023 PT Delta Borneo Global. All rights reserved.</p>
        <div class="flex space-x-6">
          <a href="#" class="text-gray-400 hover:text-white text-sm transition">Kebijakan Privasi</a>
          <a href="#" class="text-gray-400 hover:text-white text-sm transition">Syarat & Ketentuan</a>
          <a href="#" class="text-gray-400 hover:text-white text-sm transition">Sitemap</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal -->
  <div id="infoModal" class="hidden fixed inset-0 z-50 flex items-center justify-center backdrop-blur-sm bg-black/50">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-3xl w-full relative">
      <button id="closeModalBtn"
        class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">&times;</button>
      <img id="modalImage" src="" alt="Info" class="w-full h-auto rounded">
      <p id="modalTitle" class="mt-4 text-center font-semibold text-xl"></p>
      <p id="modalDescription" class="mt-2 text-center text-gray-700"></p>
    </div>
  </div>

  <script src="./src/js/counter.js"></script>
  <script type="module" src="./src/js/boat.js"></script>
  <script type="module" src="./src/js/animationPartner.js"></script>
  <script type="module" src="./src/js/flipUp.js"></script>
  <script type="module" src="./src/js/fadeLeft.js"></script>
  <script type="module" src="./src/js/scrollTriggers.js"></script>

  <!-- Alpine.js -->
  <script type="module" src="./src/js/whatsappBtn.js"></script>

  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    lucide.createIcons();
  </script>
</body>

</html>
