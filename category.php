<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Category</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/dataTables.bootstrap5.css">
</head>

<body>
    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Products
                                <span>$53.98</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Shipping
                                <span>Gratis</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                <strong>Total amount</strong>
                                <strong>
                                    <p class="mb-0">(including VAT)</p>
                                </strong>
                                </div>
                                <span><strong>$53.98</strong></span>
                            </li>
                            </ul>

                            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">
                                Go to checkout
                            </button>
                        </div>
                        </div>
        
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/script.js"></script>
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/dataTables.js"></script>
    <script src="asset/js/dataTables.bootstrap5.js"></script>
    <script> 	
        new DataTable('#example');
    </script>
</body>

</html>
