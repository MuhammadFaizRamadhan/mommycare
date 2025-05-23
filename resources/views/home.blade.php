@extends('layouts.app')

@section('title', 'Home - Focka')

@section('content')
<header class="relative bg-gradient-to-b from-pink-200 to-white min-h-screen flex items-center overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full">
        <svg viewBox="0 0 1440 320" class="absolute bottom-0 w-full h-auto">
            <path fill="#ffdde1" fill-opacity="1" d="M0,160L60,181.3C120,203,240,245,360,261.3C480,277,600,267,720,224C840,181,960,107,1080,90.7C1200,75,1320,117,1380,138.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </div>
    <div class="container mx-auto px-6 md:px-12 grid md:grid-cols-2 items-center gap-8">
        <div class="space-y-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-pink-600 leading-tight">
                Pantau kehamilan anda <br>
                dan dapatkan info <br>
                <span class="text-pink-800">Perkembangan si kecil</span>
            </h1>
            <div class="flex items-center space-x-4">
                @auth
                <button id="openForm" class="bg-pink-500 text-white px-6 py-3 rounded-full shadow-lg hover:bg-pink-600 transition">
                    Form
                </button>
                @endauth
                <div class="flex items-center space-x-2">
                    <a href="/article">
                        <div class="w-8 h-8 border-2 border-pink-500 rounded-full flex items-center justify-center">    
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.548 3.804A1 1 0 017 14.071V9.93a1 1 0 01.204-.592l6.548-3.804a1 1 0 011.548.848v7.608a1 1 0 01-1.548.848z" />
                            </svg>
                        </div>
                        <span class="text-pink-500 font-semibold">Video</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex justify-center relative z-10">
            <img src="img/logo.png" alt="Pregnant Woman" class="max-w-full md:max-w-lg">
        </div>
    </div>
</header>

<!-- Pop-up Form -->
<div id="formPopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white bg-opacity-90 backdrop-blur-lg p-6 rounded-lg shadow-lg w-full max-w-sm">
        <h2 class="text-xl font-bold text-pink-600 mb-4 text-center">Form Data Kehamilan</h2>
        <form>
            <div class="mb-3">
                <label class="block text-sm font-semibold text-pink-700 mb-1">Umur Kehamilan</label>
                <input type="number" class="w-full px-3 py-1.5 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 bg-pink-100 text-pink-900">
            </div>
            <div class="mb-3">
                <label class="block text-sm font-semibold text-pink-700 mb-1">Umur Ibu</label>
                <input type="number" class="w-full px-3 py-1.5 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 bg-pink-100 text-pink-900">
            </div>
            <div class="mb-3">
                <label class="block text-sm font-semibold text-pink-700 mb-1">Alamat</label>
                <textarea class="w-full px-3 py-1.5 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 bg-pink-100 text-pink-900"></textarea>
            </div>
            <div class="mb-3">
                <label class="block text-sm font-semibold text-pink-700 mb-1">Kontak</label>
                <input type="text" class="w-full px-3 py-1.5 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 bg-pink-100 text-pink-900">
            </div>
            <div class="mb-3">
                <label class="block text-sm font-semibold text-pink-700 mb-1">Keluhan</label>
                <textarea class="w-full px-3 py-1.5 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 bg-pink-100 text-pink-900"></textarea>
            </div>
            <div class="flex justify-end space-x-2">
                <button type="button" id="closeForm" class="px-3 py-1 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition text-sm">Close</button>
                <button type="submit" class="px-3 py-1 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition text-sm">Submit</button>
            </div>
        </form>
    </div>
</div>

