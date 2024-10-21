<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapor Nilai</title>
    <link rel="stylesheet" href="css/rapot.css">
</head>
<body>

<div class="container">
    <h1>Rapor Nilai</h1>

    <!-- Kolom Pencarian NISN -->
    <div class="search-container">
        <label for="searchNISN">Cari NISN: </label>
        <input type="text" id="searchNISN" placeholder="Masukkan NISN" onkeyup="searchByNISN()">
    </div>

    <div class="info-section">
        <h2>Informasi Siswa</h2>
        <p id="studentInfo"></p>
    </div>

    <table class="rapor-table" id="raporTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Nilai Kompetensi</th>
                <th>Nilai Keterampilan</th>
                <th>KKM</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody id="raporBody">
            <!-- Data Rapor Akan Ditambahkan di Sini -->
        </tbody>
    </table>

    <!-- Tombol Cetak -->
    <button onclick="window.print()" style="margin-top: 20px; padding: 10px; font-size: 16px;">Cetak Rapor</button>
</div>

<footer>
    <p>© <?= date('Y') ?> Sekolah XYZ. All rights reserved.</p>
</footer>

<script src="js/tabelrapot.js"></script>
</body>
</html>
