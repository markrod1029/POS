<?php
session_start();
require('config.php');

$category=$_POST['category'];



	$register="INSERT INTO category(category) VALUES('$category')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$register);
		header('location:Category.php');

mysqli_close($db_link);
?>
