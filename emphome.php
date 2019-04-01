<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Employee Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<style>
		*{margin:0;padding:0;}

		h1,h2,h3,h4,h5,h6,p{margin:0;}

		img{max-width:100%;}

		.float-right{float:right;}
		.fix{overflow:hidden;}


			 /*Header Area*/
		.navbar {
		  border: 1px solid transparent;
		  margin-bottom: 0;
		  position: relative;
		  background: #5086AC;
		}
		h3 {
		  color: #fff;
		  float: right;
		  font-weight: 800;
		  padding-top: 39px;
		}



			 /*Menu Area*/
		.main-menu-area {
		  background: none repeat scroll 0 0 #E8EDFF;
		}
		#nav > li {
		  display: inline-block;
		  margin: 0;
		  padding: 7px 29px;
		  position: relative;
		}
		#nav > li > a {
		  color: #111;
		  display: inline-block;
		  font-size: 20px;
		  font-weight: 700;
		  padding: 8px 15px;
		  text-decoration: none;
		}	 
		ol, ul {
		  margin-bottom: 6px;
		  margin-top: 6px;
		}
		#nav > li > a:hover {
		  transform: scale(1.5);
		  color: #029F5B;
		  transition: 1s;
		}


			 /*Text Area*/
		.text-area.fix {
		  position: absolute;
		  z-index: 1000;
		  top: 240px;
		  left: 50px;
		  padding-bottom: 62px;
		  padding-top: 65px;
		}
		.colmd6 > img {
		  height: 294px;
		}
		.col-md-6 > h3 {
		  color: #5eae38;
		  font-size: 40px;
		  font-weight: 800;
		  padding-right: 90px;
		  padding-top: 0;
		  text-align: center;
		}
		h2 {
		  color: #cd1f20;
		  font-size: 34px;
		  font-weight: 600;
		  padding-top: 60px;
		  text-align: center;
		  text-decoration: underline;
		}
		.col-md-6 > p {
		  font-size: 23px;
		  font-weight: 600;
		  text-align: center;
		}

		
		    /*Parallax Area*/
		.parallax{
			background-image: url("image/adhome5.jpeg");
			min-height: 500px; 
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			margin: 0;
		}
		
		


			 /*Footer Area*/
		.footer {
		  background: #323536 none repeat scroll 0 0;
		  color: #fff;
		  padding-bottom: 7px;
		  padding-top: 7px;
		  padding-right: 52px;
		}
		.visit > h4 {
		  font-size: 25px;
		   text-align: center;
		}
		.visit > p {
		  font-size: 15px;
		  text-align: center;
		}
		.call > h4 {
		  font-size: 25px;
		  text-align: center;
		}
		.call > p {
		  font-size: 15px;
		  text-align: center;
		}
		.contact > h4 {
		  font-size: 25px;
		   text-align: center;
		}
		.contact > p {
		  font-size: 15px;
		  text-align: center;
		}
		.social-icons {
		  font-size: 23px;
		  text-align: center;
		}
		.fa.fa-facebook-official:hover {
		  color: #4862A3;
		  transform: scale(1.5);
		  transition: all 1s;
		}
		.fa.fa-twitter:hover {
		  color: #1A95E0;
			transform: scale(1.5);
		  transition: all 1s;
		}
		.fa.fa-skype:hover {
		  color: #00AFF0;
			transform: scale(1.5);
		  transition: all 1s;
		}
		.fa.fa-google-plus-square:hover {
		  color: #CB4437;
			transform: scale(1.5);
		  transition: all 1s;
		}
		.copyright > p {
		  font-size: 15px;
		  padding-top: 28px;
		  text-align: center;
		}


	</style>
</head>
<body>
	<!--Header Area-->
	<header class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="logo">
						<img src="image/logo.png" alt="logo" />
					</div>
				</div>	
				<div class="col-md-6">
					<div class="texts">
						<h3>Welcome Employee ! :) </h3>
					</div>	
				</div>
			</div>
		</div>
	</header>
	
	
	<!--Menu Area-->
	<div class="main-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="main-menu">
							<ul id="nav">
								<li><a href="emphome.php">Home</a></li>
								<li><a href="empleavereq.php">Leave Request</a></li>
								<li><a href="leavestatus.php">Leave status</a></li>
								<li><a href="leavehistory.php">Leave History</a></li>
								<li><a href="salary.php">Salary</a></li>
								<li><a href="login.php">Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	</div>
	
	
	<!--Text Area-->
	<div class="text-area fix">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="image/welcome.png" alt="" />
				</div>
				<div class="col-md-6">
					<h3>Hello Employee !</h3>
					<h2><a href="attend.php">Give Attendance</a></h2>
					<p>Give your working day attendance...</p>
					<h2><a href="mattendreport.php">Monthly Attendance Report</a></h2>
					<p>You can see your monthly attendance. How many absent & present in a month...</p>
				</div>	
			</div>
		</div>
	</div>
	
	
	
	<!--Parallax Area-->
	<div class="parallax"></div>
	
	
	
	<!--Footer Area-->
	<footer class="footer_area fix">
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="visit">
							<h4>Visit</h4>	
							<p>Dhanmondi, Dhaka</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="call">
							<h4>Call</h4>
							<p>Phone: (208) 705-7705 <br />
							  Mobile: +8801737-904674</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="contact">
							<h4>Contact</h4>
							<p><a href="faisalkabir1993@gmail.com">faisalkabir1993@gmail.com</a></p>
						</div>
						<div class="social-icons">
							<i class="fa fa-facebook-official" aria-hidden="true"></i>
							<i class="fa fa-twitter" aria-hidden="true"></i>
							<i class="fa fa-skype" aria-hidden="true"></i>
							<i class="fa fa-google-plus-square" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-md-3">
						<div class="copyright">
							<p>&copy;faisalkabir2017.All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	
	
	<!--Javasrcipt-->
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/parallax.min.js"></script>
	
</body>
</html>