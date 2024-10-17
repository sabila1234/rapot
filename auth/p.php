<?php 
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .role-form {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Login</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Masuk ke Akun Anda
                    </div>
                    <form action="login.php" method="post">

                        <div class="card-body">
                            <form id="loginForm">
                                <div class="form-group">
                                    <label for="role">Pilih Role</label>
                                <select class="form-control" name="role" id="role" required>
                                    <option value="">-- Pilih Role --</option>
                                    <option value="admin">Admin</option>
                                    <option value="guru">Guru</option>
                                    <option value="siswa">Siswa</option>
                                </select>
                            </div>
                            
                            <div id="adminForm" class="role-form">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" required>
                                </div>
                            </div>
                            
                            <div id="guruForm" class="role-form">
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP" required>
                                </div>
                                <div class="form-group">
                                    <label for="namaGuru">Nama</label>
                                    <input type="text" class="form-control" id="namaGuru" placeholder="Masukkan nama" required>
                                </div>
                            </div>
                            
                            <div id="siswaForm" class="role-form">
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" required>
                                </div>
                                <div class="form-group">
                                    <label for="namaSiswa">Nama</label>
                                    <input type="text" class="form-control" id="namaSiswa" placeholder="Masukkan nama" required>
                                </div>
                            </div>
                            
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="#">Lupa Password?</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#role').change(function() {
                $('.role-form').hide();
                var selectedRole = $(this).val();
                if (selectedRole === 'admin') {
                    $('#adminForm').show();
                } else if (selectedRole === 'guru') {
                    $('#guruForm').show();
                } else if (selectedRole === 'siswa') {
                    $('#siswaForm').show();
                }
            });
        });
    </script>
</body>
</html>


<?php 
if (isset($_POST['login'])) {
    // $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "<pre>";
    print($username);
    // print($password);
    // print($role);
    echo "</pre>";
}
// if (isset($_POST['role'])) {
//     var_dump($_POST);
// } else {
//     $role = null; // atau berikan nilai default
// }  
// if (isset($_POST['login'])) {
//     $role = $_POST['role'];
//     if ($role === 'admin') {
//         $username = $_POST['username'];
//         $password = $_POST['password'];
//         var_dump($_POST);
//         // Query
//         $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
//         $ambil = $koneksi->query($query);
        
//         // Memeriksa hasil query
//         if ($ambil && $ambil->num_rows > 0) {
//             echo "<script>alert('berhasil')</script>";
//             echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
//             echo '<script>
//             Swal.fire({
//               title: "Success",
//               text: "Login berhasil!!",
//               icon: "success"
//             });
//             </script>';
//             echo '<script>window.location.href = "../dashboard.php";</script>';
//         } else {
//              echo "<script>alert('gagal')</script>";
//              echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
//              echo '<script>
//              Swal.fire({
//                 title: "Gagal",
//               text: "Login Gagal!!",
//               icon: "error"
//             });
//             </script>';
//         }
//     }
// }
?>
