<?php
	include 'config.php';
	$id = $_GET['Supplier_ID'];
	$sql = "Delete from supplier where md5(Supplier_ID) = '$id'";
	if($db_link->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:Supplier.php');
	}else{
		echo "Oppps something error ";
	}
	$db_link->close();
?>