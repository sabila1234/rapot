<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle On/Off Button Inside Container</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: linear-gradient(to bottom, #a5cf61, #1a3528);
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background 0.5s ease; /* Smooth background transition */
        }

        .container {
            background: #fff;
            color: #333;
            width: 90%;
            max-width: 450px; /* Maksimal lebar container */
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.8);
            text-align: center;
            transition: transform 0.3s ease; /* Container scaling effect */
        }

        .container:hover {
            transform: scale(1.02); /* Slightly enlarge container on hover */
        }

        .form-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #76a02d;
        }

        /* Gaya tombol toggle */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            margin: 0 10px; /* Memberi jarak antara toggle dan status */
        }

        /* Sembunyikan input checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* Tampilan slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        /* Warna slider ketika aktif */
        input:checked + .slider {
            background-color: #4CAF50;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        /* Gaya container untuk tombol dan status */
        .toggle-container {
            display: flex;
            align-items: left; /* Memastikan tombol dan status berada di tengah secara vertikal */
            justify-content: left; /* Mengatur tombol dan status agar berada di tengah secara horizontal */
            margin-top: 20px;
            margin-bottom: 20px;
        }

        /* Gaya teks status */
        #status {
            font-size: 18px;
            font-weight: bold;
            margin-left: 10px; /* Memberi jarak antara tombol dan status */
            transition: color 0.3s ease; /* Smooth color transition */
        }

        /* Gaya input grup */
        .input-group {
            margin-bottom: 20px; /* Memberi jarak antara input */
            position: relative;
        }

        .input-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #ccc;
        }

        .input-group input {
            width: 100%;
            padding: 10px 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s; /* Smooth border color transition */
        }

        .input-group input:focus {
            border-color: #4CAF50; /* Change border color on focus */
            outline: none; /* Remove outline on focus */
        }

        .input-group label {
            position: absolute;
            left: 10px;
            top: 10px;
            color: #999;
            pointer-events: none;
            transition: 0.3s;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: -10px;
            left: 10px;
            font-size: 12px;
            color: #4CAF50;
        }

        .btn {
            width: 100%;
            padding: 1rem;
            background-color: #a5cf61;
            color: #000000;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Add transform on hover */
        }

        .btn:hover {
            background-color: #2e3b28;
            color: #fff;
            transform: translateY(-2px); /* Slight upward movement on hover */
        }
    </style>
</head>
<body>

<div class="container" id="signUpForm">
    <h1 class="form-title">Register</h1>
    <form action="" method="post">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="username" id="username" placeholder=" " required>
            <label for="username">Username</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" placeholder=" " required>
            <label for="password">Password</label>
        </div>
   
        <div class="toggle-container">
            <p id="status">Murid</p>
            <label class="switch">
                <input type="checkbox" id="toggleSwitch">
                <span class="slider"></span>
            </label>
        </div>
        
        <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
</div>

<script>
    // Ambil elemen tombol dan status
    const toggleSwitch = document.getElementById('toggleSwitch');
    const statusText = document.getElementById('status');

    // Tambahkan event listener untuk perubahan toggle
    toggleSwitch.addEventListener('change', function () {
        if (toggleSwitch.checked) {
            statusText.textContent = 'Guru';
            statusText.style.color = '#4CAF50'; // Change text color when 'Guru'
        } else {
            statusText.textContent = 'Murid';
            statusText.style.color = '#FF6F61'; // Change text color when 'Murid'
        }
    });
</script>

</body>
</html>
