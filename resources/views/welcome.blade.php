<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Bikintech</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">
<div class="container mx-auto mt-8">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-4">Input Nilai Siswa</h1>
        <form action="{{ route('calculate') }}" method="post">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="NilaiTugas">
                    Total Nilai Tugas:
                  </label>
                  <input name="tugas" id="tugas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                   type="number"  placeholder="Nilai Tugas" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="NilaiUjian">
                    Total Nilai Ujian:
                  </label>
                  <input name="ujian" id="ujian" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                   type="number"  placeholder="Nilai Ujian" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Hitung Nilai</button>
            <a type="submit" href="{{ url('/') }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Ulang</a>
        </form>
        @if(isset($grade))
            <div class="mt-4 bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-lg font-semibold mb-2">Hasil Perhitungan:</h2>
                <p class="text-gray-700">Total Nilai: {{ $totalNilai }}</p>
                <p class="text-gray-700">Grade: {{ $grade }}</p>
            </div>
        @endif

    </div>
</div>

</body>
</html>
