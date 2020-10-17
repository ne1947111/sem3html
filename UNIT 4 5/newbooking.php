<?php
	include('session.php');
	include('connect.php');

	$name = $email = $phone = $bookdate = $booktime = $persons = "";


	if($_SERVER["REQUEST_METHOD"] =="POST"){
		$name = $_POST["name"];
		$email = $_POST["email"];

        $email = test_input($_POST["email"]);
        $phone = test_input($_POST["phone"]);
		$bookdate = test_input($_POST["password"]);
		$booktime = test_input($_POST(["somethng"]));

        $cond = 0;

        if($cond == 0){
            $cond = validateUser($name, $email, $phone, $password, $cpassword);
            if($cond == 0){
                $cond = checkUserExists($con, $name, $email, $phone, $password);
                if($cond == 0){
                    $cond = printAllDetails($name, $email, $phone, $password, $cpassword);
                }
                
            }
        }
   
    }

?>


<!DOCTYPE HTML>
<html>
    <head>
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
        <link rel="stylesheet" type="text/css" href="form/css/main.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/aos.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/boxicons.min.css">
		<link rel="stylesheet" href="css/icofont.min.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/venobox.css">

    </head>
    <body style="margin: 0; background: rgb(15,15,15); background: linear-gradient(200deg, rgba(15,15,15,1) 0%, rgba(17,17,17,1) 35%, rgba(60,60,60,1) 100%) fixed no-repeat;"> 
        <div style="position:absolute; right:0px; width: 400px; height:100%; background-color:red">
            <img src="images/bg2.jpg" style="height:100%;"/>
        </div>

        <div style="padding:20px;">
            <h1> &nbsp; </h1>
            
            <section id="book-a-table" style="background-image:url(images/bg1.jpg)" class="book-a-table">
				<div class="container" >
			  
	
					<div class="row">
				
						<div class="col-lg-8">
						<div class="section-title">
							<h2> <b> Reservation </b></h2>
							<p style="color: white;">Book a Table</p>
						</div>
				
						<form class="php-email-form" style="margin-bottom:200px;">
							<div class="form-row">
								<div class="col-lg-6 col-md-6 form-group">
									<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
									<div class="validate"></div>
								</div>
							</div>

							<div class="form-row">

								<div class="col-lg-6 col-md-6 form-group">
									<input type="text" name="email" class="form-control" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
									<div class="validate"></div>
								</div>

								<div class="col-lg-6 col-md-6 form-group">
									<input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:7" data-msg="Please enter at least 7 chars">
									<div class="validate"></div>
								</div>
							</div>

							<div class="form-row">
								

							</div>

							<div class="form-row">
								<div class="col-lg-6 col-md-6 form-group">
									<input type="date" name="date" min="2020-10-17" placeholder="Choose a Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Choose a Date'" class="form-control mt-20" id="datepicker2" data-rule="minlen:4" data-msg="Please choose a date">
									<div class="validate"></div>
								</div>

								<div class="col-lg-6 col-md-6 form-group">
									<select class="custom-select form-control" name="time">
										<option selected>Choose a Time</option>
										<option value="9:00am to 12:00pm">9:00am to 12:00pm</option>
										<option value="12:00pm to 3:00pm">12:00pm to 3:00pm</option>
										<option value="3:00pm to 6:00pm">3:00pm to 6:00pm</option>
										<option value="6:00pm to 9:00pm">6:00pm to 9:00pm</option>
										<option value="9:00pm to 12:00am">9:00pm to 12:00am</option>
									</select>
								<div class="validate"></div>
								</div>
							</div>
							
							<div class="form-row">
							
								<div class="col-lg-6 col-md-6 form-group">
									<select class="custom-select mr-sm-2 form-control" name="person">
									<option selected>Persons</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5+">5+</option>
									</select>
									<div class="validate"></div>
								</div>

							</div>

							<div class="form-row">
				
								<div class="text-center"><button type="submit">Book a Table</button></div>
				
								<div class="loading">Loading</div>
								<div class="error-message"></div>
					
						</div>
				
					</form>
					</div>
				
					</div>
				</div>
			  </section>
        </div>
        
    </body>
</html>