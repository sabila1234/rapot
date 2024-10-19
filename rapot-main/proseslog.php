<?php 
include "koneksi.php";
// if (isset($_POST['role'])) {
//     var_dump($_POST);
// } else {
//     $role = null; // atau berikan nilai default
// }  
if (isset($_POST['login'])) {
    $role = $_POST['role'];
    if ($role === 'admin') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        var_dump($_POST);
        // Query
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $ambil = $koneksi->query($query);
        
        // Memeriksa hasil query
        if ($ambil && $ambil->num_rows > 0) {
            echo "<script>alert('berhasil')</script>";
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo '<script>
            Swal.fire({
              title: "Success",
              text: "Login berhasil!!",
              icon: "success"
            });
            </script>';
            echo '<script>window.location.href = "dashboard.php";</script>';
        } else {
             echo "<script>alert('gagal')</script>";
             echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
             echo '<script>
             Swal.fire({
                title: "Gagal",
              text: "Login Gagal!!",
              icon: "error"
            });
            </script>';
        }
    }
}
?>