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

	if(session_status()==2)
	{	}
	else
	{
		session_start();
	}
?>