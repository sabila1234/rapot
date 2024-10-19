<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
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
        }

        .container {
            background: #fff;
            width: 450px;
            padding: 2rem;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.8);
        }

        .form-title {
            font-size: 1.8rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
            color: #76a02d;
        }

        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .input-group i {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #76a02d;
        }

        input {
            width: 100%;
            padding: 0.8rem 0.8rem 0.8rem 2.5rem;
            background-color: #e6f1e8;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            color: #000;
            transition: border-bottom 0.3s ease;
        }

        input:focus {
            outline: none;
            border-bottom: 2px solid #76a02d;
        }

        label {
            position: absolute;
            top: -1.3rem;
            left: 2.5rem;
            color: #aaa;
            font-size: 0.9rem;
        }

        input::placeholder {
            color: transparent;
        }

        input:focus ~ label, input:not(:placeholder-shown) ~ label {
            top: -2.5rem;
            color: #76a02d;
            font-size: 0.8rem;
        }

        .recover {
            text-align: right;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .recover a {
            color: #2e3b28;
            text-decoration: none;
        }

        .recover a:hover {
            text-decoration: underline;
            color: #a5cf61;
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
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2e3b28;
            color: #fff;
        }

        .or {
            text-align: center;
            margin: 1.5rem 0;
            font-size: 1.1rem;
            color: #000000;
        }

        p{
            color: #000000;
        }
        .icons {
            text-align: center;
        }

        .icons i {
            color: #a5cf61;
            padding: 0.8rem 1.5rem;
            border-radius: 10px;
            font-size: 1.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .icons i:hover {
            background-color: rgb(50, 50, 100);
            transform: scale(1.1);
        }

        .links {
            display: flex;
            justify-content: center;
            font-weight: bold;
            margin-top: 1rem;
        }

        .links button {
            color: #f5a4a2;
            background: none;
            border: none;
            font-size: 1rem;
            cursor: pointer;
        }

        .links button:hover {
            text-decoration: underline;
            color: #b02a29;
        } 
        .g_id_signin {
            display: inline-block;
            margin-top: 1.5rem;
            font-size: 1.5rem;
            cursor: pointer;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Form Register -->
    <div class="container" id="signUpForm" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form action="" method="post">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" id="username" placeholder="username" required>
                <label for="username">userame</label>
            </div>
            <!-- <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div> -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
            <p class="or">--------- or ---------</p>
            <div class="icons">
                <div id="g_id_onload"
                     data-client_id="YOUR_GOOGLE_CLIENT_ID"
                     data-login_uri="t.html"
                     data-auto_prompt="false">
                </div>
                <div class="g_id_signin" data-type="icon" data-shape="circle"></div>
            </div>
            <div class="links">
                <p>Already Have an Account?</p>
                <button id="signInButton">Sign In</button>
            </div>
        </form>
    </div>

    <!-- Form Login -->
    <div class="container" id="signInForm">
        <h1 class="form-title">Sign In</h1>
        <form action="#" method="POST">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="username" id="username" placeholder="Username" required>
                <label for="username">Username</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Password" name="password"required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" name="signIn" class="btn" value="Sign In" name="signIn">
            <p class="or">--------- or ---------</p>
            <div class="icons">
                <div id="g_id_onload"
                     data-client_id="YOUR_GOOGLE_CLIENT_ID"
                     data-login_uri="t.html"
                     data-auto_prompt="false">
                </div>
                <div class="g_id_signin" data-type="icon" data-shape="circle"></div>
            </div>
            <div class="links">
                <p>Don't Have an Account?</p>
                <button id="signUpButton" type="submit" name="sign">Sign Up</button>
            </div>
        </form>
    </div>

    <footer>
        0
    </footer>
    
    <script>
        const signUpButton = document.getElementById('signUpButton');
        const signInButton = document.getElementById('signInButton');
        const signInForm = document.getElementById('signInForm');
        const signUpForm = document.getElementById('signUpForm');

        signUpButton.addEventListener('click', function (event) {
            event.preventDefault();
            signInForm.style.display = "none";
            signUpForm.style.display = "block";
        });

        signInButton.addEventListener('click', function (event) {
            event.preventDefault();
            signUpForm.style.display = "none";
            signInForm.style.display = "block";
        });
    </script>

</body>
</html>
<?php
if (isset($_POST['signIn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $hasil = $koneksi->query($query);
    if ($hasil->num_rows > 0) {
        $data = $hasil->fetch_assoc();
        // header("Location : b.php");
        echo "<script>alert('login berhasil'); document.location.href = 'b.php';</script>";
    } else {
        echo "<script>alert('login gagal')</script>";
    }
}
?>