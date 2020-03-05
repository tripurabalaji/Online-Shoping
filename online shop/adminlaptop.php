
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('session.php'); ?>
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>






    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
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
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
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
							<a href="admin.php"><img src="images/home/logo.png" alt="" /></a>
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
						<!--	<li><a href="index.php" class="active">Home</a></li>
								<li><a href="404.html">About Us</a></li> 
								<li><a href="contact-us.html">Contact</a></li>
								<li><a href="404.html">Cart</a></li>  -->	
								<li><a href="logout.php">Logout</a></li>
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
									<h4 class="panel-title"><a href="admin.php">All Products</a></h4>
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
						<h2 class="title text-center">Laptop Products</h2>
                        
          
          					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<a rel="facebox" href="addproduct.php">Add Product</a>
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> ID </th>
								<th> Image </th>
								<th> Product </th>
								<th> Desciption </th>
								<th> Price </th>
								<th> Category </th>
                                <th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$result = mysql_query("SELECT * FROM products where category='Laptops'");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['ID'].'</td>';
									echo '<td><a rel="facebox" href="editproductimage.php?id='.$row['ID'].'"><img src="reservation/img/products/'.$row['imgUrl'].'" width="80" height="50"></a></td>';
									echo '<td><div align="right">'.$row['Product'].'</div></td>';
									echo '<td><div align="right">'.$row['Description'].'</div></td>';
									echo '<td><div align="right">'.$row['Price'].'</div></td>';
									echo '<td><div align="right">'.$row['Category'].'</div></td>';
									echo '<td><div align="center"><a rel="facebox" href="editproductdetails.php?id='.$row['ID'].'">edit</a> | <a href="#" id="'.$row['ID'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
              </section>
       
   
    
	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
    
    
    <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteroom.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
    
    
    
</body>


</html>