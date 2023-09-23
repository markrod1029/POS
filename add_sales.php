<?php
include 'config.php';

$id = $_GET['id'];
$view = "SELECT * from products where md5(id) = '$id'";
$result = $db_link->query($view);
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

	$ID = $_GET['id'];
	
$view1 = "SELECT quantity from products where md5(id) = '$id'";
$result1 = $db_link->query($view);
$row2 = $result->fetch_assoc();
	
	$quant = $_POST['quant'];
	$dates=$_POST['dates'];
	$quantity=$_POST['quantity'];
	
	$customers=$_POST['customers'];
	$category=$_POST['category'];
	$name=$_POST['name'];
	$amount=$_POST['amount'];
	$quant=$_POST['quant'];
	$total=$_POST['total'];
	$tendered=$_POST['tendered'];
	$changed=$_POST['changed'];
	$prof = $_POST['profit'];

	$insert1 = "UPDATE products set quantity = quantity - '$quant' where md5(id) = '$ID'";
	$insert = "INSERT INTO sales(dates,customers,category,name,amnt,quantity,total,profit,tendered,changed) VALUES('$dates','$customers','$category','$name','$amount','$quant','$total','$prof','$tendered','$changed')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$insert);
	if($db_link->query($insert1)== TRUE){

			echo "Sucessfully update data";
			header('location:sales.php');			
	}
	
	$db_link->close();
}

?>