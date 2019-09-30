<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Hunk Nutrition</title>
		<link rel='shortcut icon' href='images/logo.ico' type='image/x-icon' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style-header-footer.css">
		<link href="css/style-about-us.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:600|Work+Sans" rel="stylesheet">
	</head>


	<body>
	<header id="header" class="top-head">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
						</div>

<?php require('mysqlconnect.php');
						echo '<div  style="margin-top: -20px">';
							echo '<ul class="nav navbar-nav navbar-right">';
								echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> &nbspSign Up</a></li>';

								if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
								{
									echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>';
										echo '<p id="loginbutton" style="display: inline"> &nbspLogout</p>';
									echo '</a></li>';
								}
								else
								{
									echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>';
										echo '<p id="loginbutton" style="display: inline"> &nbspLogin</p>';
									echo '</a></li>';
								}
							echo '</ul>';
						echo '</div>';
?>

						<div>
						<form class="navbar-form navbar-right" action="/action_page.php">
							<div class="input-group">
								<input style="width: 400px; height: 30px" type="text" class="form-control" placeholder="Search">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit" style="margin-right: 100px; height: 30px; margin-top: 30px">
										<i class="glyphicon glyphicon-search" ></i>
									</button>
								</div>
							</div>
						</form>
						</div>
						
						<div>
							<ul class="nav navbar-nav" style="margin-left: 243px; margin-top: -30px">
								<li><a href="index.php">Home</a></li>
								<li><a href="product-category-protein.php">Trending in Proteins</a></li>
								<li><a href="product-category-gainers.php">Trending in Gainers</a></li>
								<li><a href="product-category-amino.php">Trending in Aminos/BCCA</a></li>
								<li><a href="product-category-vitamins.php">Trending in Vitamins</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right" style="margin-right: 0px; margin-left: 120px; margin-top: -30px">
								<li class="active">
									<a href="about-us.php"><span>About-Us</span></a>
								</li>
								<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" ></span>
									<p style="display: inline">&nbspCart</p>
								</a><li>
							</ul>
						</div>
					</div>
				</nav>		
			</header>


			<div class="col-lg-4">
				<div class="card">
					<div class="info">
						<div class="name">Aditya A. Zagade</div>
						<div class="prof">Faltu Designer</div>
						<div class="divider"></div>
						<div class="bio">I'm Aditya, from Ashti, Beed.</div>
						<form action="https://instagram.com/adi_zagade/">
							<button class="btn btn-warning"><p class="btn-text">Contact Me</p></button>
						</form>
					</div>
					<div class="photo1"></div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card">
					<div class="info">
						<div class="name">Akash S. yadav</div>
						<div class="prof">Expert Web Designer</div>
						<div class="divider"></div>
						<div class="bio">I'm Akash, from Chembur, Mumbai.</div>
						<form action="https://www.instagram.com/_yadav_akash_/">
							<button class="btn btn-warning"><p class="btn-text">Contact Me</p></button>
						</form>
					</div>
					<div class="photo2"></div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card">
					<div class="info">
						<div class="name">Sarhak S. Tukan</div>
						<div class="prof">Expert Web Designer</div>
						<div class="divider"></div>
						<div class="bio">I'm Sarthak, from Kopar Khairane, Navi Mumbai.</div>
						<form action="https://www.instagram.com/mr.kukku/">
							<button class="btn btn-warning"><p class="btn-text">Contact Me</p></button>
						</form>
					</div>
					<div class="photo3"></div>
				</div>
			</div>
	</body>
</html>