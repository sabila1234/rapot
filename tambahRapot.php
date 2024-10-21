<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai Rapor</title>
    <link rel="stylesheet" href="css/datarapot.css ">
</head>
<body>

<div class="container">
    <h1>Input Nilai Rapor</h1>
    
    <form id="nilaiForm">
        <table class="rapor-table">
            <tr>
                <th>NISN</th>
                <td colspan="3">
                    <input type="text" id="nisn" placeholder="Masukkan NISN" required>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><input type="text" id="nama" placeholder="Nama" readonly></td>
                <th>Kelas</th>
                <td><input type="text" id="kelas" placeholder="Kelas" readonly></td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td><input type="text" id="jurusan" placeholder="Jurusan" readonly></td>
                <th>Tahun Ajaran</th>
                <td><input type="text" id="tahunAjaran" placeholder="2023/2024" required></td>
            </tr>
            <tr>
                <th>Semester</th>
                <td colspan="3">
                    <select id="semester" required>
                        <option value="" disabled selected>Pilih Semester</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </td>
            </tr>
        </table>
        
        <div id="mataPelajaranContainer">
            <h3>Mata Pelajaran</h3>
            <div class="mapel-group">
                <table class="rapor-table">
                    <tr>
                        <th>Mata Pelajaran</th>
                        <td><input type="text" class="mapel" placeholder="Mata Pelajaran" required></td>
                    </tr>
                    <tr>
                        <th>Nilai Kompetensi</th>
                        <td><input type="number" class="nilaiKompetensi" placeholder="Nilai Kompetensi" required></td>
                        <th>Nilai Keterampilan</th>
                        <td><input type="number" class="nilaiKeterampilan" placeholder="Nilai Keterampilan" required></td>
                    </tr>
                    <tr>
                        <th>KKM</th>
                        <td><input type="number" class="kkm" placeholder="KKM" required></td>
                        <th>Keterangan</th>
                        <td>
                            <textarea class="keterangan" placeholder="Keterangan (Opsional)"></textarea>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <button type="button" id="addMapelBtn">Tambah Mata Pelajaran</button>

        <button type="submit">Submit</button>
        <div id="averageResult" style="margin-top: 20px; display: none;"></div>
    </form>
</div>

<footer>
    <p>© <?= date ('Y') ?> Sekolah XYZ. All rights reserved.</p>
</footer>

<script src="js/datarapot.js" defer></script>
</body>
</html>

   