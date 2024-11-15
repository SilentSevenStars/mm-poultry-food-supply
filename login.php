<?php
    session_start();
    require 'asset/component/Show.php';
    require 'asset/component/Connection.php';
    require 'asset/component/User.php';

    $user = new User($conn);

    if(isset($_POST['logIn'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $auth = $user->auth($email, $password);
        if($auth){
            header("Location: index.php");
        } else {
            echo '<div class="alert alert-danger" role="alert">Invalid Email or Password</div>';
        }

    }
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Dashboard</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
        body {
            background-color: #f2f2f2;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background-color: #d9534f;
            color: white;
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-card h3{
            color: #FFEBBA;
        }
        .login-card h2, .login-card p {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-card input {
            border-radius: 20px;
            background-color: #fff;
        }
        .login-card .btn {
            background-color: #ffdf91;
            color: #d9534f;
            border-radius: 20px;
            font-weight: bold;
        }
        .login-card .forgot-password {
            text-align: center;
            font-size: 0.9em;
            margin-top: 10px;
            color: #fff;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo-container img {
            width: 300px;
        }
    </style>
</head>

<body>
<div class="container login-container">
        <div class="row justify-content-center align-items-center w-100">
            <!-- Logo Section -->
            <div class="col-md-5 text-center d-none d-md-block">
                <div class="logo-container">
                    <img src="asset/image/Red minimalist rooster logo.png" alt="Poultry Logo">
                </div>
            </div>
            <!-- Login Card -->
            <div class="col-md-5">
                <div class="login-card">
                    <h2>Log In to</h2>
                    <h3>MM POULTRY</h3>
                    <p>Food Supply</p>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label text-start w-100">Email</label>
                            <input type="text" name="email" id="Email" class="form-control form-control-lg">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-start w-100">Password</label>
                            <input type="password" name="password" id="password" class="form-control form-control-lg">
                        </div>
                        <button type="submit" class="btn btn-lg" name="logIn" value="Login" style="width: 60%; padding: 10px 0;">LOG IN</button>
                        <div class="forgot-password">
                            <a href="#" class="text-white">Forgot password? Click here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/script.js"></script>
</body>

</html>
