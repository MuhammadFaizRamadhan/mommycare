@extends('layouts.app')
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Konsultasi Dokter - MommyCare</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans bg-gradient-to-b from-pink-100 to-pink-200 pt-16">
        <!-- Header Section -->
        <section class="py-12 text-center">
            <h1 class="text-3xl font-bold text-gray-800">Pilih Dokter Sesuai Kebutuhan Bunda</h1>
        </section>

        <!-- Doctor Cards Section -->
        <section class="flex justify-center items-center gap-6 px-4 sm:px-12 py-12">
            <!-- Doctor Card -->
            <div class="max-w-sm bg-white shadow-md rounded-lg p-6 text-center">
                <img src="https://i.pinimg.com/736x/8f/56/3d/8f563dd13ef9bca2a9926b08360acbd5.jpg" alt="Doctor Image" class="w-24 h-24 mx-auto rounded-full object-cover">
                <h2 class="mt-4 text-xl font-semibold">Dokter Bedah</h2>
                <p class="mt-2 text-gray-500 font-medium">Dr. Mulyani</p>
                <p class="mt-2 text-sm text-gray-600">
                    Seorang profesional medis yang memiliki keahlian khusus dalam melakukan operasi
                </p>
                <a href="/chat-dokter">
                    <button class="mt-4 bg-pink-400 hover:bg-pink-500 text-white py-2 px-4 rounded-lg">
                        Konsultasi
                    </button>
                </a>
            </div>

            <!-- Doctor Card -->
            <div class="max-w-sm bg-white shadow-md rounded-lg p-6 text-center">
                <img src="https://i.pinimg.com/736x/88/ca/9c/88ca9c3effda318f7862d9f901ac01d3.jpg" alt="Doctor Image" class="w-24 h-24 mx-auto rounded-full object-cover">
                <h2 class="mt-4 text-xl font-semibold">Spesialis Kandungan</h2>
                <p class="mt-2 text-gray-500 font-medium">Dr. Christ Evan</p>
                <p class="mt-2 text-sm text-gray-600">
                    Dokter yang memiliki keahlian khusus dalam merawat kesehatan reproduksi wanita.
                </p>
                <a href="/chat-dokter">
                    <button class="mt-4 bg-pink-400 hover:bg-pink-500 text-white py-2 px-4 rounded-lg">
                        Konsultasi
                    </button>
                </a>
            </div>

            <!-- Doctor Card -->
            <div class="max-w-sm bg-white shadow-md rounded-lg p-6 text-center">
                <img src="https://i.pinimg.com/736x/c5/a3/90/c5a3904b38eb241dd03dd30889599dc4.jpg" alt="Doctor Image" class="w-24 h-24 mx-auto rounded-full object-cover">
                <h2 class="mt-4 text-xl font-semibold">Dokter Obgyn</h2>
                <p class="mt-2 text-gray-500 font-medium">Dr. Clara Kiehl</p>
                <p class="mt-2 text-sm text-gray-600">
                    Sokter spesialis yang memiliki keahlian khusus dalam merawat kesehatan reproduksi wanita.
                </p>
                <a href="/chat-dokter">
                    <button class="mt-4 bg-pink-400 hover:bg-pink-500 text-white py-2 px-4 rounded-lg">
                        Konsultasi
                    </button>
                </a>
            </div>
        </section>
    </body>
</html>