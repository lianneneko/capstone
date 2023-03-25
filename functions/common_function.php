<?php

// including connect file
include('./includes/connect.php');

//getting products
function getproducts(){
    global $con;

    //condition to check isset or not
    if(isset($GET['category'])){
        $category_id=$_GET['category'];
$select_query="Select * from products where category_id=$category_id";
$result_query=mysqli_query($con,$select_query);

while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image=$row['product_image'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  echo "<div class='col-md-4 menu-item mb-2'>
  <div class='card'>
    <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>$product_price</p>
      <a href='#' class='btn btn-primary'><i class='fa-sharp fa-solid fa-cart-shopping'></i></a>
    </div>
  </div>
</div>";
        }
    }
}

//displaying categories in sidenav
function getcategories(){
    global $con;
$select_categories="Select * from categories";
$result_categories=mysqli_query($con,$select_categories);
while($row_data=mysqli_fetch_assoc($result_categories)){
    $category_title=$row_data['category_title'];
    $category_id=$row_data['category_id'];
    echo "<li class='nav-item'>
    <a href='index.php?category=$category_id' class='sidenav-link'>$category_title</a>
          </li>";
  }
}

?>