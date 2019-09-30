<?php require('mysqlconnect.php');

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{	
	$uname = test_input($_POST['name']);
	$mobile = test_input($_POST['mobile']);
	$gender = test_input($_POST['gender']);
	$username = test_input($_POST['username']);
	$pass = test_input($_POST['pass']);

	$sql = "INSERT INTO products.credentials (uname, mobile, gender, username, pass) VALUES ('".$uname."', '".$mobile."', '".$gender."', '".$username."', '".$pass."');";
	echo $sql;
	if($conn->query($sql))
	{
		$conn->close();
		echo "<script> window.location.assign('login.php'); </script>";
	}
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hunk Nutrition</title>
	<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
	<meta charset="UTF-8">
	<meta href="https://www.instagram.com/p/BumHw99Brba/">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style-signup.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>
	<div>
		<form autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<div class="container-login100">
				<div class="wrap-login100" style= "padding: 20px; padding-left: 50px; padding-right: 50px;">
					<div class="login100-form-title p-b-49">
						Sign up
					</div>
					<br><br>

					<div class="wrap-input100 validate-input">
						<div class="label-input100">What is your Name :</div>
						<input id="name" class="input100" type="text" placeholder="Narendra Damodardas Modi" name="name" required>
						<div class="focus-input100"></div>
					</div>

					<div class="wrap-input100 validate-input" style="padding-top: 20px;">
						<div class="label-input100">Mobile Number :</div>
						<input id="mobile" class="input100" type="number" placeholder="7066828252" name="mobile" required>
						<div class="focus-input100"></div>
					</div>

					<div class="wrap-input100 validate-input" style="padding-top: 20px; padding-bottom: 15px">
						<div class="label-input100">Gender :</div>
						<div style="padding-top: 15px">
							<label class="radio-inline" style="padding-left: 60px"><input type="radio" name="gender" value="Male" required>Male</label>
							<label class="radio-inline" style="padding-left: 30px"><input type="radio" name="gender" value="Female">Female</label>
							<label class="radio-inline" style="padding-left: 30px"><input type="radio" name="gender" value="Other">Other</label>
						</div>
					</div>

					<div class="wrap-input100 validate-input"  style="padding-top: 20px">
						<div class="label-input100">Email / Username :</div>
						<input id="uid" class="input100" type="email" placeholder="Type your email ID" name="username" required>
						<div class="focus-input100">
							<img src="images/username.png" style="width: 30px; padding-top: 58px; padding-left: 10px">
						</div>
					</div>

					<div class="wrap-input100 validate-input" style="padding-top: 20px">
						<div class="label-input100">Password :</div>
						<input id="pass" class="input100" type="password" placeholder="********" name="pass" required>
						<div class="focus-input100">
							<img src="images/password.png" style="width: 30px; padding-top: 55px; padding-left: 10px; opacity: 0.5">
						</div>
					</div>
					<h6 style="opacity: 0.6">Password must be minimum 8 characters long and contain Uppercase, Lowercase, Number and Special character</h6>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">Signup</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>