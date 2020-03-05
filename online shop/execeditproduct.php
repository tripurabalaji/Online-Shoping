<?php
	include('db.php');
	$prodid = $_POST['prodid'];
	$pname=$_POST['pname'];
	$desc=$_POST['desc'];
	$price=$_POST['price'];
	$cat=$_POST['cat'];
	mysql_query("UPDATE products SET Product='$pname', Description='$desc', Price='$price', Category='$cat' WHERE ID='$prodid'");
	header("location: admin.php");
?>