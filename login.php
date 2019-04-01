<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<style>
		*{margin:0;padding:0;}

		h1,h2,h3,h4,h5,h6,p{margin:0;}

		img{max-width:100%;}

		.float-right{float:right;}
		.fix{overflow:hidden;}

		.navbar {
		  border: 1px solid transparent;
		  margin-bottom: 0;
		  min-height: 20px;
		  position: relative;
		  background: #4C4C4C;
		}


			  /*Main Menu Area*/
		.main-menu-area {
		  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
		}

		.logo > img {
		  padding-bottom: 8px;
		  padding-top: 8px;
		}

		.menu {
		  padding-bottom: 0;
		  padding-top: 17px;
		}

		.menu ul li {
		  display: inline-block;
		  padding: 18px;
		  position: relative;
		}

		#nav li a {
		  color: #111;
		  display: inline-block;
		  font-size: 20px;
		  padding: 4px 13px;
		  text-decoration: none;
		  text-shadow: 2px 2px 3px;
		}

		#nav a:hover{
		  transform: scale(1.5);
		  color: #6BAC00;
		  transition: all 1s;
		}


			  /*Login Area*/
		.panel-login {
			border-color: #ccc;
			-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
			-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
			box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
		}
		.panel-login>.panel-heading {
			color: #00415d;
			background-color: #fff;
			border-color: #fff;
			text-align:center;
		}
		.panel-login>.panel-heading a{
			text-decoration: none;
			color: #666;
			font-weight: bold;
			font-size: 15px;
			-webkit-transition: all 0.1s linear;
			-moz-transition: all 0.1s linear;
			transition: all 0.1s linear;
		}
		.panel-login>.panel-heading a.active{
			color: #029f5b;
			font-size: 18px;
		}
		.panel-login>.panel-heading hr{
			margin-top: 10px;
			margin-bottom: 0px;
			clear: both;
			border: 0;
			height: 1px;
			background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
			background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
			background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
			background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
		}
		.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
			height: 45px;
			border: 1px solid #ddd;
			font-size: 16px;
			-webkit-transition: all 0.1s linear;
			-moz-transition: all 0.1s linear;
			transition: all 0.1s linear;
		}
		.panel-login input:hover,
		.panel-login input:focus {
			outline:none;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
			border-color: #ccc;
		}
		.btn-login {
			background-color: #59B2E0;
			outline: none;
			color: #fff;
			font-size: 14px;
			height: auto;
			font-weight: normal;
			padding: 14px 0;
			text-transform: uppercase;
			border-color: #59B2E6;
		}
		.btn-login:hover,
		.btn-login:focus {
			color: #fff;
			background-color: #53A3CD;
			border-color: #53A3CD;
		}
		.forgot-password {
			text-decoration: underline;
			color: #888;
		}
		.forgot-password:hover,
		.forgot-password:focus {
			text-decoration: underline;
			color: #666;
		}

		.btn-register {
			background-color: #1CB94E;
			outline: none;
			color: #fff;
			font-size: 14px;
			height: auto;
			font-weight: normal;
			padding: 14px 0;
			text-transform: uppercase;
			border-color: #1CB94A;
		}
		.btn-register:hover,
		.btn-register:focus {
			color: #fff;
			background-color: #1CA347;
			border-color: #1CA347;
		}
		.col-md-6.col-md-offset-3 {
		  padding-bottom: 85px;
		  padding-top: 90px;
		}
		.login-area.fix {
		  background-image: url("image/1.jpg");
		}
		.form-control.btn.btn-login {
		  font-weight: 800;
		}
		.form-control.btn.btn-register {
		  font-weight: 800;
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
	<header class="navbar navbar-inverse navbar-static-top"></header>
	
	
	<!--Main Menu Area-->
	<div class="main-menu-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="logo">
						<img src="image/logo.png" alt="logo" />
					</div>
				</div>	
				<div class="col-md-6">
					<div class="menu">
						<ul id="nav">
							<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
							<li><a href="about.php"><i class="fa fa-user" aria-hidden="true"></i>About</a></li>
							<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a></li>
							<li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
						</ul>
					</div>	
				</div>
			</div>
		</div>
	</div>
	
	
	<!--Login Area-->
	<div class="login-area fix">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-login">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6">
									<a href="#" class="active" id="login-form-link">Login</a>
								</div>
								<div class="col-xs-6">
									<a href="#" id="register-form-link">Register</a>
								</div>
							</div>
							<hr>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
								<!--Login Area-->
									<form id="login-form" action="logind.php" method="post" role="form" style="display: block;">
										<div class="form-group">
											<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
										</div>
										<div class="form-group">
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
										</div>
										<div class="form-group text-center">
											<select class="form-control" name="userType">
												<option  value="Admin">Admin</option>
												<option value="Employee">Employee</option>
											</select>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
												</div>
											</div>
										</div>
									</form>
									<!--Registration Area-->
									<form id="register-form" action="loginregcon.php" method="Post" role="form" style="display: none;">
										<div class="form-group">
											<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
										</div>
										<div class="form-group">
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
										</div>
										<div class="form-group">
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
										</div>
										<div class="form-group text-center">
											<select  class="form-control" name="userType">										
												<option value="Admin">Admin</option>
												<option value="Employee">Employee</option>
											</select>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<!--Footer Area-->
	<footer class="footer_area fix">
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="visit">
							<h4>Visit</h4>	
							<p>Kalabagan,Dhanmondi</p>
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
							<p>faisalkabir1993@gmail.com</p>
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
							<p>&copy;2016 Faisal Kabir.All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	
	<!--Javasrcipt-->
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function() {

			$('#login-form-link').click(function(e) {
				$("#login-form").delay(100).fadeIn(100);
				$("#register-form").fadeOut(100);
				$('#register-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
			$('#register-form-link').click(function(e) {
				$("#register-form").delay(100).fadeIn(100);
				$("#login-form").fadeOut(100);
				$('#login-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});

		});
	</script>
	
</body>
</html>