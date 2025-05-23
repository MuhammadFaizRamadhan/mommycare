@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - Olahraga Untuk Ibu Hamil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen">
    <div class="container mx-auto p-6">
        <div class="article bg-white rounded-xl shadow-lg p-6">
            <!-- Breadcrumb -->
            <div class="breadcrumb text-sm text-gray-500 mb-4">
                <a href="/" class="text-pink-500 hover:underline">Home</a> &gt; 
                <a href="/artikel" class="text-pink-500 hover:underline">Articles</a> &gt; 
                <span>Olahraga Untuk Ibu Hamil</span>
            </div>
    
            <!-- Judul Artikel -->
            <h1 class="text-2xl font-bold text-pink-600 mb-6 text-center">Olahraga Untuk Ibu Hamil</h1>
    
            <!-- Gambar Artikel -->
            <div class="flex justify-center mb-6">
                <img class="img-article rounded-lg shadow-md" src="https://i.pinimg.com/736x/6d/16/21/6d162129c5f5e0000850fe26c939dbca.jpg" alt="Gambar Artikel">
            </div>
            
            <!-- Isi Artikel -->
            <p class="text-base leading-7 mb-4">
                Olahraga sehat untuk Ibu Hamil, manfaat dan jenis yang disarankan olahraga selama kehamilan memiliki banyak manfaat, mulai dari meningkatkan kebugaran tubuh, mengurangi risiko komplikasi, hingga membantu persiapan tubuh menghadapi persalinan. Namun, penting untuk memilih jenis olahraga yang aman dan sesuai dengan kondisi kehamilan.
            </p>
            <p class="text-base leading-7 mb-4">
                Artikel ini akan membahas manfaat olahraga untuk ibu hamil, jenis olahraga yang direkomendasikan, serta tips aman untuk melakukannya.
            </p>
    
            <!-- Sub Judul -->
            <h2 class="text-xl font-semibold text-gray-700 mt-8 mb-4">Manfaat Olahraga untuk Ibu Hamil</h2>
            <ul class="list-decimal pl-6 mb-6 space-y-2">
                <li>Mengurangi nyeri punggung dan kram otot, aktivitas fisik membantu melonggarkan otot-otot tegang.</li>
                <li>Meningkatkan sirkulasi darah olahraga dapat mencegah pembengkakan kaki akibat aliran darah yang lambat.</li>
                <li>Mengurangi stres, gerakan ringan seperti yoga membantu menenangkan pikiran.</li>
                <li>Meningkatkan stamina dan kekuatan, persiapan fisik yang baik akan memudahkan proses persalinan.</li>
                <li>Mencegah kenaikan berat badan berlebih, olahraga membantu menjaga berat badan tetap sehat selama kehamilan.</li>
            </ul>
    
            <h2 class="text-xl font-semibold text-gray-700 mt-8 mb-4">Jenis Olahraga Aman untuk Ibu Hamil</h2>
            <ul class="list-decimal pl-6 mb-6 space-y-4">
                <li>
                    <strong>Jalan Kaki</strong>
                    <p class="text-base leading-6">Jalan kaki adalah olahraga sederhana dan aman untuk dilakukan sepanjang kehamilan. Aktivitas ini membantu meningkatkan sirkulasi darah tanpa memberikan tekanan berlebih pada persendian.</p>
                </li>
                <li>
                    <strong>Yoga Prenatal</strong>
                    <p class="text-base leading-6">Yoga prenatal dirancang khusus untuk ibu hamil. Gerakannya membantu meregangkan otot, meningkatkan keseimbangan, dan melatih pernapasan, yang sangat berguna saat persalinan.</p>
                </li>
                <li>
                    <strong>Berenang</strong>
                    <p class="text-base leading-6">Olahraga ini mengurangi tekanan pada sendi dan otot, sehingga cocok untuk ibu hamil yang mengalami nyeri punggung. Selain itu, berenang juga membantu mengurangi bengkak pada tubuh.</p>
                </li>
                <li>
                    <strong>Pilates</strong>
                    <p class="text-base leading-6">Pilates untuk ibu hamil fokus pada memperkuat otot inti, memperbaiki postur tubuh, dan meningkatkan fleksibilitas. Ini sangat bermanfaat untuk menjaga keseimbangan tubuh selama kehamilan.</p>
                </li>
                <li>
                    <strong>Latihan Kegel</strong>
                    <p class="text-base leading-6">Latihan ini melibatkan pengencangan otot dasar panggul, yang membantu mengurangi risiko inkontinensia dan mempersiapkan tubuh untuk proses persalinan.</p>
                </li>
                <li>
                    <strong>Senam Hamil</strong>
                    <p class="text-base leading-6">Biasanya senam hamil dilakukan dalam kelas yang dipandu oleh instruktur. Gerakannya dirancang khusus untuk membantu ibu hamil merasa lebih rileks dan siap menghadapi persalinan.</p>
                </li>
            </ul>

            <h2 class="text-xl font-semibold text-gray-700 mt-8 mb-4">Tips Aman Berolahraga untuk Ibu Hamil</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li>Konsultasikan dengan dokter sebelum memulai program olahraga.</li>
                <li>Gunakan pakaian yang nyaman dan dukungan sepatu yang tepat.</li>
                <li>Hindari olahraga dengan risiko jatuh atau kontak fisik, seperti ski atau sepak bola.</li>
                <li>Pastikan untuk minum cukup air sebelum, selama, dan setelah olahraga.</li>
                <li>Dengarkan tubuh Anda, berhenti jika merasa lelah, pusing, atau kesakitan.</li>
            </ul>
        </div>
    </div>
</body>
</html>
@endsection
