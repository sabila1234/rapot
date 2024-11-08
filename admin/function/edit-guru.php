<?php
include "../../koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_guru WHERE id_guru = $id";
$ambil = $koneksi->query($sql);
$pecah = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Guru</title>
    <link rel="stylesheet" href="../../css/guru.css">
    <!-- <script src="../js/guru.js" defer></script> -->
</head>
<body>
    <div class="container">
        <h2>Form Edit Data Guru</h2>
        <form id="guruForm" method="post">
            <label for="nip">NIP:</label>
            <input type="number" inputmode="numeric" id="nip" name="nip" value="<?php echo $pecah['nip']  ?>" placeholder="Masukkan NIP">

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $pecah['nama']  ?>" placeholder="Masukkan Nama">

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat"  placeholder="Masukkan Alamat"><?php echo $pecah['alamat']  ?></textarea>

            <label for="agama">Agama:</label>
            <?php  $agama = $pecah['agama']; ?>
            <select id="agama" name="agama" required>
                <option  value="">Pilih Agama</option>
                <option <?php echo ($agama=='Islam') ? "selected": ""?>>Islam</option>
                <option <?php echo ($agama=='Kristen') ? "selected": ""?>>Kristen</option>
                <option <?php echo ($agama=='Hindu') ? "selected": ""?>>Hindu</option>
                <option <?php echo ($agama=='Buddha') ? "selected": ""?>>Buddha</option>
                <option <?php echo ($agama=='Konghucu') ? "selected": ""?>>Konghucu</option>
                <option value="Lainnya">Lainnya</option>
            </select>

            <label for="telpon">Telepon:</label>
            <input type="number" inputmode="numeric" id="telpon" name="telpon" value="<?php echo $pecah['telpon'] ?>" placeholder="Masukkan Nomor Telepon">

            <button type="submit" name="ganti">Ganti</button>
            <a href="../dataguru.php" class="batal" name="Batal">Batal</a>
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
if (isset($_POST['ganti'])) {
    $nip = htmlspecialchars($_POST['nip']);
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $agama = htmlspecialchars($_POST['agama']);
    $telp = htmlspecialchars($_POST['telpon']);
    $sql = "UPDATE tb_guru SET nip='$nip', nama='$nama', alamat='$alamat', agama='$agama', telpon='$telp' WHERE id_guru='$id'";
    $ambil = $koneksi->query($sql);
    if ($ambil) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
            const Toast = Swal.mixin({
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
                title: 'Berhasil Mengubah Data'
            }).then(() => {
                // Setelah animasi selesai, arahkan ke halaman lain
                window.location.href = '../dataguru.php';
            });
        </script>";
        } else {
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<script>
                const Toast = Swal.mixin({
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
                    title: 'Gagal Mengubah Data'
                }).then(() => {
                    // Setelah animasi selesai, arahkan ke halaman lain
                    window.location.href = '../dataguru.php';
                });
            </script>";
            
    }
}



?>