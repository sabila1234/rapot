<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Data Murid</title>
    <link rel="stylesheet" href="css/murid.css">
    <script src="js/murid.js" defer></script>
</head>
<body>
    <div class="container">
        <h2>Form Pengisian Data Murid</h2>
        <form id="muridForm">
            <label for="nisn">NISN:</label>
            <input type="text" id="nisn" name="nisn" required placeholder="Masukkan NISN">

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required placeholder="Masukkan Nama">

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required placeholder="Masukkan Alamat"></textarea>

            <label for="kelas">Kelas:</label>
            <select id="kelas" name="kelas" required>
                <option value="">Pilih Kelas</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>

            <label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan" required>
                <option value="">Pilih Jurusan</option>
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
                <option value="Bahasa">Bahasa</option>
            </select>

            <button type="submit">Kirim</button>
        </form>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="text-muted">Copyright &copy; Your Website <?= date('Y') ?></div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </footer>
</body>
</html>
