<?php
	$host="localhost";
	$username="root";
	$password="";
	$db="resturant";
	$con=mysqli_connect($host,$username,$password,$db);
	mysqli_select_db($con,$db);
?>