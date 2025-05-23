@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://i.pinimg.com/736x/68/f6/ad/68f6ada8773298c648a97f9927309244.jpg" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e3fdfd, #ffe6fa);
            min-height: 100vh;
        }

        .profile-card {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2), 0 6px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3), 0 10px 10px rgba(0, 0, 0, 0.2);
        }

        .rounded-avatar {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            padding: 3px;
            border-radius: 50%;
        }

        /* Gradien untuk input */
        .gradient-input {
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
            border: 1px solid #ddd;
            border-radius: 0.375rem; /* rounded-md */
            padding: 0.75rem;
            font-size: 1rem;
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Profile Card -->
    <div class="profile-card bg-white rounded-lg p-6 w-full max-w-4xl mx-auto mt-8">
        <!-- Header Profile -->
<div class="text-center mb-6">
    <!-- Profil Anda -->
    <h1 class="text-lg font-bold text-pink-600 mb-2">Edit Profile</h1>
    <p class="text-sm text-gray-500 mb-4">Perbarui informasi Anda di bawah ini</p>

    <!-- Avatar -->
    <div class="rounded-avatar w-24 h-24 mx-auto overflow-hidden relative mb-4">
        <img src="https://i.pinimg.com/736x/ae/a6/a2/aea6a250b2043163bae78b863f3cf7ab.jpg" 
             alt="Profile Picture" 
             class="rounded-full w-full h-full">
    </div>
    
    <!-- Tombol Ganti Foto -->
    <div class="mb-4">
        <label for="upload-photo" 
               class="bg-pink-500 text-white text-xs font-medium py-2 px-4 rounded-full shadow-md hover:bg-pink-600 cursor-pointer">
            Ganti Foto
        </label>
        <input type="file" id="upload-photo" name="photo" accept="image/*" class="hidden">
    </div>
</div>


        <!-- Form -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="name" class="block text-sm font-medium text-pink-700">Nama</label>
                <input type="text" id="name" name="name" placeholder="Tuliskan nama anda"
                  class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
            </div>
            <div>
                <label for="umur" class="block text-sm font-medium text-pink-700">Umur</label>
                <input type="number" id="umur" name="umur" placeholder="Tuliskan umur anda"
                  class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
            </div>
            <div>
                <label for="alamat" class="block text-sm font-medium text-pink-700">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Tuliskan alamat anda"
                  class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-pink-700">Password</label>
                <input type="password" id="password" name="password" placeholder="Tuliskan Password anda"
                  class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
            </div>
        </div>

        <!-- Button -->
        <div class="text-center">
            <button class="bg-gradient-to-r from-pink-400 to-pink-500 text-white px-6 py-2 rounded-full shadow-md hover:shadow-lg transition-transform transform hover:scale-105 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                Simpan Perubahan
            </button>
        </div>
    </div>

    <!-- Menambahkan jarak di bawah halaman profil -->
    <div class="mt-16"></div>
</body>
</html>
@endsection
