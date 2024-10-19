<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link rel="stylesheet" href="css/login.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">

    <form id="loginForm" action="HalUt.php" method="POST" >
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
        
        <button class="button" name="login" type="submit">Login</button>
       
    </form>

    <script src="js/login.js"></script>
        <!-- <div id="layoutAuthentication"> 
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="#" method="post">
                                            <label for="type">login sebagai</label>
                                            <select name="role" id="type">
                                                <option value="admin">admin</option>
                                                <option value="guru">guru</option>
                                                <option value="murid">murid</option>
                                            </select>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="usrname" type="username" placeholder="username" />
                                                <label for="username">username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Password" type="password" placeholder="Password" />
                                                <label for="Password">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <a class="btn btn-primary" href="index.php">Login</a>
                                            </div>
                                        </form>
                                    </div> -->
                                    
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website <?= date ('Y') ?></div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
    </body>
</html>
<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $password;
}

?>