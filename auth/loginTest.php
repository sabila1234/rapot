<?php 
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
    color: #333;
}

select, input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
}

select {
    background-color: #fff;
}

input::placeholder {
    color: #aaa;
}

.button {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #0056b3;
}

#admin-inputs, #guru-inputs, #siswa-inputs {
    display: none;
}

#admin-inputs.active, #guru-inputs.active, #siswa-inputs.active {
    display: block;
}
</style>
<body>
    
    <form action="#" method="post">
        <label for="type">Login sebagai:</label>
        <select name="role" id="type">
            <option value="admin">Admin</option>
            <option value="guru">Guru</option>
            <option value="siswa">Siswa</option>
        </select>
        
        <div id="admin-inputs">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        
        <div id="guru-inputs" style="display: none;">
            <input type="text" name="nip" placeholder="NIP" required>
            <input type="text" name="nama" placeholder="Nama" required>
        </div>
        
        <div id="siswa-inputs" style="display: none;">
            <input type="text" name="nisn" placeholder="NISN" required>
            <input type="text" name="nama" placeholder="Nama" required>
        </div>
        
        <button class="button" type="submit" name="login">Login</button>
        <input type="submit" name="login" class="btn" value="Login" class="button">
    </form>
    <script>
        // JavaScript untuk menampilkan input sesuai jenis login yang dipilih
        const typeSelect = document.getElementById('type');
        const adminInputs = document.getElementById('admin-inputs');
        const guruInputs = document.getElementById('guru-inputs');
        const siswaInputs = document.getElementById('siswa-inputs');
    
        typeSelect.addEventListener('change', function() {
            adminInputs.style.display = 'none';
            guruInputs.style.display = 'none';
            siswaInputs.style.display = 'none';
            
            if (typeSelect.value === 'admin') {
                adminInputs.style.display = 'block';
            } else if (typeSelect.value === 'guru') {
                guruInputs.style.display = 'block';
            } else if (typeSelect.value === 'siswa') {
                siswaInputs.style.display = 'block';
            }
        });
    </script>
</body>
</html>

<?php 
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
            echo '<script>window.location.href = "../dashboard.php";</script>';
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


