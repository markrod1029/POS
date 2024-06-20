<?php
session_start();
require('config.php');

$note=$_POST['note'];
$name=$_POST['name'];
$date=$_POST['date'];
$quantity=$_POST['quantity'];
$contact=$_POST['contact'];
$location=$_POST['location'];
$price=$_POST['price'];
$amnt=$_POST['amnt'];




	$register="INSERT INTO product(note,name,date,quantity,contact,location,price,amnt) VALUES('$note','$name','$date','$quantity','$contact','$location','price','amnt')" or die("error".mysqli_errno($conn_link));
	$result=mysqli_query($conn,$register);
		header('location:index.php');

mysqli_close(conn);
?>
