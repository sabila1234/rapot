<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Data Guru</title>
    <link rel="stylesheet" href="../css/guru.css">
    <!-- <script src="../js/guru.js" defer></script> -->
</head>
<body>
    <div class="container">
        <h2>Form Pengisian Data Guru</h2>
        <form id="guruForm" method="post">
            <label for="nip">NIP:</label>
            <input type="text" id="nip" name="nip" required placeholder="Masukkan NIP">

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required placeholder="Masukkan Nama">

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required placeholder="Masukkan Alamat"></textarea>

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
            <input type="tel" id="telpon" name="telpon" required placeholder="Masukkan Nomor Telepon">

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
<?php
if (isset($_POST['tambah'])) {
    $nip = htmlspecialchars($_POST['nip']);
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $agama = htmlspecialchars($_POST['agama']);
    $telp = htmlspecialchars($_POST['telpon']);

    $query = "INSERT INTO tb_guru (nip,nama,alamat,agama,telpon) VALUES ('$nip', '$nama', '$alamat', '$agama', '$telp')";
    $ambil = $koneksi->query($query);

    if ($ambil) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script> const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
Toast.fire({
  icon: 'success',
  title: 'Berhasil Menambahkan Data'
}); </script>";
} else {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script> const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
Toast.fire({
  icon: 'error',
  title: 'Gagal Menambahkan Data'
}); </script>";
    };
    
}
?>