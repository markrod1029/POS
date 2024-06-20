<?php
session_start();
require('config.php');

$name=$_POST['name'];
$stocks=$_POST['stocks'];
$dateaquired=$_POST['dateaquired'];
$dateexpired=$_POST['dateexpired'];


	$register="INSERT INTO stocks(name,stocks,dateaquired,dateexpired) VALUES('$name','$stocks','$dateexpired','$dateexpired')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$register);
		header('location:Stock.php');

mysqli_close($db_link);
?>
