<?php
include "../koneksi.php";
$id = $_GET['id'];
//query ambil data siswa berdasarkan id
$sql = "SELECT * FROM tb_siswa WHERE id_siswa = $id";
$ambil = $koneksi->query($sql);
$pecah = $ambil->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai Rapor</title>
    <link rel="stylesheet" href="../css/datarapot.css">
</head>
<body>

<div class="container">
    <h1>Input Nilai Rapor</h1>
    
    <form id="nilaiForm" method="POST">
        <table class="rapor-table">
            <tr>
                <th>NISN</th>
                <td colspan="3">
                    <input type="text" id="nisn" name="nisn" placeholder="Masukkan NISN" value="<?php echo $pecah['nisn'] ?>">
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><input type="text" id="nama" placeholder="Nama" value="<?php echo $pecah['nama'] ?>" readonly></td>
                <th>Kelas</th>
                <td><input type="text" id="kelas" placeholder="Kelas" value="<?php echo $pecah['kelas']; ?>" readonly></td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td><input type="text" id="jurusan" placeholder="Jurusan" value="<?php echo $pecah['jurusan']; ?>" readonly></td>
                <th>Tahun Ajaran</th>
                <td><input type="text" id="tahunAjaran" placeholder="2023/2024" ></td>
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
                        <td><input type="text" name="mapel" class="mapel" placeholder="Mata Pelajaran" required></td>
                    </tr>
                    <tr>
                        <th>Nilai Kompetensi</th>
                        <td><input type="number" name="nilaiKompetesi" class="nilaiKompetensi" placeholder="Nilai Kompetensi" required></td>
                        <th>Nilai Keterampilan</th>
                        <td><input type="number" name="nilaiKeterampilan" class="nilaiKeterampilan" placeholder="Nilai Keterampilan" required></td>
                    </tr>
                    <tr>
                        <th>KKM</th>
                        <td><input type="number" name="kkm" class="kkm" placeholder="KKM" required></td>
                        <th>Keterangan</th>
                        <td>
                            <textarea class="keterangan" name="keterangan" placeholder="Keterangan (Opsional)"></textarea>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <button type="button" id="addMapelBtn">Tambah Mata Pelajaran</button>

        <button type="submit" name="tambah">Submit</button>
        <div id="averageResult" style="margin-top: 20px; display: none;"></div>
    </form>
</div>

<footer>
    <p>© 2024 Sekolah XYZ. All rights reserved.</p>
</footer>

<!-- <script src="../js/datarapot.js" defer></script> -->
</body>
</html>


<?php 
if (isset($_POST['tambah'])) {
    echo "test";
    $nisn=htmlspecialchars($_POST['nisn']);
    $mapel=htmlspecialchars($_POST['mapel']);
    $nilaiKompetensi=htmlspecialchars($_POST['nilaiKompetesi']);
    $nilaiketerampilan=htmlspecialchars($_POST['nilaiKeterampilan']);
    $kkm=htmlspecialchars($_POST['kkm']);
    $keterangan=htmlspecialchars($_POST['keterangan']);
   

    $sql1 = "INSERT INTO tb_nilai_ujian 
    (nisn, pelajaran, nilai_kompetensi, nilai_keterampilan, kkm, keterangan)
    VALUES ('$nisn', '$mapel', '$nilaiKompetensi', '$nilaiketerampilan', '$kkm', '$keterangan')";
    
    $tambah = $koneksi->query($sql1);
    echo "<pre>";
    print_r($_POST); // Ini untuk menampilkan data yang dikirim
    echo "</pre>";
    
    if ($tambah) {
        echo"nerhaisl";
    } else {
        echo"gagal";
    }
}

?>