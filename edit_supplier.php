<?php
  include('config.php');
  
   $id=$_GET['Supplier_ID'];
  $id=$_GET['Supplier_ID'];
$name=$_POST['name'];
$person=$_POST['person'];
$address=$_POST['address'];
$contact=$_POST['contact'];

  
  mysqli_query($db_link, "UPDATE `supplier` SET  `name` = '$name', `person` = '$person', `address` = '$address', `contact` = '$contact' WHERE `Supplier_ID` = '$id'") or die(mysqli_error());
    header('location:Supplier.php');
?>