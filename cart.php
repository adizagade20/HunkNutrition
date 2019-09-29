<?php require('mysqlconnect.php');
	$sessionid = session_id();
	$productids = array();
	$productcategory = array();	

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
	{
		$sql = 'SELECT * FROM products.cart where username="'.$_SESSION["username"].'";';
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				array_push($productids, $row['productid']);
				array_push($productcategory, $row['category']);
			}
		}
	}

	else
	{
		$sql = 'SELECT * FROM products.cart where sessionid="'.$sessionid.'";';
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				array_push($productids, $row['productid']);
				array_push($productcategory, $row['category']);
			}
		}
	}


	$cartid = $cartname = $cartoriginalprice = $cartsoldprice = $cartcategory = $cartimgsrc = $cartdiscount = array();
	$i=0;
	
	foreach ($productcategory as $value)
	{
		$txt1 = "SELECT * FROM products.";
		$txt2 = $value;
		$txt3 = " WHERE id='";
		$txt4 = $productids[$i];
		$txt5 = "'";
		$txt1 .= $txt2;
		$txt1 .= $txt3;
		$txt1 .= $txt4;
		$txt1 .= $txt5;
		$sql = $txt1;
		$i++;
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				array_push($cartid, $row['id']);
				array_push($cartname, $row['pname']);
				array_push($cartoriginalprice, $row['originalprice']);
				array_push($cartsoldprice, $row['soldprice']);
				array_push($cartcategory, $row['category']);
				array_push($cartimgsrc, $row['imgsrc']);
				$discount = ($row['originalprice'] - $row['soldprice']) / $row['originalprice'] * 100;
				array_push($cartdiscount, (int)$discount);
			}
		}
	}
	$subtotal = array_sum($cartsoldprice);
	$total = $subtotal + 100;
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





		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-1">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Product</th>
								<th class="text-center">Original Price</th>
								<th class="text-center">Discounted Price</th>
								<th class="text-center">Offer</th>
								<th> </th>
							</tr>
						</thead>
						<tbody>


<?php 
	$i=0;
		
	foreach ($cartid as $value)
	{
		echo '				<tr>
								<td class="col-lg-6">
								<div class="media">
									<a class="thumbnail pull-left"> <img class="media-object" src="'.$cartimgsrc[$i].'" style="width: 72px; height: 72px;"> </a>
									<div class="media-body"  style="padding-left: 10px">
										<h4 class="media-heading"><a>'.$cartname[$i].'</a></h4>
										<h5 class="media-heading">Category : <a>'.$cartcategory[$i].'</a></h5>
										<span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
									</div>
								</div>
								</td>
								
								<td class="col-lg-3 text-center"><strong>₹ '.$cartoriginalprice[$i].'</strong></td>
								</td>
								<td class="col-lg-3 text-center"><strong>₹ '.$cartsoldprice[$i].'</strong></td>
								<td class="col-lg-3 text-center"><strong>'.$cartdiscount[$i].'% off</strong></td>
							</tr>

			';
		$i++;
	}

		echo '
							<tr>
								<td>   </td>
								<td>   </td>
								<td>   </td>
								<td><h4>Subtotal</h4></td>
								<td class="text-right"><h4><strong>₹ '.$subtotal.'</strong></h4></td>
							</tr>
							<tr>
								<td>   </td>
								<td>   </td>
								<td>   </td>
								<td><h4>Estimated shipping</h4></td>
								<td class="text-right"><h4><strong>₹ 100</strong></h4></td>
							</tr>
							<tr>
								<td>   </td>
								<td>   </td>
								<td>   </td>
								<td><h3>Total</h3></td>
								<td class="text-right"><h3><strong>₹ '.$total.'</strong></h3></td>
							</tr>
							<tr>
								<td>   </td>
								<td>   </td>
								<td>   </td>
								<td>
									<a href="index.php"><button type="button" class="btn btn-default">
										<span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
									</button>
								</td>
								<td>
									<a href="https://paypal.me/adizagade20/'.$total.'">
										<button type="button" class="btn btn-success">
											Checkout <span class="glyphicon glyphicon-play"></span>
										</button>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
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

';
?>