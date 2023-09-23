<?php
	include 'config.php';
	$id = $_GET['Cat_ID'];
	$sql = "Delete from category where md5(Cat_ID) = '$id'";
	if($db_link->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:Category.php');
	}else{
		echo "Oppps something error ";
	}
	$db_link->close();
?>