<section class="py-16 px-6 sm:px-12 bg-gray-50">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8">Kenapa Memilih MommyCare?</h2>
        <p class="text-lg sm:text-xl text-gray-600 mb-6">Kami berkomitmen untuk mendampingi Anda di setiap langkah kehamilan dengan informasi yang akurat dan relevan untuk menjaga kesehatan ibu dan bayi.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Tracking Personal -->
            <div class="flex flex-col items-center bg-white p-6 rounded-xl shadow-lg">
                <div class="bg-pink-100 p-4 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12c2.28 0 4-1.72 4-4s-1.72-4-4-4-4 1.72-4 4 1.72 4 4 4zm0 2c-4.42 0-8 1.79-8 4v2h16v-2c0-2.21-3.58-4-8-4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Tracking Personal</h3>
                <p class="text-gray-600 text-center">Pantau kehamilan Anda dengan data yang personal dan sesuai dengan kebutuhan Anda.</p>
            </div>
            <!-- Dukungan Profesional (Icon Kalender) -->
            <div class="flex flex-col items-center bg-white p-6 rounded-xl shadow-lg">
                <div class="bg-pink-100 p-4 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V4a1 1 0 112 0v3h2V4a1 1 0 112 0v3h1a2 2 0 012 2v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h1V4a1 1 0 112 0v3h2V4a1 1 0 112 0v3h1a2 2 0 012 2v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h1z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Dukungan Profesional</h3>
                <p class="text-gray-600 text-center">Informasi yang kami berikan telah diverifikasi oleh ahli kesehatan untuk memberikan saran yang akurat dan terpercaya.</p>
            </div>
            <!-- Komunitas Peduli (Icon Artikel) -->
            <div class="flex flex-col items-center bg-white p-6 rounded-xl shadow-lg">
                <div class="bg-pink-100 p-4 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Artikel Terpecaya</h3>
                <p class="text-gray-600 text-center">Dapatkan artikel yang dapat dipercaya dan bermanfaat terkait kesehatan kehamilan dan perawatan ibu dan bayi.</p>
            </div>
        </div>
    </div>
</section>

<section class="mb-16">
    <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8 text-center mt-16">Produk Apa Sih Yang Cocok Untuk Bunda?</h2>
    <div class="mt-20 flex justify-center space-x-4">
        <!-- Card 1 -->
        <div class="bg-blue-100 shadow-md rounded-lg p-6 min-w-[120px] max-w-[180px] transition-transform duration-300 transform hover:scale-105 cursor-pointer" onclick="this.classList.toggle('transform')">
            <img src="https://i.pinimg.com/736x/80/b9/9f/80b99fdb0791cece813da537b2b3d3e5.jpg" alt="Fitur 1" class="w-full rounded-lg mb-4">
            <h3 class="mt-2 text-sm font-semibold text-gray-700 text-center">Bedak Bayi</h3>
        </div>
        
        <!-- Card 2 -->
        <div class="bg-green-100 shadow-md rounded-lg p-6 min-w-[120px] max-w-[180px] transition-transform duration-300 transform hover:scale-105 cursor-pointer" onclick="this.classList.toggle('transform')">
            <img src="https://i.pinimg.com/736x/76/f7/5f/76f75f666ff522d23075c15d2eaf6928.jpg" alt="Fitur 2" class="w-full rounded-lg mb-4">
            <h3 class="mt-2 text-sm font-semibold text-gray-700 text-center">Minyak Telon</h3>
        </div>

        <!-- Card 3 -->
        <div class="bg-yellow-100 shadow-md rounded-lg p-6 min-w-[120px] max-w-[180px] transition-transform duration-300 transform hover:scale-105 cursor-pointer" onclick="this.classList.toggle('transform')">
            <img src="https://i.pinimg.com/736x/ef/bc/b6/efbcb6f584985b86bd6c73d7095c8747.jpg" alt="Fitur 3" class="w-full rounded-lg mb-4">
            <h3 class="mt-2 text-sm font-semibold text-gray-700 text-center">Pelembab Badan</h3>
        </div>

        <!-- Card 4 -->
        <div class="bg-purple-100 shadow-md rounded-lg p-6 min-w-[120px] max-w-[180px] transition-transform duration-300 transform hover:scale-105 cursor-pointer" onclick="this.classList.toggle('transform')">
            <img src="https://i.pinimg.com/736x/0c/f5/fc/0cf5fccdf3945ea9e06dd2e3b0d47955.jpg" alt="Fitur 4" class="w-full rounded-lg mb-4">
            <h3 class="mt-2 text-sm font-semibold text-gray-700 text-center">Vitamin Rambut</h3>
        </div>

        <!-- Card 5 -->
        <div class="bg-pink-100 shadow-md rounded-lg p-6 min-w-[120px] max-w-[180px] transition-transform duration-300 transform hover:scale-105 cursor-pointer" onclick="this.classList.toggle('transform')">
            <img src="https://i.pinimg.com/736x/3d/a1/b4/3da1b40ad03e19a92ac02d8ed26f71c9.jpg" alt="Fitur 5" class="w-full rounded-lg mb-4">
            <h3 class="mt-2 text-sm font-semibold text-gray-700 text-center">Tempat Makan</h3>
        </div>

        <!-- Card 6 -->
        <div class="bg-teal-100 shadow-md rounded-lg p-6 min-w-[120px] max-w-[180px] transition-transform duration-300 transform hover:scale-105 cursor-pointer" onclick="this.classList.toggle('transform')">
            <img src="https://i.pinimg.com/736x/97/b8/a0/97b8a027cce52f7bb70b580ff81f5cea.jpg" alt="Fitur 6" class="w-full rounded-lg mb-4">
            <h3 class="mt-2 text-sm font-semibold text-gray-700 text-center">Kompres Panas</h3>
        </div>
    </div>
