<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Animasi untuk navbar */
        nav {
            display: flex;
            justify-content: center;
            background-color: #afd05e;
            padding: 10px 0;
            animation: slideDown 1s ease-out; /* Menambahkan animasi slideDown */
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }

        nav a {
            color: black;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        nav a:hover {
            background-color: #2e4718;
            color: white;
            transform: scale(1.1); /* Menambahkan efek skala saat hover */
        }

        /* Container */
        .container {
            width: 800px;
            height: 200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            animation: fadeIn 2s ease-in-out; /* Menambahkan animasi fadeIn */
            transition: transform 0.3s ease; /* Menambahkan transisi untuk pergerakan */
        }

        /* Efek bergerak pada hover */
        .container:hover {
            transform: translateY(-10px); /* Menggerakkan container naik 10px saat disentuh */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animasi untuk tombol login */
        .login-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #afd05e;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            width: 600px;
            align-items: center;
            animation: buttonFadeIn 5s ease-in-out; /* Menambahkan animasi pada tombol */
        }

        .login-button:hover {
            background-color: #2e4718;
            color: white;
            transform: scale(1.05); /* Efek zoom saat hover */
        }

        @keyframes buttonFadeIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
   
    <nav>
        <a href="#">Beranda</a>
        <a href="#">Tentang</a>
        <a href="#">Layanan</a>
        <a href="#">Kontak</a>
    </nav>

    <div class="container">
        <h2>Selamat Datang</h2>
        <p>Silakan login terlebih dahulu</p>
        
        <a href="login.php" class="login-button">Login</a>
    </div>

</body>
</html>
