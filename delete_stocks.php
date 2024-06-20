<?php
	include 'config.php';
	$id = $_GET['Stocks_ID'];
	$sql = "Delete from stocks where md5(Stocks_ID) = '$id'";
	if($db_link->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:Stock.php');
	}else{
		echo "Oppps something error ";
	}
	$db_link->close();
?>