</section>

<!-- <section id="features" class="py-16 px-6 sm:px-12">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8">Fitur Unggulan MommyCare</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <div class="bg-white p-6 rounded-xl shadow-lg transform hover:scale-105 transition">
                <h3 class="text-xl font-semibold text-pink-600 mb-4">Pantau Perkembangan Kehamilan</h3>
                <p class="text-gray-600">Dengan MommyCare, Anda dapat memantau perkembangan janin Anda secara real-time. Setiap minggu, Anda akan mendapatkan informasi terbaru tentang pertumbuhan janin dan tips yang perlu diperhatikan.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg transform hover:scale-105 transition">
                <h3 class="text-xl font-semibold text-pink-600 mb-4">Saran Gizi dan Nutrisi</h3>
                <p class="text-gray-600">Nutrisi adalah kunci untuk menjaga kesehatan ibu dan bayi. MommyCare memberikan rekomendasi makanan yang sehat sesuai dengan tahap kehamilan Anda.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg transform hover:scale-105 transition">
                <h3 class="text-xl font-semibold text-pink-600 mb-4">Panduan Aktivitas dan Kesehatan</h3>
                <p class="text-gray-600">Olahraga ringan dan aktivitas fisik membantu Anda tetap bugar. Kami memberikan panduan tentang aktivitas yang aman dan tips untuk menjaga kesehatan mental selama kehamilan.</p>
            </div>
        </div>
    </div>
</section> -->

