<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Style umum */
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
        }

        .container {
            background: #fff;
            color: #333;
            width: 90%;
            max-width: 450px;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.8);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: scale(1.02);
        }

        .form-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #76a02d;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .input-group input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .input-group label {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            pointer-events: none;
            transition: 0.3s;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: -10px;
            left: 15px;
            font-size: 12px;
            color: #4CAF50;
        }

        .btn {
            width: 100%;
            padding: 1rem;
            background-color: #a5cf61;
            color: #000;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #2e3b28;
            color: #fff;
            transform: translateY(-2px);
        }

        /* Dropdown styling */
        .custom-select {
            position: relative;
            margin-bottom: 20px;
        }

        .select-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px 15px;
        }

        .select-box .selected {
            font-size: 16px;
        }

        .select-box .arrow {
            border: solid #333;
            border-width: 0 2px 2px 0;
            display: inline-block;
            padding: 4px;
            transform: rotate(45deg);
        }

        .options {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            max-height: 200px;
            overflow-y: auto;
            display: none;
            z-index: 100;
        }

        .options li {
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .options li:hover {
            background-color: #f1f1f1;
        }

        .select-box.active + .options {
            display: block;
        }
    </style>
</head>
<body>

<div class="container" id="signUpForm">
    <h1 class="form-title">Register</h1>
    <form action="dashboard.php" method="post">
        <div class="input-group">
            <input type="text" name="username" id="username" placeholder=" " required>
            <label for="username">Username</label>
        </div>

        <div class="input-group">
            <input type="password" id="password" placeholder=" " required>
            <label for="password">Password</label>
        </div>

        <div class="input-group">
            <div class="custom-select">
                <div class="select-box" id="selectBox">
                    <span class="selected">Select Role</span>
                    <i class="arrow"></i>
                </div>
                <ul class="options" id="optionsList">
                    <li data-value="admin">Admin</li>
                    <li data-value="guru">Guru</li>
                    <li data-value="murid">Murid</li>
                </ul>
            </div>
            <input type="hidden" name="role" id="role" required> <!-- Menyimpan nilai role -->
        </div>

        <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectBox = document.getElementById('selectBox');
        const optionsList = document.getElementById('optionsList');
        const selected = selectBox.querySelector('.selected');
        const roleInput = document.getElementById('role'); // Input tersembunyi untuk menyimpan nilai role

        selectBox.addEventListener('click', function () {
            this.classList.toggle('active');
        });

        document.addEventListener('click', function (e) {
            if (!selectBox.contains(e.target)) {
                selectBox.classList.remove('active');
            }
        });

        optionsList.addEventListener('click', function (e) {
            if (e.target.tagName === 'LI') {
                selected.textContent = e.target.textContent;
                roleInput.value = e.target.getAttribute('data-value'); // Menyimpan nilai role ke input tersembunyi
                selectBox.classList.remove('active');
            }
        });
    });
</script>

</body>
</html>
