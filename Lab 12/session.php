 <?php
	include('dbconfig.php');
	include('connect.php');
	session_start();
	$user_check = $_SESSION['login_user'];
	
	$ses_sql = mysqli_query($con, MYSQLI_ASSOC);

	if(!isset($_SESSION['login_user'])){
		header("location:welcome.php");
		die();
	}

  ?> 