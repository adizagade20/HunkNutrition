<?php require('mysqlconnect.php');

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$conn = new mysqli('localhost', 'root', 'root');

if(isset($_POST['username']) and isset($_POST['password']))
{
	$username = $_POST['username']; 
	$password = $_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);
	
	$username = test_input($username);
	$password = test_input($password);

	
	$sql="SELECT * FROM products.credentials WHERE username = '$username' and pass = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{}
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
		echo "<script> window.location.assign('index.php'); </script>";
	}
	else {
		echo '<script>
				alert("Combination of Username and Password is wrong, Please try again!");
			</script>';
	}
}
?>