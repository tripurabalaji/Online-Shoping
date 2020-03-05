<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Digital Works</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head><!--/head-->

<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 433-4444</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> digitalworks@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
		
					</div>
					
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.html">About Us</a></li> 
								<li><a href="contact-us.html">Contact</a></li>
								<li><a href="404.html">Cart</a></li>
								<li><a href="login.php">Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
    
    
    	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						  <div class="panel panel-default">
							  <div class="panel-heading">
									<h4 class="panel-title"><a href="laptop.php">Laptops</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Computer Set</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Hard disk</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">CCTV</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
                        </div>
                        </div>

                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">All Products</h2>
                        
            <form action="index.php" method="post">
			<table width="100%">
				<tr><td align="right">
				<label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" />
				<input type="submit" value="Search" id="search" />&nbsp;&nbsp;
				</td></tr>
			</table>
			</form>
            <br>
	
<!--php starts here-->
<?php
				include('db.php');
				
				if(isset($_POST['filter']))
				{
					$filter = $_POST['filter'];
					$result = mysql_query("SELECT * FROM products where Product like '%$filter%' or Description like '%$filter%' or Category like '%$filter%'");
				}
				else
				{
					$result = mysql_query("SELECT * FROM products  where Category='Laptops'");
				
				{
					
				if(mysql_num_rows($result) >= 1){				
				while($row=mysql_fetch_assoc($result)){
					
				$prodID = $row["ID"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="product-image-wrapper">
						  <div class="single-products">
						  <div class="productinfo text-center">
					<img src="reservation/img/products/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="150" height="150" />
                    </a>
					
					<h2><a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'">'.$row['Product'].'</a></h2>
					<h2>'.$row['Price'].'</h2>
					<p>Category: '.$row['Category'].'</p>
					
					<a href="product-details.php?prodid='.$prodID.'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Details</a>
					</div>';		
					echo '</ul>';			
				}
				}
				}
				}
				?>

<!--php ends here-->
		</div>
        </div>
</div>
</div>
</section>

<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2014 Digital Works. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="#">FBC Students</a></span></p>
				</div>
			</div>
		</div>
						
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>


</html>