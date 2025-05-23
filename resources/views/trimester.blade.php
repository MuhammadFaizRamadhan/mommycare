@extends('layouts.app')

@section('content')
<section id="trimester" class="py-16 px-6 sm:px-12 bg-gray-50">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8">Ketahui Trimester Anda</h2>
        <p class="text-lg sm:text-xl text-gray-600 mb-6">Masukkan minggu kehamilan Anda untuk mengetahui trimester dan penjelasannya.</p>

        <!-- Input Form -->
        <form id="trimesterForm" class="mb-8">
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <input type="number" id="weekInput" name="week" placeholder="Masukkan Minggu Kehamilan" 
                       class="w-60 p-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500" min="0" max="40">
                <button type="button" onclick="calculateTrimester()" 
                        class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-6 rounded-lg">
                    Hitung Trimester
                </button>
            </div>
        </form>

        <!-- Result Section -->
        <div id="result" class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg hidden">
            <h3 id="trimesterTitle" class="text-2xl font-bold text-gray-800 mb-4"></h3>
            <p id="trimesterDescription" class="text-lg text-gray-600 leading-relaxed"></p>
        </div>
    </div>
</section>

<script>
    function calculateTrimester() {
        const week = parseInt(document.getElementById('weekInput').value);
        const resultDiv = document.getElementById('result');
        const title = document.getElementById('trimesterTitle');
        const description = document.getElementById('trimesterDescription');

        if (isNaN(week) || week < 0 || week > 40) {
            alert('Harap masukkan angka antara 0 dan 40 untuk minggu kehamilan!');
            return;
        }

        let trimesterTitle = '';
        let trimesterDescription = '';

        if (week >= 0 && week <= 13) {
            trimesterTitle = 'Trimester Pertama (0–13 Minggu)';
            trimesterDescription = `
                <strong>Perkembangan Janin:</strong><br>
                - Minggu 1–4: Zigot berkembang menjadi embrio dan mulai menempel di dinding rahim.<br>
                - Minggu 5–8: Organ utama seperti jantung dan otak mulai terbentuk. Jantung mulai berdetak.<br>
                - Minggu 9–13: Embrio menjadi janin, fitur wajah dan alat kelamin mulai terlihat.<br><br>
                <strong>Perubahan pada Ibu:</strong><br>
                - Morning sickness (mual dan muntah), kelelahan, dan sering buang air kecil.<br>
                - Perubahan hormon yang signifikan.<br><br>
                <strong>Perhatian Khusus:</strong><br>
                - Konsumsi asupan nutrisi seperti asam folat, zat besi, dan kalsium.<br>
                - Hindari alkohol, merokok, dan obat-obatan tanpa rekomendasi dokter.
            `;
        } else if (week >= 14 && week <= 26) {
            trimesterTitle = 'Trimester Kedua (14–26 Minggu)';
            trimesterDescription = `
                <strong>Perkembangan Janin:</strong><br>
                - Janin tumbuh lebih besar dan mulai bergerak, terasa sekitar minggu ke-18 hingga ke-22.<br>
                - Organ seperti paru-paru dan ginjal mulai matang.<br>
                - Kulit janin dilapisi vernix caseosa dan rambut halus (lanugo).<br><br>
                <strong>Perubahan pada Ibu:</strong><br>
                - Morning sickness berkurang atau hilang.<br>
                - Perut mulai membesar, nyeri ringan di punggung atau panggul.<br><br>
                <strong>Perhatian Khusus:</strong><br>
                - Lakukan pemeriksaan rutin untuk memantau perkembangan janin.<br>
                - Konsumsi makanan bergizi untuk perkembangan tulang dan otak janin.
            `;
        } else if (week >= 27 && week <= 40) {
            trimesterTitle = 'Trimester Ketiga (27–40 Minggu)';
            trimesterDescription = `
                <strong>Perkembangan Janin:</strong><br>
                - Janin tumbuh pesat dan berat badan bertambah.<br>
                - Minggu ke-32, janin mulai bergerak ke posisi lahir.<br>
                - Pembentukan lemak tubuh untuk mengatur suhu setelah lahir.<br><br>
                <strong>Perubahan pada Ibu:</strong><br>
                - Merasa lebih berat, kesulitan tidur, dan sering buang air kecil.<br>
                - Braxton Hicks (kontraksi palsu) mungkin terasa.<br><br>
                <strong>Perhatian Khusus:</strong><br>
                - Perhatikan tanda-tanda persalinan seperti pecahnya air ketuban.<br>
                - Persiapkan kebutuhan persalinan dan peralatan bayi.
            `;
        }

        title.innerHTML = trimesterTitle;
        description.innerHTML = trimesterDescription;
        resultDiv.classList.remove('hidden');
    }
</script>
@endsection
