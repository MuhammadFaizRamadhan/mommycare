@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - MommyCare</title>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body class="bg-pink-50 text-gray-800">
<section class="container mx-auto px-4 py-12 space-y-16">
  <div class="flex items-center justify-between">
    <div class="w-full sm:w-1/2">
    <img src="https://i.pinimg.com/736x/4f/95/61/4f95617f65af6dead619cc072e19494a.jpg" alt="MommyCare" class="w-full h-auto object-cover rounded-lg">
    </div>
    <div class="w-full sm:w-1/2 pl-8">
    <h2 class="text-2xl font-bold text-pink-600 mb-4">
        Tentang MommyCare
    </h2>
    <p class="mt-4 text-gray-600 leading-relaxed">
        MommyCare adalah platform kesehatan yang didedikasikan untuk ibu hamil dan kesehatan anak. Kami memahami bahwa setiap kehamilan membutuhkan perhatian khusus dan dukungan yang tepat. Oleh karena itu, MommyCare hadir dengan layanan lengkap yang mencakup konsultasi dokter, pemantauan kesehatan ibu dan bayi, serta informasi penting yang mendukung perjalanan kehamilan yang sehat dan aman.
    </p>
    <p class="mt-4 text-gray-600 leading-relaxed">
        Dengan MommyCare, Anda dapat memantau perkembangan kehamilan Anda, berkonsultasi langsung dengan dokter kandungan kapan saja, serta mendapatkan panduan mengenai gaya hidup sehat selama kehamilan. Kami berkomitmen untuk membantu Anda merasa tenang dan terjaga selama setiap tahap kehamilan.
    </p>
    </div>
  </div>
</section>

  <main class="container mx-auto px-4 py-12 space-y-16">
    <section class="text-center">
      <h2 class="text-2xl font-bold text-pink-600">Layanan Kami</h2>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="font-bold text-pink-500">Pemantauan Kehamilan</h3>
          <p class="mt-4 text-gray-600">
            Fitur untuk mencatat perkembangan janin, kalender kehamilan, dan tips mingguan.
          </p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="font-bold text-pink-500">Konsultasi Dokter</h3>
          <p class="mt-4 text-gray-600">
            Layanan online untuk berkonsultasi dengan dokter kandungan kapan saja.
          </p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="font-bold text-pink-500">Edukasi Kehamilan</h3>
          <p class="mt-4 text-gray-600">
            Artikel terpercaya mengenai kehamilan, persalinan, dan perawatan bayi.
          </p>
        </div>
      </div>
    </section>

    <section class="space-y-8">
      <div class="text-center">
        <h2 class="text-2xl font-bold text-pink-600">Pertanyaan yang Sering Diajukan</h2>
        <p class="mt-4 text-gray-600">
          Temukan jawaban atas berbagai pertanyaan yang sering diajukan tentang layanan MommyCare untuk ibu hamil dan kesehatan anak.
        </p>
      </div>
      
      <div class="space-y-6">
        <div class="bg-white rounded-lg shadow-md">
          <button class="w-full text-left text-lg font-semibold text-pink-600 flex items-center justify-between py-4 px-6 focus:outline-none" 
                  onclick="toggleFaq(1)">
            Apa itu MommyCare? 
            <span id="icon-1" class="text-pink-500">+</span>
          </button>
          <div id="answer-1" class="px-6 pb-4 text-gray-600 hidden">
            MommyCare adalah platform yang menyediakan layanan kesehatan khusus untuk ibu hamil, termasuk konsultasi dokter, pemantauan kesehatan ibu dan bayi, serta berbagai informasi yang bermanfaat selama masa kehamilan.
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md">
          <button class="w-full text-left text-lg font-semibold text-pink-600 flex items-center justify-between py-4 px-6 focus:outline-none" 
                  onclick="toggleFaq(2)">
            Bagaimana cara mendaftar di MommyCare? 
            <span id="icon-2" class="text-pink-500">+</span>
          </button>
          <div id="answer-2" class="px-6 pb-4 text-gray-600 hidden">
            Anda bisa mendaftar di MommyCare dengan mengunjungi situs web kami dan mengisi formulir registrasi. Setelah itu, Anda akan mendapat akses ke berbagai layanan dan konsultasi dokter.
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md">
          <button class="w-full text-left text-lg font-semibold text-pink-600 flex items-center justify-between py-4 px-6 focus:outline-none" 
                  onclick="toggleFaq(3)">
            Apa layanan yang ditawarkan oleh MommyCare? 
            <span id="icon-3" class="text-pink-500">+</span>
          </button>
          <div id="answer-3" class="px-6 pb-4 text-gray-600 hidden">
            MommyCare menawarkan berbagai layanan, termasuk konsultasi dokter kehamilan, pemantauan kesehatan ibu dan bayi, informasi mengenai tips kehamilan sehat, serta panduan persalinan.
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md">
          <button class="w-full text-left text-lg font-semibold text-pink-600 flex items-center justify-between py-4 px-6 focus:outline-none" 
                  onclick="toggleFaq(4)">
            Bagaimana cara melakukan konsultasi dengan dokter di MommyCare? 
            <span id="icon-4" class="text-pink-500">+</span>
          </button>
          <div id="answer-4" class="px-6 pb-4 text-gray-600 hidden">
            Untuk melakukan konsultasi dengan dokter, Anda dapat memilih jadwal melalui aplikasi atau situs web kami. Kemudian, Anda akan terhubung dengan dokter secara online melalui chat.
          </div>
        </div>
      </div>
    </section>

    <section class="text-center bg-pink-100 py-12 rounded-lg">
      <h2 class="text-2xl font-bold text-pink-600">Bergabunglah dengan MommyCare!</h2>
      <p class="mt-4 text-gray-600">
        Akses berbagai fitur kehamilan dan dukungan dokter kapan saja. Yuk, bergabung sekarang!
      </p>
      <a href="/signup" class="mt-6 inline-block bg-pink-500 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-pink-600 transition">
        Daftar Sekarang
      </a>
    </section>
  </main>

  <script>
    function toggleFaq(id) {
      const answer = document.getElementById(answer-${id});
      const icon = document.getElementById(icon-${id});

      if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        icon.textContent = '-';
      } else {
        answer.classList.add('hidden');
        icon.textContent = '+';
      }
    }
  </script>

</body>
</html>
@endsection
