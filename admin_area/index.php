<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="../assets/bubblelab.png" alt="logo" class="navbar__logo">
        <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href="#"><img src="../assets/Admin_image.png" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-dark my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-dark my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-dark my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-dark my-1">View Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-dark my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-dark my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-dark my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-dark my-1">Logout</a></button>
                </div>
            </div>
        </div>

    <div class="container my-5">
        <?php
        if(isset($_GET['insert_category']))
            include('insert_categories.php')
        ?>
    </div>

        <!-- footer -->
        <div class="bg-dark text-light p-3 text-center footer">
            <p>All rights reserved Designed by Lianne-2023</p>
        </div>
    </div>
    

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>