<?php
  include('config.php');
  
   $id=$_GET['Stocks_ID'];
  $id=$_GET['Stocks_ID'];
$name=$_POST['name'];
$stocks=$_POST['stocks'];
$dateaquired=$_POST['dateaquired'];
$dateexpired=$_POST['dateexpired'];

  
  mysqli_query($db_link, "UPDATE `stocks` SET  `name` = '$name', `stocks` = '$stocks', `dateaquired` = '$dateaquired', `dateexpired` = '$dateexpired' WHERE `Stocks_ID` = '$id'") or die(mysqli_error());
    header('location:Stock.php');
?>