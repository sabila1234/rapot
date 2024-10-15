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
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: linear-gradient(to right, #7EAAE6, #486EB5);
        font-family: 'Poppins', sans-serif;
        height: 100vh; /* Set height of body to viewport height */
        display: flex; /* Use Flexbox to center form */
        justify-content: center; /* Horizontally center */
        align-items: center; /* Vertically center */
    }

    form {
        max-width: 500px; /* Increase width */
        padding: 40px; /* Increase padding */
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        opacity: 0; /* Start hidden */
        transform: translateY(-20px); /* Start slightly above */
        animation: fadeInUp 3.5s forwards; /* Animation added */
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0); /* Move to original position */
        }
    }

    form:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 1); /* Enhanced shadow on hover */
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 10px; /* Adjust margin for better spacing */
        color: #333;
    }

    select, input {
        width: 100%;
        padding: 15px; /* Increase padding */
        margin-bottom: 20px; /* Increase margin for spacing */
        border: 1px solid #ddd;
        border-radius: 6px;
        box-sizing: border-box;
        font-size: 16px; /* Increase font size */
        transition: border-color 0.3s ease, transform 0.3s ease;
    }

    select:focus, input:focus {
        border-color: #fbdfb4;
        outline: none;
        box-shadow: 0 0 5px rgba(78, 84, 200, 0.5);
    }

    input::placeholder {
        color: #aaa;
    }

    .button {
        width: 100%;
        padding: 15px; /* Increase button padding */
        background-color: #a1c836;
        color: black;
        border: none;
        border-radius: 6px;
        font-size: 18px; /* Increase font size */
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s;
    }

    .button:hover {
        background-color: #0D330E;
        color: white;
        transform: translateY(-2px) scale(1.05); /* Lift and scale effect */
    }

    .button:active {
        transform: translateY(0); /* Reset on click */
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

