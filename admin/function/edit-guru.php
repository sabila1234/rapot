<?php
include "../../koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_guru WHERE nip = $id";
$ambil = $koneksi->query($sql);
$pecah = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Data Guru</title>
    <link rel="stylesheet" href="../../css/guru.css">
    <!-- <script src="../js/guru.js" defer></script> -->
</head>
<body>
    <div class="container">
        <h2>Form Pengisian Data Guru</h2>
        <form id="guruForm" method="post">
            <label for="nip">NIP:</label>
            <input type="number" inputmode="numeric" id="nip" name="nip" value="<?php echo $pecah['nip']  ?>" placeholder="Masukkan NIP">

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $pecah['nama']  ?>" placeholder="Masukkan Nama">

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat"  placeholder="Masukkan Alamat"><?php echo $pecah['alamat']  ?></textarea>

            <label for="agama">Agama:</label>
            <select id="agama" name="agama" required>
                <option value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="Lainnya">Lainnya</option>
            </select>

            <label for="telpon">Telepon:</label>
            <input type="number" inputmode="numeric" id="telpon" name="telpon" required placeholder="Masukkan Nomor Telepon">

            <button type="submit" name="tambah">Tambah</button>
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