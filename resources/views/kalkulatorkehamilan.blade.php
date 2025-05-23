@extends('layouts.app')

@section('content')
<section id="calculator" class="py-16 px-6 sm:px-12 bg-gray-50">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8">Kalkulator Kehamilan</h2>
        <p class="text-lg sm:text-xl text-gray-600 mb-6">Masukkan tanggal pertama kali haid terakhir (HPHT) untuk menghitung usia kehamilan Anda.</p>
        <form class="max-w-lg mx-auto">
            <div class="mb-4">
                <label for="hpht" class="block text-sm font-semibold text-pink-700 mb-2">Tanggal HPHT</label>
                <input type="date" id="hpht" name="hpht" class="w-full px-3 py-2 border border-pink-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 bg-pink-100 text-pink-900">
            </div>
            <button type="button" id="calculate" class="w-full px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">Hitung Usia Kehamilan</button>
            <div id="result" class="mt-4 text-lg text-gray-600 hidden">
                <p>Usia kehamilan Anda saat ini adalah <span id="gestationAge"></span> minggu.</p>
            </div>
        </form>
    </div>
</section>

<script>
    document.getElementById('calculate').addEventListener('click', function () {
        const hpht = new Date(document.getElementById('hpht').value);
        if (isNaN(hpht.getTime())) {
            alert('Tolong masukkan tanggal HPHT yang valid');
            return;
        }
        
        const today = new Date();
        const diffTime = today - hpht;
        const diffDays = diffTime / (1000 * 3600 * 24);
        const weeksPregnant = Math.floor(diffDays / 7);

        document.getElementById('gestationAge').textContent = weeksPregnant;
        document.getElementById('result').classList.remove('hidden');
    });
</script>
@endsection