<?php
  include('config.php');
  
   $id=$_GET['Product_ID'];
  $id=$_GET['Product_ID'];
$category=$_POST['category'];
$name=$_POST['name'];
$sellingprice=$_POST['sellingprice'];
$quantity=$_POST['quantity'];

  
  mysqli_query($db_link, "UPDATE `product` SET  `category` = '$category',`name` = '$name', `sellingprice` = '$sellingprice', `quantity` = '$quantity' WHERE `Product_ID` = '$id'") or die(mysqli_error());
    header('location:Product.php');
?>