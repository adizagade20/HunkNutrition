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

	
	$sql="SELECT * FROM products.credentials WHERE username = '$username' and password = '$password'";
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






<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta href="https://www.instagram.com/p/BumHw99Brba/">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/style-signup.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	<div>
		<form autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<div class="container-login100">
			<div class="wrap-login100" style= "float:center; padding-top: 20px">
					<div class="login100-form-title p-b-49">
						Sign up
					</div>
					<br><br>

					<div class="wrap-input100 validate-input">
						<div class="label-input100">What is your Name :</div>
						<input id="name" class="input100" type="text" placeholder="Narendra Damodardas Modi" name="name">
						<div class="focus-input100"></div>
					</div>

					<div class="wrap-input100 validate-input" style="padding-top: 20px;">
						<div class="label-input100">Email :</div>
						<input id="pass" class="input100" type="date" placeholder="" name="dob">
						<div class="focus-input100"></div>
					</div>

					<div class="wrap-input100 validate-input" style="padding-top: 20px; padding-bottom: 15px">
						<div class="label-input100">Gender :</div>
						<div style="padding-top: 15px">
							<label class="radio-inline" style="padding-left: 60px"><input type="radio" name="gender" checked>Male</label>
							<label class="radio-inline" style="padding-left: 30px"><input type="radio" name="gender">Female</label>
							<label class="radio-inline" style="padding-left: 30px"><input type="radio" name="gender">Other</label>
						</div>
					</div>

					<div class="wrap-input100 validate-input"  style="padding-top: 20px">
						<div class="label-input100">Email</div>
						<input id="uid" class="input100" type="email" placeholder="Type your email ID" name="username">
						<div class="focus-input100">
							<img src="images/username.png" style="width: 30px; padding-top: 58px; padding-left: 10px">
						</div>
					</div>

					<div class="wrap-input100 validate-input" style="padding-top: 20px">
						<div class="label-input100">Password</div>
						<input id="uid" class="input100" type="text" placeholder="************	" name="username">
						<div class="focus-input100">
							<img src="images/password.png" style="width: 30px; padding-top: 55px; padding-left: 10px; opacity: 0.5">
						</div>
					</div>
					<h6 style="opacity: 0.6">Password must contain Uppercase, Lowercase, Number and Special character</h6>










					
					<div class="text-right" style="padding-top: 10px; padding-bottom: 10px">
						<a href="signup.php">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">Login</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20" style="padding-top: 20px;">
						<span>Or Sign Up Using</span>
					</div>

					<div style="text-align: center">
						<a href="signup.php" class="login100-social-item bg1" style="margin: 30px">
							<i class="fa fa-facebook"></i>
						</a>
						
						<a href="signup.php" class="login100-social-item bg2" style="margin: 20px">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="signup.php" class="login100-social-item bg3" style="margin: 30px">
							<i class="fa fa-google"></i>
						</a>
					</div>


					<div class="flex-col-c" style="text-align: center;">
						<span>
							Or Sign Up Using
						</span>

						<a href="signup.php">
							<h3 style="color: blue; opacity: 0.5; margin-bottom: 0px">Email</h3>
						</a>
					</div>
			</div>
		</div>
		</form>
	</div>
</body>
</html>