<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detik Travel</title>
    @vite('resources/css/app.css')
    <style>
        html {
            scroll-behavior: smooth; /* CSS untuk scroll halus */
        }
    </style>
</head>
<body class="font-sans antialiased bg-cover bg-center bg-fixed bg-no-repeat min-h-screen" style="background-image: url('/img/thailand3.jpeg');">

<nav class="bg-white bg-opacity-80 py-3 px-6 fixed w-full z-50 top-0 rounded-full shadow-lg">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="text-xl font-bold text-blue-600 flex items-center">
            <img src="{{ asset('img/detik_travel.png') }}" class="h-7 sm:h-8">
        </a>

        <!-- Hamburger Menu for Mobile -->
        <div class="lg:hidden flex items-center">
            <button id="hamburger-menu" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links for Desktop -->
        <div id="nav-links" class="hidden lg:flex items-center space-x-6 text-sm ml-auto">
            <a href="#" class="text-gray-800 hover:text-blue-600">Home</a>
            <a href="#tentang-program" class="text-gray-800 hover:text-blue-600">Tentang Program</a>
            <a href="#berita" class="text-gray-800 hover:text-blue-600">Berita</a>
            <a href="{{ route('register') }}" class="px-4 py-2 bg-yellow-500 text-white rounded-full text-sm">Registrasi</a>
        </div>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="lg:hidden fixed inset-x-0 top-0 bg-gray-800 bg-opacity-80 z-50 transform -translate-y-full transition-transform duration-300 overflow-hidden">
    <div class="relative h-48">
        <!-- Close Button -->
        <button id="close-menu" class="absolute top-4 right-4 text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <!-- Menu Content -->
        <div class="flex flex-col items-center pt-12 space-y-4 h-full overflow-y-auto">
            <a href="#" class="text-white hover:text-blue-400 text-lg">Home</a>
            <a href="#tentang-program" class="text-white hover:text-blue-400 text-lg">Tentang Program</a>
            <a href="#berita" class="text-white hover:text-blue-400 text-lg">Berita</a>
            <a href="{{ route('register') }}" class="px-4 py-2 bg-yellow-500 text-white rounded-full text-sm mt-4">Registrasi</a>
        </div>
    </div>
</div>

<!-- JavaScript for Menu Toggle -->
<script>
    document.getElementById('hamburger-menu').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('-translate-y-full');
        document.getElementById('mobile-menu').classList.toggle('translate-y-0');
        document.getElementById('mobile-menu-overlay').classList.toggle('hidden');
    });

    document.getElementById('close-menu').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('-translate-y-full');
        document.getElementById('mobile-menu').classList.toggle('translate-y-0');
        document.getElementById('mobile-menu-overlay').classList.toggle('hidden');
    });

    document.getElementById('mobile-menu-overlay').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('-translate-y-full');
        document.getElementById('mobile-menu').classList.toggle('translate-y-0');
        document.getElementById('mobile-menu-overlay').classList.toggle('hidden');
    });
</script>
<div class="h-screen flex items-center justify-center relative pt-18">
    <div class="absolute inset-0 bg-opacity-50"></div>
    <div class="relative text-center text-white flex flex-col md:flex-row items-center">
        <!-- Konten di sebelah kiri -->
        <div class="mb-8 md:mb-0 md:mr-8 flex flex-col items-start space-y-4">
            <h1 class="text-5xl font-bold mb-4">Thailand Explore</h1>
            <div class="flex items-center space-x-4">
                <h5 class="text-xl font-bold">By</h5>
                <img src="{{ asset('img/detik_travel.png') }}" class="h-14">
            </div>
            <a href="#tentang-program" class="px-6 py-3 bg-yellow-500 rounded-full">Tentang Program</a>
        </div>
        <!-- Gambar di sebelah kanan -->
        <div class="relative w-full overflow-hidden">
            <div class="flex space-x-4 w-full overflow-x-auto scrollbar-hidden">
                <img src="{{ asset('img/berita1.jpeg') }}" class="h-64 md:w-48 w-40 object-cover rounded-lg flex-shrink-0">
                <img src="{{ asset('img/berita2.jpeg') }}" class="h-64 md:w-48 w-40 object-cover rounded-lg flex-shrink-0">
                <img src="{{ asset('img/berita3.jpeg') }}" class="h-64 md:w-48 w-40 object-cover rounded-lg flex-shrink-0">
            </div>
        </div>
    </div>
