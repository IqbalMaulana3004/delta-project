<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delta Group | Home</title>

    {{-- tailwind --}}
    @vite('resources/css/app.css')
    @vite('resources/js/delta-group.js')

    <!-- CSS Leaflet -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" /> --}}

</head>
<body>
    <nav class="bg-red-800 w-full px-6 text-white backdrop-blur-sm shadow-md fixed z-50">
        <div class="max-w-7xl mx-auto md:px-10">
            <div class="py-3 flex items-center justify-between h-16">
                <div class="flex items-center space-x-4">
                    <img src="/storage/img/logo.webp" alt="logo" class="w-10 rounded">
                    <p class="text-lg font-montserrat font-bold">DELTA GROUP</p>
                </div>
                <div class="hidden md:block">
                    <ul class="flex space-x-5">
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#group">Perusahaan</a></li>
                        <li><a href="#clien">Karir</a></li>
                        <li><a href="#group">Kontak</a></li>
                        
                    </ul>
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
    <section id="home" class="relative w-full h-screen bg-amber-800 overflow-hidden flex items-center justify-center">
        <div class="absolute text-center z-20">
             <h1 class="text-4xl md:text-6xl font-bold mb-6 drop-shadow-lg">SOLUSI MARITIM <span
                class="font-bold bg-gradient-to-r from-yellow-500 via-amber-500 to-yellow-600 text-transparent bg-clip-text text-shadow-md">TERPERCAYA</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Perusahaan terpercaya di bidang jasa maritim, konstruksi,
                dan pengadaan barang dengan layanan
                terintegrasi dan armada modern.</p>
        </div>
        <div class="carousel flex w-full h-full relative">
            <img src="/storage/img/background.webp" alt="slide 1" class="absolute w-full h-full object-cover">
            <img src="/storage/img/angkut.webp" alt="slide 2" class="absolute w-full h-full object-cover">
            <img src="/storage/img/Kapal-batu-bara.webp" alt="slide 3" class="absolute w-full h-full object-cover">
            {{-- <img src="/storage/img/pelabuhan.webp" alt="slide 4" class="absolute w-full h-full object-cover"> --}}
            {{-- <img src="/storage/img/tongkang.webp" alt="slide 5" class="absolute w-full h-full object-cover"> --}}
        </div>
        <!-- Navigation buttons -->
        <button id="prev" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white text-black px-4 py-2 rounded z-30">Prev</button>
        <button id="next" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white text-black px-4 py-2 rounded z-30">Next</button>
    </section>

    <section id="about" class="h-screen py-20">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tentang Kami</h2>
        <div class="w-20 h-1 bg-red-600 mx-auto"></div>
      </div>
      <div class="flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2" data-gsap="fade-up">
          <img src="/storage/img/about.webp" alt="Pelabuhan batu bara modern dengan kapal besar sedang bersandar"
            class="rounded-lg shadow-xl">
        </div>
        <div class="md:w-1/2">
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Delta Group
            Company</h3>
          <p class="text-gray-600 mb-6">Didirikan pada tahun 2005, PT Batubara
            Maritime
            telah tumbuh menjadi salah satu perusahaan pengangkutan batu bara terkemuka di Indonesia. Dengan
            komitmen terhadap keselamatan, keandalan, dan efisiensi, kami melayani klien dari berbagai
            industri dengan solusi transportasi maritim yang terintegrasi.</p>
          <ul class="space-y-3">
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

    <section class="py-16 bg-red-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 text-center" data-gsap="fade-left">
                <div class="p-4">
                    <div class="flex items-center justify-center">
                        <div class="counter text-4xl font-bold mb-2" data-target="100">0</div>
                        <span class="text-4xl font-semibold mb-[6px]">+</span>
                    </div>
                    <div class="text-sm uppercase tracking-wider">Jenis Kapal</div>
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
                        <span class="text-4xl font-semibold mb-[6px]">0+</span>
                    </div>
                    <div class="text-sm uppercase tracking-wider">Proyek Selesai</div>
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
    <section class="bg-gray-100 py-12">
        <div class="text-center mb-5">
            <h3 class="text-3xl font-bold">Sejarah Kami</h3>
            <p class="mb-2">Group kami menempuh perjalanan yang pangjang dalam sepakterjangnya</p>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded"></div>
        </div>
        <div class="">
            <img src="/storage/img/jalur-kapal-7.png" alt="sungai" class="w-full h-84">
        </div>
    </section>

    <section class="h-screen bg-gray-100 py-6">
        <div class="text-center mb-5">
            <h3 class="text-center font-bold text-3xl">Projek Kami</h3>
            <p>Delta Group telah dipercaya mengantarkan logistik, batubara, dan kelapa sawit ke berbagai wilayah di Indonesia</p>
        </div>
        <!-- Container peta -->
        <div id="map" class="w-full z-0" style="height: 500px;"></div>
    </section>
  
<section class="py-12 bg-gray-100">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-10">Proyek Kami</h2>

    <!-- Grid Gallery -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Card 1 -->
      <div class="relative overflow-hidden rounded-xl shadow-md group">
        <img src="/storage/img/pasir.webp" alt="Proyek 1" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
          <p class="text-white text-lg font-semibold">Proyek 1</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="relative overflow-hidden rounded-xl shadow-md group">
        <img src="/storage/img/pasir.webp" alt="Proyek 2" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
          <p class="text-white text-lg font-semibold">Proyek 2</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="relative overflow-hidden rounded-xl shadow-md group">
        <img src="/storage/img/pasir.webp" alt="Proyek 3" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
          <p class="text-white text-lg font-semibold">Proyek 3</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="relative overflow-hidden rounded-xl shadow-md group">
        <img src="/storage/img/pasir.webp" alt="Proyek 4" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
          <p class="text-white text-lg font-semibold">Proyek 4</p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="relative overflow-hidden rounded-xl shadow-md group">
        <img src="/storage/img/pasir.webp" alt="Proyek 5" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
          <p class="text-white text-lg font-semibold">Proyek 5</p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="relative overflow-hidden rounded-xl shadow-md group">
        <img src="/storage/img/pasir.webp" alt="Proyek 6" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
          <p class="text-white text-lg font-semibold">Proyek 6</p>
        </div>
      </div>

      {{-- <!-- Card 7 -->
      <div class="relative overflow-hidden rounded-xl shadow-md group">
        <img src="/img/proyek7.jpg" alt="Proyek 7" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
          <p class="text-white text-lg font-semibold">Proyek 7</p>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="relative overflow-hidden rounded-xl shadow-md group">
        <img src="/img/proyek8.jpg" alt="Proyek 8" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
          <p class="text-white text-lg font-semibold">Proyek 8</p>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="relative overflow-hidden rounded-xl shadow-md group">
        <img src="/img/proyek9.jpg" alt="Proyek 9" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
          <p class="text-white text-lg font-semibold">Proyek 9</p>
        </div>
      </div> --}}

    </div>
  </div>
</section>
    <section class="">

    </section>
    <section class="h-95 bg-red-900">

    </section>

</body>
</html>