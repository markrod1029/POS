<?php
session_start();
require('config.php');


$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');


$login="SELECT * FROM user WHERE username='$username' AND password='$password'";
$result_login=mysqli_query($db_link, $login); 

	if (@mysqli_num_rows($result_login)==1){
		$_SESSION=mysqli_fetch_array($result_login,MYSQLI_ASSOC);
		header('location:Index.php');
	}else{?>

	<script type="text/javascript">
		alert("USERNAME/ PASSWORD IS INVALID");
		window.location.href = "login.php";
	</script><?php
	}
	mysqli_close($db_link);
?>

