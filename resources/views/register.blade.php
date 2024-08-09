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
        <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600 flex items-center">
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
            <a href="{{ route('home') }}" class="text-gray-800 hover:text-blue-600">Home</a>
            <a href="{{ route('home') }}#tentang-program" class="text-gray-800 hover:text-blue-600">Tentang Program</a>
            <a href="{{ route('home') }}#berita" class="text-gray-800 hover:text-blue-600">Berita</a>
            <a href="{{ route('register') }}" class="px-4 py-2 bg-yellow-500 text-white rounded-full text-sm">Registrasi</a>
        </div>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="lg:hidden fixed inset-x-0 top-0 bg-gray-800 bg-opacity-80 z-50 transform -translate-y-full transition-transform duration-300">
    <div class="relative h-48">
        <!-- Close Button -->
        <button id="close-menu" class="absolute top-4 right-4 text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <!-- Menu Content -->
        <div class="flex flex-col items-center pt-12 space-y-4 h-full overflow-y-auto">
            <a href="{{ route('home') }}" class="text-white hover:text-blue-600">Home</a>
            <a href="{{ route('home') }}#tentang-program" class="text-white hover:text-blue-600">Tentang Program</a>
            <a href="{{ route('home') }}#berita" class="text-white hover:text-blue-600">Berita</a>
            <a href="{{ route('register') }}" class="px-4 py-2 bg-yellow-500 text-white rounded-full text-sm">Registrasi</a>

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
    <!-- Formulir Pendaftaran -->
    <div class="container mx-auto mt-20 px-6">
        <div class="bg-white bg-opacity-80 p-8 rounded-lg shadow-lg max-w-md mx-auto">
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fullname">
                        Nama lengkap*
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="fullname" type="text" placeholder="Nama lengkap">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email*
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="Email">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                        Nomor Telepon*
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="phone" type="tel" placeholder="Isi hanya angka">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="reason">
                        Alasan mengikuti program "Explore Thailand by Detiktravel"*
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="reason" rows="3" placeholder="Tuliskan alasan"></textarea>
                </div>

                <div class="mb-4 flex items-start">
                <div class="w-2/4">
                    <label class="block text-gray-700 text-sm font-bold mb-3">
                        Upload foto profil*
                    </label>
                    <div class="border-dashed border-2 border-gray-400 rounded-lg p-4 flex justify-center items-center h-32">
                        <input type="file" class="hidden" id="profile-pic">
                        <label for="profile-pic" class="cursor-pointer">
                            <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                        </label>
                    </div>
                </div>
                <div class="w-2/4 ml-3 mt-10 flex flex-col justify-center">
                    <div class="text-left">
                        <p class="text-sm text-gray-700">Format file: .png, .jpg, .jpeg</p>
                        <p class="text-sm text-gray-700">Maksimal ukuran file 1MB</p>
                        <p class="text-sm text-gray-700">Disarankan foto mencakup 3/4 badan</p>
                    </div>
                </div>
            </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="instagram">
                        Link Instagram*
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="instagram" type="url" placeholder="https://www.instagram.com/yourusername">
                </div>

                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox text-blue-500 h-5 w-5">
                        <span class="ml-2 text-gray-700 text-sm">Dengan menekan tombol "Daftar", Saya menyetujui <a href="#" class="text-blue-500">syarat dan ketentuan</a> yang berlaku</span>
                    </label>
                </div>

                <div class="text-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>
    <br>
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
    </div>
        <hr class="h-px my-7 bg-gray-200 border-0 dark:bg-white-700">
        <div class="container mx-auto text-left text-white-500 py-2">
        <h4>Copyright @ 2023 detikcom. All right reserved</h4>
    </div>
</body>
</html>
