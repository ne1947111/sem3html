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
				background: rgb(237,237,237);
				background: linear-gradient(133deg, rgba(237,237,237,1) 0%, rgba(219,219,219,1) 35%, rgba(140,140,140,1) 100%);
			}

			.zoom{
				transition: all 400ms ease-in-out;
				-webkit-transition: all 200ms ease-in-out;
				-webkit-animation: all 200ms ease-in-out;
         }
         
         .zoom:hover{
            transform: scale(1.1);
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
			border-style: solid;
			border-color:#333;
			border-width:10px;
         }

         td.leftside{
            width:100px;
            height:120px;
            padding:0px;
         }

         .lef{
            text-align: center;
            vertical-align: middle;
         }
         .lef:hover{
			background: rgb(255,197,53);
			background: linear-gradient(128deg, rgba(255,197,53,1) 0%, rgba(232,172,18,1) 30%, rgba(184,133,2,1) 78%);
		 }

		 .selected{
			background: rgb(255,208,91);
			background: linear-gradient(90deg, rgba(255,208,91,1) 0%, rgba(232,182,56,1) 35%, rgba(205,158,39,1) 100%);	
		 }
         .leftimage{
			transform: rotate(0deg);
			width:100px;
			padding:30px;
			transition: all 600ms ease-in-out;
	
         }

		 .leftimage:hover{
			transform: rotate(360deg);
			transition: all 600ms ease-in-out;
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
               <td class="leftside" style="vertical-align: top;">
                     <div id='lefthome' onclick="loadPage('lefthome')" class="yellowbg lef zoom selected" style="height:100%; width:100%; vertical-align:center;">
                        <img class="leftimage" src="images/homeicon.webp"/>
                     </div>
                  </td>
                  <td rowspan="7" style="background-color: white; width:1760px;">
		
				  	<iframe id="MainContent" src="homepage.html" style="width:100%; border-width:0px; height:830px; background-color: white;">	
					</iframe>
                  </td>
               </tr>

               <tr>
                  <td class="leftside">
                     <div id='leftmenu' onclick="loadPage('leftmenu')" class="yellowbg lef zoom" style="height:100%; width:100%; vertical-align:center;">
                        <img class="leftimage" src="images/menuimage.png"/>
                     </div>
                  </td>
               </tr>

               <tr>
                  <td class="leftside">
                     <div id='leftnew' onclick="loadPage('leftnew')" class="yellowbg lef zoom" style="height:100%; width:100%; vertical-align:center;">
                        <img class="leftimage" src="images/neworder.webp"/>
                     </div>
                  </td>
               </tr>

               <tr>
                  <td class="leftside">
                     <div id='leftview' onclick="loadPage('leftview')" class="yellowbg lef zoom" style="height:100%; width:100%; vertical-align:center;">
                        <img class="leftimage" src="images/viewicon.png"/>
                     </div>
                  </td>
               </tr>

			   <tr>
                  <td class="leftside">
                     <div id='leftaccount' onclick="loadPage('leftaccount')" class="yellowbg lef zoom" style="height:100%; width:100%; vertical-align:center;">
                        <img class="leftimage" src="images/profileimage.webp"/>
                     </div>
                  </td>
               </tr>

               <tr>
                  <td class="leftside">
                     <div id='leftsignout' onclick="loadPage('aboutus.php')" class="yellowbg lef zoom" style="height:100%; width:100%; vertical-align:center;">
                        <img class="leftimage" src="images/contact.jpg"/>
                     </div>
                  </td>
               </tr>

			   <tr>
                  <td class="leftside">
					 <a href="logout.php">
						<div class="yellowbg lef zoom" style="height:100%; width:100%; vertical-align:center;">
							<img class="leftimage" src="images/signout.png"/>
						</div>
					</a>
                  </td>
               </tr>


            </table>
         </div>

		<script>
			maincontent = document.getElementById("MainContent");
			divs = ['lefthome', 'leftmenu', 'leftnew', 'leftview', 'leftaccount', 'leftsignout'];
			function loadPage(divid){
				for(i in divs){
					$('#'+divs[i]).removeClass("selected");
				}
				$('#'+divid).addClass("selected");

				if(divid=="lefthome"){
					maincontent.src = "homepage.html";
				}

				if(divid=="leftmenu"){
					maincontent.src = "menu.html";
				}

				if(divid=="leftnew"){
					maincontent.src = "newbooking.php";
				}

				if(divid=="leftaccount"){
					maincontent.src = "myprofile.php";
				}
			}

		</script>

	</body>
</html>