<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .my-buttons .btn {
            white-space: nowrap;
        }

        .admin-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }


    </style>
</head>

<body class="d-flex flex-column">
    <div class="container-fluid p-0 content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../img/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- Second child -->
        <div class="bg-light">
            <h3 class="text-center p-2 fs-1">Manage Details</h3>
        </div>
        <!-- Third child -->
        <div class="">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-3">
                    <a href="#"><img src="../img/pineapple-juice.jpg" alt="" class="admin-image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center d-flex flex-wrap my-buttons">
                    <button class="btn btn-info m-2"><a href="insert_product.php" class="nav-link text-light">Insert Products</a></button>
                    <button class="btn btn-info m-2"><a href="#" class="nav-link text-light">View Products</a></button>
                    <button class="btn btn-info m-2"><a href="index.php?insert_category" class="nav-link text-light">Insert Categories</a></button>
                    <button class="btn btn-info m-2"><a href="#" class="nav-link text-light">View Categories</a></button>
                    <button class="btn btn-info m-2"><a href="index.php?insert_brand" class="nav-link text-light">Insert Brands</a></button>
                    <button class="btn btn-info m-2"><a href="#" class="nav-link text-light">View Brands</a></button>
                    <button class="btn btn-info m-2"><a href="#" class="nav-link text-light">All orders</a></button>
                    <button class="btn btn-info m-2"><a href="#" class="nav-link text-light">All payments</a></button>
                    <button class="btn btn-info m-2"><a href="#" class="nav-link text-light">List users</a></button>
                    <button class="btn btn-info m-2"><a href="#" class="nav-link text-light">Logout</a></button>
                </div>
            </div>
        </div>
        <!-- Fourth child -->
        <div class="container my-3">
            <?php
            if (isset($_GET['insert_category'])) {
                include('insert_categories.php');
            }
            if (isset($_GET['insert_brand'])) {
                include('insert_brands.php');
            }
            ?>
        </div>
    </div>
    <footer class="footer bg-info text-center p-3">
        <p>All rights reserved &copy; Designed by Aryan Chauhan & Aastha Singh</p>
    </footer>
    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
