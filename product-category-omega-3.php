<?php require('mysqlconnect.php');
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
	{
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Hunk Nutrition</title>
		<link rel='shortcut icon' href='images/logo.ico' type='image/x-icon' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style-header-footer.css">
		<link rel="stylesheet" href="css/style-product-category.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   </head>


   <body>


			<header id="header" class="top-head">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
						</div>

						<div>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> &nbspSign Up</a></li>
								<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
										<p id="loginbutton" style="display: inline"> &nbspLogin</p>
								</a></li>
							</ul>
						</div>

						<div>
						<form class="navbar-form navbar-right" action="/action_page.php">
							<div class="input-group">
								<input style="width: 400px; height: 30px" type="text" class="form-control" placeholder="Search">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit" style="margin-right: 100px; height: 30px">
										<i class="glyphicon glyphicon-search" ></i>
									</button>
								</div>
							</div>
						</form>
						</div>
						
						<div>
							<ul class="nav navbar-nav" style="margin-left: 200px;">
								<li><a href="index.php">Home</a></li>
								<li><a href="product-category-protein.php">Trending in Proteins</a></li>
								<li><a href="product-category-gainers.php">Trending in Gainers</a></li>
								<li><a href="product-category-amino.php">Trending in Aminos/BCCA</a></li>
								<li><a href="product-category-vitamins.php">Trending in Vitamins</a></li>
								<li class="active"><a href="product-category-omega-3.php">Trending in omega-3</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" ></span>
									<p style="display: inline">&nbspCart</p>
								</a><li>
							</ul>
						</div>
					</div>
				</nav>		
			</header>












			<footer>
				<div class="main-footer">
					<div class="container">
						<div class="row">
							<div class="footer-top clearfix">
								<div class="col-lg-1"></div>
								<div class="col-lg-6">
									<div class="form-box">
										<input type="text" placeholder="Enter your e-mail to get periodic updates" />
										<button>Continue</button>
									</div>
								</div>
								<div class="col-lg-5">
									<div class="help-box-f">
										<h4>Question? Call us on +91 70668 28252 for help</h4>
										<p>Easy setup - no payment fees - up to 100 products for free</p>
									</div>
								</div>
								<div class="col-lg-1"></div>
							</div>
						</div>
					</div>
					<div class="copyright">
						<div class="container">
							<div class="row">
								<div class="col-lg-3">
									<p><img width="90" src="images/logo.png" style="margin-top: -5px;" /> All Rights Reserved. Company Name © 2019</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>






	</body>
</html>