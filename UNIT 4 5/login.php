<?php
	include('dbconfig.php');
	require('connect.php');

	echo "<script> console.log('Loaded'); </script>";
	
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$passw = mysqli_real_escape_string($con, $_POST['password']);

		$sql = "select * from users where email='$email' and passw='$passw'";
		$result = mysqli_query($con, $sql);
		$count = mysqli_num_rows($result);
		
		if($count == 1) {
			$_SESSION['login_user'] = $email;

			header("location: welcome.php");
		 }else {
			$error = "Your Login Name or Password is invalid";
			echo "<script> window.alert('Entered Username/password is invalid'); </script>";
		 }
	}
?>



<!DOCTYPE html>
<html>
	<head>
		<title> NaiCafe Restaurant </title>
		
		<link href="images/restlogo.png" rel="icon">
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta name="description" content="Restaurant HTML Template">
		<meta name="author" content="Themics">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/aos.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/boxicons.min.css">
		<link rel="stylesheet" href="css/icofont.min.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/venobox.css">

		<style>
			html{scroll-behavior: smooth;}
			.navbar { background-color: #222222EE; position:fixed; width:100%; z-index: 100000; }
			.navbar .navbar-nav .nav-link { color: #fff; }
			.navbar .navbar-nav .nav-link:hover { color: #fbc531; }
			.navbar .navbar-nav .active > .nav-link { color: #fbc531; }

			.yellowcolor{
				color:#ffb700;
			}

			.bold{
				font-weight: bold;
			}
			.fade {
				opacity: 1;
			}
			.blackbg{
				background-color: #333;
			}
			.whitebg{
				background-color: #FFF;
			}
			.yellowbg{
				background-color: #FFB03B;
			}

			.zoom{
				transition: all 200ms ease-in-out;
				-webkit-transition: all 200ms ease-in-out;
				-webkit-animation: all 200ms ease-in-out;
			}

			.box:hover{
				transform: scale(1.1);
				transition: all 200ms ease-in-out;
				-webkit-transition: all 200ms ease-in-out;
				-webkit-animation: all 200ms ease-in-out;
			}

			.loadercontainer{
				background-color: black;
				z-index:999999;
				height: 100vh;
				position:fixed;
				width: 100vw;
				opacity: .8;
				display: none;
			}

			.loader {
				position: fixed;
				z-index: 1000000;
				margin: auto;
				top:0;
				bottom: 0;
				left: 0;
				right: 0;
				border: 10px solid #f3f3f3;
				border-radius: 50%;
				border-top: 6px solid #FFB03B;
				border-bottom: 6px solid #333;
				width: 60px;
				height: 60px;
				/*-webkit-animation: spin 2s linear infinite;
				animation: spin 2s linear infinite;
				}

				@-webkit-keyframes spin {
				0% { -webkit-transform: rotate(0deg); }
				100% { -webkit-transform: rotate(360deg); }
				}

				@keyframes spin {
				0% { transform: rotate(0deg); }
				100% { transform: rotate(360deg); }*/
				}
			
			.selectedreview{
				background-color: #FFB03B;
				color: white;
			}
			.reviewhead{
				padding: 10px;
				border-radius: 5px;
			}

			.gallery-item{
				overflow: hidden;
			}
			
			.img-fluid{
				display: block;
				transition: all 500ms ease-in-out;
				-webkit-transition: all 500ms ease-in-out;
				-webkit-animation: all 500ms ease-in-out;
			}

			.form-control{
				min-width: 100px;
				max-width: 300px;
				width: 250px;
			}
			
		</style>
	</head>

    <body style="background-color: #222;">
    

        <div class="blackbg" style="height: 100px;">       
        </div>

        <div class="blackbg">
			<section id="book-a-table" class="book-a-table">
				<div class="container" >

                    <div class="row">
                        <a href="index.html">
	                        <img src="images/restlogo2.png" style="width:220px; margin-bottom:20px;"/>
						</a>
					</div>
                    <br/>
			  
	
					<div class="row">
				
						<div class="col-lg-8">
						<div class="section-title">
							<h2> <b> Your Account </b></h2>
							<p style="color: white;">Login</p>
						</div>
				
						<form class="php-email-form" method="POST" style="margin-bottom:200px;">

							<div class="form-row">
								<div class="col-lg-6 col-md-6 form-group">
									<input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
									<div class="validate"></div>
								</div>
                            </div>
                            
                            <div class="form-row">
								<div class="col-lg-6 col-md-6 form-group">
									<input type="password" name="password" class="form-control" id="password" required placeholder="Enter Your Password" >
                                    <div class="validate"></div>
                                    <input type="checkbox" name="keeplogin" id="keeplogin" style="height:12px; margin-top:18px;"> Keep me logged in </input>

								</div>
							</div>	


							<div class="form-row">
                                <div class="text-center"><button type="submit" name="save">LOGIN</button></div>
                            </div>
                            
                            
						</div>
				
					</form>
					</div>
				
					</div>
                </div>
                
                <div class="blackbg" style="color:white; padding-top:10px; position:absolute; left:405px;">
                    Don't have an account? <br/> <a href="signup.html" style="font-weight:bold;"> Sign Up </a> instead.
                </div>
                
			  </section>
		</div>

        <div class="blackbg" style="height: 100px;">       
        </div>

	</body>
</html>