<!-- Section Fitur Unggulan MommyCare -->
<section id="features" class="py-16 px-6 sm:px-12">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8">Fitur Unggulan MommyCare</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <div class="bg-white p-6 rounded-xl shadow-lg transform hover:scale-105 transition">
                <h3 class="text-xl font-semibold text-pink-600 mb-4">Kalkulator Kehamilan</h3>
                <p class="text-gray-600">Dengan MommyCare, Anda dapat memantau menghitung usia kehamilan Anda. Yuk Bunda, hitung perkiraan hari kelahiran si Kecil melalui fitur Kalkulator Kehamilan</p>
                <div class="mt-8 text-center">
                    @auth
                    <a href="/kalkulatorkehamilan">
                        <button class="bg-pink-600 text-white font-semibold py-2 px-6 rounded-lg shadow hover:bg-pink-500">
                            Coba Sekarang!
                        </button>
                    </a>
                    @else
                    <a href="/login">
                        <button class="bg-pink-600 text-white font-semibold py-2 px-6 rounded-lg shadow hover:bg-pink-500">
                            Coba Sekarang!
                        </button>
                    </a>
                    @endauth
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg transform hover:scale-105 transition">
                <h3 class="text-xl font-semibold text-pink-600 mb-4">Trimester</h3>
                <p class="text-gray-600">Kehamilan terjadi selama 40 minggu, yang terbagi ke dalam tiga trimester. ketahui anda berada di trimester keberapa dengan fitur dari kami.</p>
                <div class="mt-8 text-center">
                    @auth
                    <a href="/trimester">
                        <button class="bg-pink-600 text-white font-semibold py-2 px-6 rounded-lg shadow hover:bg-pink-500">
                            Coba Sekarang!
                        </button>
                    </a>
                    @else
                    <a href="/login">
                        <button class="bg-pink-600 text-white font-semibold py-2 px-6 rounded-lg shadow hover:bg-pink-500">
                            Coba Sekarang!
                        </button>
                    </a>
                    @endauth
                    
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg transform hover:scale-105 transition">
                <h3 class="text-xl font-semibold text-pink-600 mb-4">Konsultasi Dokter</h3>
                <p class="text-gray-600">Dengan fitur Konsultasi Dokter dari MommyCare, dapat mempermudah akses ke dokter kapan saja dan di mana saja tanpa harus datang langsung ke fasilitas kesehatan.</p>
                <div class="mt-8 text-center">
                    @auth
                    <a href="/konsultasi-dokter">
                        <button class="bg-pink-600 text-white font-semibold py-2 px-6 rounded-lg shadow hover:bg-pink-500">
                            Coba Sekarang!
                        </button>
                    </a>
                    @else
                    <a href="/login">
                        <button class="bg-pink-600 text-white font-semibold py-2 px-6 rounded-lg shadow hover:bg-pink-500">
                            Coba Sekarang!
                        </button>
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 px-6 sm:px-12 bg-gray-50">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8">Ulasan dari Pengguna</h2>
        <p class="text-lg sm:text-xl text-gray-600 mb-6">Dengarkan pengalaman ibu hamil yang telah menggunakan MommyCare dan bagaimana kami membantu mereka selama kehamilan.</p>
        <div class="relative">
            <!-- Optional navigation buttons -->
            <button id="prev-btn" class="absolute left-[-16px] top-1/2 transform -translate-y-1/2 bg-pink-100 rounded-full p-3 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="next-btn" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-pink-100 rounded-full p-3 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            
            <!-- Container for sliding reviews -->
            <div class="flex overflow-x-auto gap-12 p-6">
                <!-- Review 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg flex-shrink-0 w-80">
                    <div class="w-20 h-20 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="https://i.pinimg.com/736x/f6/65/d1/f665d121b8ee340e5ca00b42fdbfeb2e.jpg" alt="Lina's Profile" class="w-16 h-16 object-cover rounded-full">
                    </div>
                    <h4 class="text-xl font-semibold text-pink-600 mb-2">Lina</h4> <!-- Changed color to pink -->
                    <p class="text-gray-600 mb-2">Pengguna MommyCare sejak 2023</p>
                    <p class="text-gray-600 mb-4">"MommyCare sangat membantu saya dalam memantau perkembangan kehamilan saya. Setiap informasi yang diberikan sangat berguna!"</p>
                </div>

                <!-- Review 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg flex-shrink-0 w-80">
                    <div class="w-20 h-20 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="https://i.pinimg.com/736x/a2/ec/6b/a2ec6b45383960ed28ef26d7d6970bb8.jpg" alt="Sari's Profile" class="w-16 h-16 object-cover rounded-full">
                    </div>
                    <h4 class="text-xl font-semibold text-pink-600 mb-2">Sari</h4> <!-- Changed color to pink -->
                    <p class="text-gray-600 mb-2">Pengguna MommyCare sejak 2022</p>
                    <p class="text-gray-600 mb-4">"Aplikasi ini memberikan saya saran gizi yang sangat berguna. Saya merasa lebih sehat dan bayi saya berkembang dengan baik!"</p>
                </div>

                <!-- Review 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg flex-shrink-0 w-80">
                    <div class="w-20 h-20 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="https://i.pinimg.com/736x/dc/0e/5b/dc0e5bdb700f4a1ff6ffe7a05c91afed.jpg" alt="Dewi's Profile" class="w-16 h-16 object-cover rounded-full">
                    </div>
                    <h4 class="text-xl font-semibold text-pink-600 mb-2">Dewi</h4> <!-- Changed color to pink -->
                    <p class="text-gray-600 mb-2">Pengguna MommyCare sejak 2024</p>
                    <p class="text-gray-600 mb-4">"Saya sangat terbantu dengan panduan aktivitas yang diberikan. Saya merasa lebih bugar dan siap untuk melahirkan!"</p>
                </div>

                <!-- Review 4 -->
                <div class="bg-white p-6 rounded-xl shadow-lg flex-shrink-0 w-80">
                    <div class="w-20 h-20 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="https://i.pinimg.com/736x/c4/25/16/c425167fbe96f60d07475048c1dbb7f6.jpg" alt="Ayu's Profile" class="w-16 h-16 object-cover rounded-full">
                    </div>
                    <h4 class="text-xl font-semibold text-pink-600 mb-2">Ayu</h4> <!-- Changed color to pink -->
                    <p class="text-gray-600 mb-2">Pengguna MommyCare sejak 2021</p>
                    <p class="text-gray-600 mb-4">"Fitur artikel-nya sangat membantu saya untuk mengetahui apa vitamin dan makanan yang sesuai dengan rekomendasi dokter. MommyCare memang luar biasa!"</p>
                </div>

                <!-- Review 5 -->
                <div class="bg-white p-6 rounded-xl shadow-lg flex-shrink-0 w-80">
                    <div class="w-20 h-20 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="https://i.pinimg.com/736x/d0/bf/4c/d0bf4c89f3c3d95d827eddf2e288151f.jpg" alt="Tina's Profile" class="w-16 h-16 object-cover rounded-full">
                    </div>
                    <h4 class="text-xl font-semibold text-pink-600 mb-2">Tina</h4> <!-- Changed color to pink -->
                    <p class="text-gray-600 mb-2">Pengguna MommyCare sejak 2023</p>
                    <p class="text-gray-600 mb-4">"Saya suka sekali dengan fitur fiturnya. Bisa bertanya langsung kepada ahlinya langsung yang lebih berpengalaman membuat saya mendapatkan informasi - informasi baru."</p>
                </div>

                <!-- Review 6 -->
                <div class="bg-white p-6 rounded-xl shadow-lg flex-shrink-0 w-80">
                    <div class="w-20 h-20 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="https://i.pinimg.com/736x/1d/09/c1/1d09c171a93f25a9a9003549ff26b52e.jpg" alt="Rina's Profile" class="w-16 h-16 object-cover rounded-full">
                    </div>
                    <h4 class="text-xl font-semibold text-pink-600 mb-2">Rina</h4> <!-- Changed color to pink -->
                    <p class="text-gray-600 mb-2">Pengguna MommyCare sejak 2024</p>
                    <p class="text-gray-600 mb-4">"Video dan informasi perkembangan bayi yang diberikan sangat mudah dipahami. Ini membantu saya memastikan semuanya berjalan sesuai rencana."</p>
                </div>

                <!-- Additional reviews can be added similarly -->
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const container = document.querySelector(".flex.overflow-x-auto");
    const nextBtn = document.getElementById("next-btn");
    const prevBtn = document.getElementById("prev-btn");

    // Scroll step (adjust based on card width and gap)
    const scrollStep = 320; // Approximate width of a card including gap

    // Handle Next button click
    nextBtn.addEventListener("click", () => {
        container.scrollBy({
            left: scrollStep,
            behavior: "smooth",
        });
    });

    // Handle Previous button click
    prevBtn.addEventListener("click", () => {
        container.scrollBy({
            left: -scrollStep,
            behavior: "smooth",
        });
    });
});

    document.getElementById('openForm').addEventListener('click', function() {
        document.getElementById('formPopup').classList.remove('hidden');
    });

    document.getElementById('closeForm').addEventListener('click', function() {
        document.getElementById('formPopup').classList.add('hidden');
    });
</script>
@endsection
