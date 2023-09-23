<?php
	include 'config.php';
	$id = $_GET['Product_ID'];
	$sql = "Delete from product where md5(Product_ID) = '$id'";
	if($db_link->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:Product.php');
	}else{
		echo "Oppps something error ";
	}
	$db_link->close();
?>