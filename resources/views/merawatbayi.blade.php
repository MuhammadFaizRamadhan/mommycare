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
                <span>Cara Merawat Bayi</span>
            </div>
    
            <!-- Judul Artikel -->
            <h1 class="text-2xl font-bold text-pink-600 mb-6 text-center">Cara Merawat Bayi</h1>
    
            <!-- Gambar Artikel -->
            <div class="flex justify-center mb-6">
                <img class="img-article rounded-lg shadow-md" src="https://i.pinimg.com/736x/07/1b/84/071b84bf9a09432fb71a002912898a61.jpg" alt="Gambar Artikel">
            </div>

            <!-- Isi Artikel -->
            <p class="text-base leading-7 mb-4">
            Merawat bayi baru lahir bisa menjadi tantangan, terutama bagi orang tua baru. Bayi baru lahir membutuhkan perawatan ekstra karena tubuhnya masih sangat rentan dan sensitif. Berikut ini adalah panduan mendetail untuk membantu Anda memberikan perawatan terbaik bagi buah hati.
            </p>
    
            <h2 class="text-xl font-semibold text-gray-700 mt-8 mb-4">Menjaga Kebersihan Bayi</h2>
            <ul class="list-decimal pl-6 mb-6 space-y-2">
                <li>Memandikan bayi: Mandikan bayi 2-3 kali seminggu menggunakan air hangat dan sabun khusus bayi yang lembut. Pastikan suhu air nyaman (sekitar 37°C).</li>
                <li>Membersihkan tali pusar: Tali pusar harus tetap kering dan bersih. Gunakan kapas yang dibasahi air steril untuk membersihkannya, lalu biarkan kering sebelum menutupnya dengan popok.</li>
                <li>Mengganti popok: Ganti popok setiap kali basah atau kotor untuk mencegah iritasi kulit. Bersihkan area popok dengan kapas atau tisu basah yang lembut.</li>
            </ul>

            <h2 class="text-xl font-semibold text-gray-700 mt-8 mb-4">Memberikan ASI atau Susu Formula</h2>
            <ul class="list-decimal pl-6 mb-6 space-y-2">
                <li>Menyusui ASI: ASI adalah makanan terbaik untuk bayi baru lahir karena mengandung semua nutrisi penting. Berikan ASI setiap 2-3 jam atau saat bayi lapar.</li>
                <li>Susu formula: Jika Anda menggunakan susu formula, ikuti petunjuk pada kemasan untuk mencampur dengan benar. Jangan biarkan bayi tidur dengan botol untuk mencegah risiko tersedak.</li>
                <li>Posisi menyusui: Pastikan posisi menyusui nyaman bagi Anda dan bayi. Kepala bayi harus lebih tinggi dari tubuhnya untuk mencegah refluks.</li>
            </ul>

            <h2 class="text-xl font-semibold text-gray-700 mt-8 mb-4">Menidurkan Bayi</h2>
            <ul class="list-decimal pl-6 mb-6 space-y-2">
                <li>Posisi tidur: Letakkan bayi tidur telentang untuk mengurangi risiko sindrom kematian mendadak bayi (SIDS).</li>
                <li>Lingkungan tidur: Gunakan kasur yang keras dengan seprai yang rapat. Hindari bantal, selimut tebal, atau mainan di tempat tidur bayi.</li>
                <li>Rutin tidur: Ciptakan rutinitas tidur yang nyaman, seperti membacakan cerita atau memeluk bayi sebelum tidur.</li>
            </ul>

            <h2 class="text-xl font-semibold text-gray-700 mt-8 mb-4">Merawat Kulit Bay</h2>
            <ul class="list-decimal pl-6 mb-6 space-y-2">
                <li>Gunakan lotion atau minyak khusus bayi untuk menjaga kelembapan kulit.</li>
                <li>Hindari produk yang mengandung pewangi atau bahan kimia keras.</li>
                <li>Jika terjadi ruam popok, oleskan salep ruam sesuai anjuran dokter.</li>
            </ul>

            <h2 class="text-xl font-semibold text-gray-700 mt-8 mb-4">Memberikan Stimulasi dan Kasih Sayang</h2>
            <ul class="list-decimal pl-6 mb-6 space-y-2">
                <li>Sentuhan lembut: Pijat bayi secara perlahan untuk meningkatkan ikatan emosional dan melancarkan peredaran darah.</li>
                <li>Berbicara dan bernyanyi: Ajak bayi berbicara atau bernyanyi untuk merangsang perkembangan pendengarannya.</li>
                <li>Mainan sederhana: Gunakan mainan warna-warni atau bunyi lembut untuk merangsang indra penglihatan dan pendengaran.</li>
            </ul>

            <h2 class="text-xl font-semibold text-gray-700 mt-8 mb-4">Memantau Kesehatan Bayi</h2>
            <ul class="list-decimal pl-6 mb-6 space-y-2">
                <li>Kunjungan dokter: Lakukan pemeriksaan rutin sesuai jadwal imunisasi untuk memastikan bayi tumbuh sehat</li>
                <li>Waspadai tanda-tanda sakit: Jika bayi demam, sulit makan, atau tampak sangat rewel, segera konsultasikan dengan dokter.</li>
                <li>Imunisasi: Berikan imunisasi sesuai jadwal untuk melindungi bayi dari berbagai penyakit.</li>
            </ul>
        </div>
    </div>
</body>
</html>
@endsection
