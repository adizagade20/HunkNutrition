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
									<button class="btn btn-default" type="submit" style="margin-right: 100px; height: 30px;">
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
								<li><a href="product-category-omega-3.php">Trending in omega-3</a></li>
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


			<div class="col-lg-4">
				<div class="card">
					<div class="info">
						<div class="name ">Aditya Zagade</div>
						<div class="prof">Faltu Designer</div>
						<div class="divider"></div>
						<div class="bio">I'm Aditya, from Ashti, Beed.</div>
						<button>Contact ME</button>
					</div>
					<div class="photo1"></div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card">
					<div class="info">
						<div class="name paper">Akash yadav</div>
						<div class="prof">Full time Designer</div>
						<div class="divider"></div>
						<div class="bio">I'm Akash, lover of "pushpa".</div>
						<button>Contact ME</button>
					</div>
					<div class="photo2"></div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card">
					<div class="info">
						<div class="name paper">Mrs. Pooja</div>
						<div class="prof">Chutiya</div>
						<div class="divider"></div>
						<div class="bio">I'm Sarthak, my secret is, I call boys daily and do adult chat with them.</div>
						<button>Contact ME</button>
					</div>
					<div class="photo3"></div>
				</div>
			</div>
	</body>
</html>