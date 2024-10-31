<?php 
include "../../koneksi.php";
$id = $_GET['id'];
// $cek_nip = "SELECT * FROM tb_guru WHERE nip='$id'";
// $hasil_nip = $koneksi->query($cek_nip);
$sql = "DELETE FROM tb_siswa WHERE nisn='$id'";
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
             title: 'Berhasil Menghapus Data'
         }).then(() => {
             // Setelah animasi selesai, arahkan ke halaman lain
             window.location.href = '../dataMurid.php';
         });
     </script>";
      echo "<script>window.location.href = '../dataGuru.php'</script>";
    # code...
}
?>