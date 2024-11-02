<?php
include "../../koneksi.php";
$id = $_GET['nisn'];
$sql = "SELECT * FROM tb_siswa WHERE id_siswa = $id";
$ambil = $koneksi->query($sql);
$pecah = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Murid</title>
    <link rel="stylesheet" href="../../css/murid.css">
    <!-- <script src="../js/murid.js" defer></script> -->
</head>
<body>
    <div class="container">
        <h2>Form Edit Data Murid</h2>
        <form id="muridForm" method="post">
            <label for="nisn">NISN:</label>
            <input type="number" inputmode="numeric" id="nisn" name="nisn" value="<?php echo $pecah['nisn'] ?>" placeholder="Masukkan NISN">

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $pecah['nama'] ?>" placeholder="Masukkan Nama">

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat"><?php echo $pecah['alamat'] ?></textarea>

            <label for="kelas">Kelas:</label>
            <?php  $kelas = $pecah['kelas']; ?>
            <select id="kelas" name="kelas" required>
                <option value="">Pilih Kelas</option>
                <option <?php echo ($kelas=="X") ? "selected": "" ?>>X</option>
                <option <?php echo ($kelas=="XI") ? "selected": "" ?>>XI</option>
                <option <?php echo ($kelas=="XII") ? "selected": "" ?>>XII</option>
            </select>
            
            <label for="jurusan">Jurusan:</label>
            
            <?php  $jurusan = $pecah['jurusan']; ?>
            <select id="jurusan" name="jurusan" required>
                <option <?php echo ($jurusan=="IPA") ? "selected": "" ?>>IPA</option>
                <option <?php echo ($jurusan=="IPS") ? "selected": "" ?>>IPS</option>
                <option <?php echo ($jurusan=="Bahasa") ? "selected": "" ?>>Bahasa</option>
            </select>

            <button type="submit" name="Ganti">Tambah</button>
            <a href="../dataMurid.php" class="batal" name="Batal">Batal</a>
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
if (isset($_POST['Ganti'])) {
    $nisn = htmlspecialchars($_POST['nisn']);
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $sql = "UPDATE tb_siswa SET nisn='$nisn', nama='$nama', alamat='$alamat', kelas='$kelas', jurusan='$jurusan' WHERE id_siswa='$id'";
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
                window.location.href = '../dataMurid.php';
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
                    window.location.href = '../dataMurid.php';
                });
            </script>";
            
    }
}



?>