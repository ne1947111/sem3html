<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Dashboard </title>
		
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
				transition: all 400ms ease-in-out;
				-webkit-transition: all 200ms ease-in-out;
				-webkit-animation: all 200ms ease-in-out;
         }
         
         .zoom:hover{
            transform: scale(1.2);
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
      
      <style>
         table, th, td{
            padding:5px;
         }

         td.leftside{
            width:100px;
            height:100px;
            padding:0px;
         }

         .lef{
            text-align: center;
            vertical-align: middle;
         }
         .lef:hover{
            background-color: #FFD05B;
            box-shadow: 5px 5px 5px #333333;
         }

         .leftimage{
            width:100px;
            padding:30px;
         }
      </style>
	</head>

    <body style="background-color: #222;">

         <div>
            <img src="images/restlogo34.png" style="width:600px; padding:30px;"/>
         </div>
    
         <div class="blackbg" style="padding-left:30px; padding-top:0px; padding-bottom:0px;">
            <table>
               <tr>
               <td class="leftside">
                     <div class="yellowbg lef zoom" style="height:100%; width:100%; vertical-align:center;">
                        <img class="leftimage" src="images/homeicon.webp"/>
                     </div>
                  </td>
                  <td rowspan="5" style="width:600px;"> 
                  
                  </td>
               </tr>

               <tr>
                  <td class="leftside">
                     <div class="yellowbg lef zoom" style="height:100%; width:100%; vertical-align:center;">
                        <img class="leftimage" src="images/menuimage.png"/>
                     </div>
                  </td>
               </tr>

               <tr>
                  <td class="leftside">
                     <div class="yellowbg lef zoom" style="height:100%; width:100%; vertical-align:center;">
                        <img class="leftimage" src="images/neworder.webp"/>
                     </div>
                  </td>
               </tr>

               <tr>
                  <td class="leftside">
                     <div class="yellowbg lef zoom" style="height:100%; width:100%; vertical-align:center;">
                        <img class="leftimage" src="images/viewicon.png"/>
                     </div>
                  </td>
               </tr>

               <tr>
                  <td class="leftside">
                     <div class="yellowbg lef zoom" style="height:100%; width:100%; vertical-align:center;">
                        <img class="leftimage" src="images/signout.png"/>
                     </div>
                  </td>
               </tr>


            </table>
         </div>

	</body>
</html>