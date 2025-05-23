@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<section
  class="relative bg-cover bg-center bg-no-repeat text-white py-40 px-6 sm:px-10 mt-10" 
  style="background-image: url('https://i.pinimg.com/736x/d6/08/ff/d608ff3b51c405c56357b6979a665495.jpg');"
>
  <!-- Overlay Gradasi -->
  <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white-600 opacity-"></div>
  
  <!-- Konten Utama -->
  <div class="relative max-w-7xl mx-auto text-center">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-4 leading-tight">
          Temukan Video dan Artikel Terpercaya
      </h1>
      <p class="text-lg sm:text-xl mb-6">
          Berbagai Informasi Kehamilan Hanya Untukmu
      </p>
      <a
          href="#features"
          class="bg-white text-pink-700 font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-pink-100 transition duration-300 ease-in-out"
      >
          Pelajari Lebih Lanjut
      </a>
  </div>
</section>

<section id="features" class="py-16 px-6 sm:px-12 bg-gray-50">
    <!-- Teks Utama di Atas -->
    <div class="text-center mb-10">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">
            Beragam Informasi
        </h2>
        <p class="text-lg sm:text-xl text-gray-600 mb-6"
            Jelajahi berbagai fitur yang dirancang khusus untuk mendukung perjalanan Anda.
        </p>
    </div>

    <!-- Konten Fitur -->
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-12 text-center">
            <!-- Fitur 1 -->
            <div class="flex flex-col items-center">
                <!-- Lingkaran Ikon -->
                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-md transform transition-transform duration-300 hover:scale-110 hover:shadow-lg">
                    <img src="https://i.pinimg.com/736x/e0/61/a0/e061a0f29f09c91ca446ff31ae85e614.jpg" alt="Pantau Perkembangan Kehamilan" class="w-16 h-16 object-contain">
                </div>
                <!-- Deskripsi -->
                <p class="text-gray-800 text-sm font-semibold mt-4">Rekomendasi Makanan</p>
            </div>

            <!-- Fitur 2 -->
            <div class="flex flex-col items-center">
                <!-- Lingkaran Ikon -->
                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-md transform transition-transform duration-300 hover:scale-110 hover:shadow-lg">
                    <img src="https://i.pinimg.com/736x/9c/a5/2e/9ca52e4918b7a83c334576a96102f789.jpg" alt="Saran Gizi dan Nutrisi" class="w-16 h-16 object-contain">
                </div>
                <!-- Deskripsi -->
                <p class="text-gray-800 text-sm font-semibold mt-4">Informasi Obat</p>
            </div>

            <!-- Fitur 3 -->
            <div class="flex flex-col items-center">
                <!-- Lingkaran Ikon -->
                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-md transform transition-transform duration-300 hover:scale-110 hover:shadow-lg">
                    <img src="https://i.pinimg.com/736x/bb/eb/19/bbeb1915054bbd7d615cdeb70730675f.jpg" alt="Panduan Aktivitas dan Kesehatan" class="w-16 h-16 object-contain">
                </div>
                <!-- Deskripsi -->
                <p class="text-gray-800 text-sm font-semibold mt-4">Informasi Penyakit</p>
            </div>
        </div>
    </div>
</section>

    <!-- Section Video Edukasi Kehamilan -->
