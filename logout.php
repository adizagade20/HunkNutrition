<?php require('mysqlconnect.php');
	session_regenerate_id();
	unset($_SESSION['username']);
	unset($_SESSION['loggedin']);
	echo "<script> window.location.assign('index.php'); </script>";
?>