</div>
<section id="tentang-program" class="bg-sky-700 bg-opacity-20">
    <div class="container mx-auto flex flex-col md:flex-row items-start justify-between">
        <div class="md:w-1/2">
            <img src="{{ asset('img/bangkok.jpeg') }}" class="rounded-full w-3/4 mx-auto md:mx-0" alt="Thailand Image">
        </div>
        <div class="md:w-1/2 md:pl-12">
            <div class="text-center md:text-left">
                <h2 class="text-4xl font-bold text-white mb-4">Tentang Program</h2>
                <p class="text-lg text-white mb-6">Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca Detiktravel yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti pantai Pak Bia Island dan destinasi lain di Phuket, Thailand. Jadi bagian dari perjalanan kami dan menangkan hadiah jalan-jalan yang tak terlupakan!</p>
                <a href="{{ route('register') }}" class="px-6 py-3 bg-yellow-500 text-white rounded-full">DAFTAR SEKARANG</a>
            </div>

            <div class="mt-12">
                <h3 class="text-2xl font-bold text-white mb-4">Mekanisme</h3>
                <ul class="space-y-6">
                    <li class="flex items-start">
                        <span class="text-yellow-500 text-4xl mr-4">&#9679;</span>
                        <div>
                            <h4 class="text-xl font-bold text-white">Isi Formulir</h4>
                            <p class="text-white">1 - 31 Mei 2023</p>
                            <p class="text-white">Lengkapi formulir pendaftaran dengan data sebenarnya.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-500 text-4xl mr-4">&#9679;</span>
                        <div>
                            <h4 class="text-xl font-bold text-white">Penjurian</h4>
                            <p class="text-white">1 - 7 Juni 2023</p>
                            <p class="text-white">Ikuti rangkaian penjurian online/offline.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-500 text-4xl mr-4">&#9679;</span>
                        <div>
                            <h4 class="text-xl font-bold text-white">Pengumuman Pemenang</h4>
                            <p class="text-white">11 Juni 2023</p>
                            <p class="text-white">Ikuti rangkaian penjurian online/offline.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
            <section id="berita" class="bg-white py-16">
                <div class="container mx-auto">
                <h2 class="text-3xl font-semibold text-blue-500">Detik<span class="text-orange-400">Travel</span> Update </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Berita Utama -->
                        <div class="md:col-span-2">
                            <div class="relative">
                                <img src="{{ asset('img/bangkok.jpeg') }}" class="w-full h-auto rounded-lg" alt="Doraemon Image">
                                <div class="absolute bottom-0 left-0 bg-gradient-to-t from-blue-900 to-transparent p-6 text-white">
                                    <h3 class="text-2xl font-bold">Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggil Hujan</h3>
                                    <p class="mt-2">3 jam yang lalu</p>
                                </div>
                            </div>
                        </div>

            <!-- Berita Lainnya -->
            <div class="md:col-span-1 space-y-4 flex flex-col justify-between">
                <div class="flex gap-4">
                    <img src="{{ asset('img/berita1.jpeg') }}" class="w-2/4 h-auto rounded-lg" alt="Berita 1">
                    <div>
                        <h4 class="text-lg font-bold text-blue-900">Thailand Ngarep Cuan Banyak dari Turis China dan Jepang</h4>
                        <p class="text-gray-600 text-sm">1 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <img src="{{ asset('img/thailand2.jpeg') }}" class="w-2/4 h-auto rounded-lg" alt="Berita 2">
                    <div>
                        <h4 class="text-lg font-bold text-blue-900">Cahaya Lampu Hiiasi Kuil Wat Phra Dhammakaya Thailand Saat Waisak</h4>
                        <p class="text-gray-600 text-sm">1 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <img src="{{ asset('img/berita3.jpeg') }}" class="w-2/4 h-auto rounded-lg" alt="Berita 3">
                    <div>
                        <h4 class="text-lg font-bold text-blue-900">Cantiknya Lisa BLACKPINK Berwisata Sejarah di Thailand</h4>
                        <p class="text-gray-600 text-sm">1 jam yang lalu</p>
                    </div>
                </div>
                <div class="mt-4 flex justify-center md:justify-start">
                    <a href="#" class="px-6 py-3 bg-blue-500 text-white rounded-full">Lihat Berita Lainnya →</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<div class="bg-sky-700 bg-opacity-70 py-16 text-white">
  <div class="container mx-auto text-left">
    <h2 class="text-3xl font-bold mb-4">Explore Thailand bersama Detiktravel</h2>
    <p class="text-white-500 md:text-lg dark:text-white-400 font-sans antialiased">Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca Detiktravel yang ingin
        menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti pantai Pak Bia Island dan destinasi lain di Phuket, Thailand.
        Jadi bagian dari perjalanan kami dan menangkan hadiah jalan-jalan yang tak terlupakan!  
    </p>
    <br>
    <!-- Connect With Me -->
    <div class="flex flex-col items-end space-y-4">
    <h3>Connect With Us</h3>
    <div class="flex justify-end space-x-5">
        <a href="https://www.instagram.com" target="_blank">
            <img src="{{ asset('img/ig.png') }}" class="h-8 w-8 rounded-full">
        </a>
        <a href="https://www.facebook.com" target="_blank">
            <img src="{{ asset('img/fb.png') }}" class="h-8 w-8 rounded-full">
        </a>
        <a href="https://www.twitter.com" target="_blank">
            <img src="{{ asset('img/xx.png') }}" class="h-8 w-8 rounded-full">
        </a>
        <a href="https://www.linkedin.com" target="_blank">
            <img src="{{ asset('img/link.png') }}" class="h-8 w-8 rounded-full">
        </a>
        <a href="https://www.youtube.com" target="_blank">
            <img src="{{ asset('img/yt.png') }}" class="h-8 w-8 rounded-full">
        </a>
    </div>
</div>
</footer>
        <hr class="h-px my-7 bg-white border-0 dark:bg-white-700">
        <div class="container mx-auto text-left text-white-500 py-2">
        <h4>Copyright @ 2023 detikcom. All right reserved</h4>
    </div>
</body>
</html>