<section id="video-education" class="py-16 px-6 sm:px-12 mb-16"> <!-- Tambahkan mb-16 di sini -->
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">Video Edukasi Kehamilan</h2>
        <p class="text-lg sm:text-xl text-gray-600 mb-6">Tonton video-video edukasi untuk menambah pengetahuanmu tentang kehamilan</p>
    </div>
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Video 1 -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="aspect-w-16 aspect-h-9">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/44oy_aUL9R0?si=xmunZLUy3F9o74zW" 
                        title="Senam Program Hamil Pemula" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
            <div class="p-4 text-left">
                <h3 class="text-xl font-semibold text-pink-600 mb-2">Senam Program Hamil Pemula</h3>
                <p class="text-sm text-gray-700">Selain baik dilakukan saat hamil dan setelah melahirkan, senam Kegel juga bisa dilakukan sebagai senam untuk program hamil.</p>
            </div>
        </div>

        <!-- Video 2 -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="aspect-w-16 aspect-h-9">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/4ZAHX-N-AhM?si=EOJXUncBp9idoz-G" 
                        title="7 Tips Agar Kehamilanmu Tetap Sehat" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
            <div class="p-4 text-left">
                <h3 class="text-xl font-semibold text-pink-600 mb-2">Tips Agar Kehamilanmu Tetap Sehat</h3>
                <p class="text-sm text-gray-700">Bumil harus menjaga kesehatan agar terhindar dari bahaya dan komplikasi selama kehamilan berlangsung. Yuk, ikuti 7 tips dari dokter.</p>
            </div>
        </div>

        <!-- Video 3 -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="aspect-w-16 aspect-h-9">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/OtdN8aHg-w8" 
                        title="Cegah Komplikasi Kehamilan" 
                        rameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
            <div class="p-4 text-left">
                <h3 class="text-xl font-semibold text-pink-600 mb-2">Cegah Komplikasi Kehamilan</h3>
                <p class="text-sm text-gray-700">Pelajari langkah-langkah yang dapat dilakukan oleh ibu hamil untuk mencegah komplikasi berbahaya selama masa kehamilan.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Header Section -->
    <section class="bg-gradient-to-r from-pink-400 to-pink-600 text-white py-12">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl sm:text-4xl font-bold text-white-800 mb-4">Baca Artikel Untuk Ibu Hamil</h1>
            <p class="text-lg">Informasi tentang ibu hamil terpercaya hanya untukmu</p>
        </div>
    </section>

    <!-- Artikel List -->
    <section class="py-12">
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Artikel 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://i.pinimg.com/736x/6d/16/21/6d162129c5f5e0000850fe26c939dbca.jpg" alt="Olahraga" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Olahraga Untuk Ibu Hamil</h3>
                    <p class="text-gray-600 text-sm mb-4">Membahas berbagai jenis olahraga yang cocok untuk ibu hamil, seperti jalan kaki, yoga prenatal, berenang, pilates, hingga latihan Kegel...</p>
                    <a href="/olahraga" class="text-pink-600 font-medium text-sm">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://i.pinimg.com/736x/41/3e/1f/413e1f6b6ce3882e6d1982b1f95b5820.jpg" alt="Gejala Kehamilan" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Gejala Kehamilan yang Jarang Diketahui</h3>
                    <p class="text-gray-600 text-sm mb-4">Gejala kehamilan berupa mual, muntah, sakit punggung, atau badan pegal-pegal mungkin sudah biasa kamu dengar...</p>
                    <a href="/gejalakehamilan" class="text-pink-600 font-medium text-sm">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://i.pinimg.com/736x/95/95/17/959517910cf646b431085eb141070e8e.jpg" alt="Cara Merawat Bayi" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Cara Merawat Bayi</h3>
                    <p class="text-gray-600 text-sm mb-4">Merawat bayi baru lahir memerlukan perhatian khusus dan pengetahuan dasar untuk memastikan kesejahteraan si kecil...</p>
                    <a href="/merawatbayi" class="text-pink-600 font-medium text-sm">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Artikel 4 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://i.pinimg.com/736x/e5/e0/ea/e5e0ea11a93af444ec25dcc8bd156ea9.jpg" alt="Menyusui dan Rambut" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Apakah ibu menyusui boleh cat rambut?</h3>
                    <p class="text-gray-600 text-sm mb-4">Ibu menyusui yang sering bergonta-ganti warna rambut sebelum hamil mungkin penasaran, apakah ibu menyusui boleh cat...</p>
                    <a href="#" class="text-pink-600 font-medium text-sm">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Artikel 5 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://i.pinimg.com/736x/92/db/07/92db0794bb1ed01e1dc775ec60bdbf6f.jpg" alt="Jagung Rebus" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Manfaat jagung rebus untuk ibu hamil</h3>
                    <p class="text-gray-600 text-sm mb-4">Manfaat jagung rebus untuk ibu hamil sangatlah banyak, mulai dari meredakan morning sickness hingga mencegah...</p>
                    <a href="#" class="text-pink-600 font-medium text-sm">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Artikel 6 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://i.pinimg.com/736x/c3/01/90/c30190f99d218b083a8bb1398070b99d.jpg" alt="Olahraga" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Makanan yang harus dihindari ibu hamil</h3>
                    <p class="text-gray-600 text-sm mb-4">Ada beberapa makanan yang harus dihindari ibu hamil. Pasalnya, jenis makanan tertentu berpotensi membahayakan kesehatan...</p>
                    <a href="#" class="text-pink-600 font-medium text-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Tombol Selanjutnya -->
        <div class="mt-8 text-center">
            <button class="bg-pink-600 text-white font-semibold py-2 px-6 rounded-lg shadow hover:bg-pink-500">
                Selanjutnya >>
            </button>
        </div>
    </section>
</body>
</html>
