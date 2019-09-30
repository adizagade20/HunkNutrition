<?php require('mysqlconnect.php');
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$pname = $originalprice = $soldprice = $category = $id = $imgsrc = $desc = $productinfo = $image1 = $image2 = $image3 = 12;

			$txt1 = "SELECT * FROM products.";
			$txt2 = $_POST['category'];
			$txt3 = " WHERE id='";
			$txt4 = $_POST['id'];
			$txt5 = "'";
			$txt1 .= $txt2;
			$txt1 .= $txt3;
			$txt1 .= $txt4;
			$txt1 .= $txt5;
			$sql = $txt1;

			$result = $conn->query($sql);
			if ($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					$GLOBALS["id"] = $row["id"];
					$GLOBALS["pname"] = $row["pname"];
					$GLOBALS["originalprice"] = $row["originalprice"];
					$GLOBALS["soldprice"] = $row["soldprice"];
					$GLOBALS["category"] = $row["category"];
					$GLOBALS["imgsrc"] = $row["imgsrc"];
					$GLOBALS["desc"] = $row["desc"];
					$GLOBALS['productinfo'] = $row['productinfo'];
					$GLOBALS["image1"] = $row["image1"];
					$GLOBALS["image2"] = $row["image2"];
					$GLOBALS["image3"] = $row["image3"];
				}
			}
		}
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Hunk Nutrition</title>
		<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style-header-footer.css">
		<link rel="stylesheet" href="css/style-productpage.css">
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



								

			<div class="container-fluid">
				<div class="content-wrapper">	
					<div class="item-container">	
						<div class="container">	
							<div class="col-md-12">
								<div class="product col-lg-4">
										<img id="item-display" class="largeimage" src=" <?php echo $imgsrc; ?> " alt=""></img>
								</div>						
								<div class="container service1-items col-lg-2 pull-left">
									<center>
										<a id="item-1" class="service1-item">
											<img src=" <?php echo $image1; ?> " alt=""></img>
										</a>
										<a id="item-2" class="service1-item">
											<img src=" <?php echo $image2; ?> " alt=""></img>
										</a>
										<a id="item-3" class="service1-item">
											<img src=" <?php echo $image3; ?> " alt=""></img>
										</a>
									</center>
								</div>
								<div class="col-md-6">
									<div class="product-title"> <?php echo $pname; ?> </div>
									<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
									<hr>
										<div class="product-price"><del>₹<?php echo $originalprice; ?></del>&nbsp&nbsp&nbsp₹<?php echo $soldprice; ?> </div>
										<div class="product-stock">In Stock</div>
									<hr>
									<div class="btn-group cart">
										<form method="POST" action="addtocart.php">
											<input type="hidden" name="cartid" value="<?php echo $id; ?>" placeholder="<?php echo $id; ?>" />
											<input type="hidden" name="cartcategory" value="<?php echo $category; ?>" placeholder="<?php echo $category; ?>" />
											<button type="submit" class="btn btn-success"><p>Add to cart</p></button>
										</form>
									</div>
								</div>
							</div>
						</div> 
					</div>
					<div class="container-fluid">		
						<div class="col-md-12 product-info">
								<ul id="myTab" class="nav nav-tabs nav_tabs">
									
									<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
									<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>

									
								</ul>
							<div id="myTabContent" class="tab-content">
									<div class="tab-pane fade in active" id="service-one">
										<section class="container product-info">
											<?php echo $desc; ?>
										</section>
									</div>

								<div class="tab-pane fade" id="service-two">
									<section class="container">
										<?php echo $productinfo; ?>
									</section>
								</div>
							</div>
							<hr>
						</div>
					</div>
				</div>
			</div>





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