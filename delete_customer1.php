<?php
	include 'config.php';
	$id = $_GET['Customer_ID'];
	$sql = "Delete from customer where md5(Customer_ID) = '$id'";
	if($db_link->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:Customer1.php');
	}else{
		echo "Oppps something error ";
	}
	$db_link->close();
?>