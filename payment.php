<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <div class="wrapper">
        <?php include "sidebar.php" ?>
        <div class="main">
            <?php include "navbar.php" ?>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Payment</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Products
                                <span>$53.98</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                </div>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>Change</strong>
                                </div>
                                <span><strong>$53.98</strong></span>
                            </li>
                            </ul>

                            <a  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">
                                confirm
                            </a>
                        </div>
                        </div>
                </div>
            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>  
        </div>
    </div>
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/script.js"></script>
</body>

</html>
