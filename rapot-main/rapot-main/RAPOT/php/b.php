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
            min-height: 100vh; /* Menjamin footer tetap di bawah */
        }

        header {
            background-color: #63a91f;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #4caf50;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #45a049;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            flex: 1; /* Mengambil sisa ruang di antara header dan footer */
        }

        footer {
            background-color: #63a91f;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 20px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .login-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none; /* Menghilangkan garis bawah pada teks */
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <header>
        <h1>Selamat Datang di Halaman Utama</h1>
    </header>

    <nav>
        <a href="#">Beranda</a>
        <a href="#">Tentang</a>
        <a href="#">Layanan</a>
        <a href="#">Kontak</a>
    </nav>

    <div class="container">
        <h2>Ucapan Selamat Datang</h2>
        <p>Halo! Terima kasih telah mengunjungi halaman utama kami. Kami senang bisa bertemu dengan Anda di sini. 
        Kami menawarkan berbagai layanan yang bisa membantu Anda. Silakan jelajahi navigasi di atas untuk mendapatkan informasi lebih lanjut.</p>

        <a href="a.html" class="login-button">Login</a>
    </div>

    <footer>
        <p>&copy; 2024 Nama Perusahaan. Semua hak dilindungi.</p>
    </footer>

</body>
</html>
