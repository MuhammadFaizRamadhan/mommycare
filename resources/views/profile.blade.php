@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-t from-white to-pink-100 min-h-screen flex items-center justify-center">
    <!-- Profile Card -->
    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-3xl">
        <!-- Header Profile -->
        <div class="text-center mb-6">
            <!-- Teks "Profil Anda" -->
            <h1 class="text-3xl font-bold text-pink-600 mb-4">Profil Anda</h1>

            <!-- Avatar -->
            <div class="w-24 h-24 rounded-full mx-auto border-4 border-pink-300 overflow-hidden">
            @if (Auth::user()->foto)
                <img src="{{ asset('uploads/' . Auth::user()->foto) }}" alt="Foto Profil" class="w-24 h-24 object-cover rounded-full border-4 border-pink-300">
            @endif
            </div>
        </div>

        <!-- Profile Data -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700">Nama</label>
                <div class="bg-gradient-to-br from-pink-100 to-blue-100 rounded-lg p-3 text-gray-700 text-center font-medium">
                    {{ Auth::user()->nama_user }}
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                <div class="bg-gradient-to-br from-pink-100 to-blue-100 rounded-lg p-3 text-gray-700 text-center font-medium">
                {{ Auth::user()->email }}
                </div>
            </div>
            <div>
                <label for="no_telp" class="block text-sm font-semibold text-gray-700">No Telepon</label>
                <div class="bg-gradient-to-br from-pink-100 to-blue-100 rounded-lg p-3 text-gray-700 text-center font-medium">
                    {{ Auth::user()->no_telp }}
                </div>
            </div>
            <div>
                <label for="alamat" class="block text-sm font-semibold text-gray-700">Alamat</label>
                <div class="bg-gradient-to-br from-pink-100 to-blue-100 rounded-lg p-3 text-gray-700 text-center font-medium">
                {{ Auth::user()->alamat }}
                </div>
            </div>
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                <div class="bg-gradient-to-br from-pink-100 to-blue-100 rounded-lg p-3 text-gray-700 text-center font-medium">
                    **********
                </div>
            </div>
        </div>

        <!-- Button to Edit Profile -->
        <div class="text-center">
            <button onclick="openModal()" class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-3 rounded-full shadow-md transition duration-200">
                Edit Profil
            </button>
        </div>
          
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-6 mt-6">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded-lg mb-6">
                {{ implode(', ', $errors->all()) }}
            </div>
        @endif
    </div>
</div>


<!-- Modal -->
<div id="modalForm" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden pt-16">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg border-2 border-pink-300">
        <h2 class="text-2xl font-bold text-pink-600 mb-6 text-center">Edit Profil</h2>
        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700">Nama</label>
                <input type="text" id="name" name="name" class="w-full rounded-lg border-gray-300 p-3 border-2 border-pink-300" value="{{ Auth::user()->nama_user }}">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full rounded-lg border-gray-300 p-3 border-2 border-pink-300" value="{{ Auth::user()->email }}">
            </div>
            <div class="mb-4">
                <label for="no_telp" class="block text-sm font-semibold text-gray-700">No Telp</label>
                <input type="text" id="no_telp" name="no_telp" class="w-full rounded-lg border-gray-300 p-3 border-2 border-pink-300" value="{{ Auth::user()->no_telp }}">
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-semibold text-gray-700">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="w-full rounded-lg border-gray-300 p-3 border-2 border-pink-300" value="{{ Auth::user()->alamat }}">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full rounded-lg border-gray-300 p-3 border-2 border-pink-300" placeholder="Kosongkan jika tidak ingin mengubah">
            </div>
            <div class="mb-4">
                <label for="foto" class="block text-sm font-semibold text-gray-700">Foto</label>
                <input type="file" id="foto" name="foto" class="w-full rounded-lg border-gray-300 p-3 border-2 border-pink-300">
            </div>
            <div class="flex justify-end space-x-4">
                <button type="button" onclick="closeModal()" class="bg-gray-300 px-6 py-2 rounded-full text-gray-700 font-semibold">
                    Batal
                </button>
                <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-2 rounded-full font-semibold">
                    Simpan
                </button>
            </div>
        </form>

    </div>
</div>

<script>
    function openModal() {
        document.getElementById('modalForm').classList.remove('hidden');
    }
    function closeModal() {
        document.getElementById('modalForm').classList.add('hidden');
    }
</script>
@endsection
