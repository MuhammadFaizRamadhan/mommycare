<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MommyCare')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css') {{-- Tailwind CSS --}}
</head>
<body class="bg-white text-gray-800">

<header class="bg-white w-full shadow-md fixed top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <div class="text-2xl font-extrabold text-gray-800">Mommy Care</div>

        <nav class="flex items-center space-x-6">
            <a href="/" class="text-gray-600 hover:text-pink-500 transition">Home</a>
            <a href="/article" class="text-gray-600 hover:text-pink-500 transition">Articles</a>
            <a href="/about" class="text-gray-600 hover:text-pink-500 transition">About</a>

            <!-- Menu untuk user yang sudah login -->
            @auth
            <div class="relative">
                <button id="dropdownButton" class="text-gray-600 hover:text-pink-500 transition flex items-center">
                    Fitur
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="dropdownMenu" class="absolute left-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg hidden w-40">
                    <a href="/kalkulatorkehamilan" class="block px-4 py-2 text-sm text-gray-600 hover:bg-pink-100 hover:text-pink-500 transition">Minggu Kehamilan</a>
                    <a href="/trimester" class="block px-4 py-2 text-sm text-gray-600 hover:bg-pink-100 hover:text-pink-500 transition">Trimester</a>
                    <a href="/konsultasi-dokter" class="block px-4 py-2 text-sm text-gray-600 hover:bg-pink-100 hover:text-pink-500 transition">Konsultasi Dokter</a>
                </div>
            </div>
            <h1 class="text-gray-600">Welcome, {{ Auth::user()->nama_user }}!</h1>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-full hover:bg-pink-600 transition">
                    Logout
                </button>
            </form>
            <a href="/profile" class="text-gray-600 hover:text-pink-500 transition">Profile</a>
            @else
            <!-- Menu untuk user yang belum login -->
            <a href="/login" class="text-gray-600 hover:text-pink-500 transition">Login</a>
            <a href="/signup" class="text-gray-600 hover:text-pink-500 transition">
                <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-full hover:bg-pink-600 transition">
                    Sign up
                </button>
            </a>
            @endauth
        </nav>
    </div>
</header>

<main class="pt-16">
    @yield('content') {{-- Section untuk konten halaman --}}
</main>

<footer class="bg-gradient-to-t from-pink-200 to-white py-10">
    <div class="container mx-auto px-6 text-gray-700">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <div class="flex items-center space-x-2">
                    <img src="img/footer.png" alt="Mommy Care Logo" class="h-16"> <!-- Ganti 'path/to/your-logo.png' dengan path logo Anda -->
                </div>
                <p class="mt-2 text-sm text-gray-600">Your Pregnancy Friend</p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-red-500 hover:opacity-75"><i class="fab fa-youtube fa-2x"></i></a>
                    <a href="#" class="text-blue-600 hover:opacity-75"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-blue-400 hover:opacity-75"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="text-pink-600 hover:opacity-75"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h3 class="font-bold text-gray-800">Kategori</h3>
                    <ul class="mt-2 space-y-2 text-sm">
                        <li><a href="#" class="hover:text-pink-500">Foto</a></li>
                        <li><a href="/article" class="hover:text-pink-500">Video</a></li>
                        <li><a href="/article" class="hover:text-pink-500">Artikel</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800">Fitur</h3>
                    <ul class="mt-2 space-y-2 text-sm">
                        <li><a href="/article" class="hover:text-pink-500">Video Education</a></li>
                        <li><a href="#" class="hover:text-pink-500">Form About Kehamilan</a></li>
                        @auth
                        <li><a href="/kalkulatorkehamilan" class="hover:text-pink-500">Kalkulator Kehamilan</a></li>
                        <li><a href="/profile" class="hover:text-pink-500">Profile</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
            <div>
                <h3 class="font-bold text-gray-800">Informasi</h3>
                <ul class="mt-2 space-y-2 text-sm">
                    <li><a href="#" class="hover:text-pink-500">Tentang Kami</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center text-sm text-gray-600 mt-8">
            © 2024 All Rights Reserved
        </div>
    </div>
</footer>

</body>
</html>

<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Optional: Close dropdown when clicking outside
    document.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>
