<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";

	$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error)
	{
		echo("Connection Failed: " . $conn->connect_error);
	}
	else
	{
		#echo ("Connected Succesfully ");
	}

	session_start();
	#echo session_id();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
	{
		#echo $_SESSION["username"];
	}
?>