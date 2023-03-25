<!-- connect file -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <!-- CSS link -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg top-navbar">
  <div class="navbar container-fluid">

  <!-- navbar logo -->
    <a href="https://lianneneko.github.io/bubblelab/"><img src="./assets/bubblelab.png" alt="logo" class="navbar__logo"></a>

  <!-- toggler button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-sm-0">
        <li class="nav-item">
          <a class="topnav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="topnav-link" href="#">Ordering</a>
        </li>
        <li class="nav-item">
          <a class="topnav-link" href="#"><i class="fa-sharp fa-solid fa-cart-shopping"><sup>1</sup></i></a>
        </li>
        <li class="nav-item">
          <a class="topnav-link" href="#">Order Total:</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- second child -->
<nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="topnav-link" href="#">Welcome Guest</a>
        </li>
    <li class="nav-item">
          <a class="topnav-link" href="#">Log In</a>
        </li>
    </ul>
</nav>

<!-- Menu Heading -->
<div class="menu-heading">
    <h3 class="menu-heading-text">Menu</h3>
</div>

<!-- Drinks --> 
<div class="row">
  <div class="col-md-10">
    <!-- Products --> 
    <div class="row our-menu">
    <!-- fetching products -->
      <?php
getproducts()
      ?>
          <div class="col-md-4 menu-item mb-2">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
    </div>
  </div>

  <!-- Side Nav -->
  <div class="col-md-2 side-navbar p-0 fixed">
    <ul class="navbar-nav me-auto text-center">
  <li class="nav-item bg-dark text-light">
    <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
  </li>
    <?php
      getcategories()
    ?>
    </ul>
  </div>



<!-- footer -->
<div class="p-3 text-center footer-text">
<p class="footer-text">2023 Bubble Lab. All Rights reserved.</p>  
</div>

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>