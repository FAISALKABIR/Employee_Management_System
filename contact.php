<?php

if (isset($_POST) && !empty($_POST)){
    $to      =  'faisalkabir1993@gmail.com';
    $subject = 'Email From Customer Details';
    $message = $_POST['name']. "\r\n" . $_POST['email']. "\r\n" . $_POST['phone']. "\r\n" . $_POST['message'] ;
    $headers = 'From: ' . "\r\n" .
        'Reply-To:'.$_POST['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $message, $headers)) {
        echo ' Your Email sent successfully!';
    } else {
         die('Failure: Your Email was not sent!');
    }
}


?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
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


			 /*Map Area*/
		.parallax-window {
		  min-height: 750px;
		  background: transparent;
		}
		h2 {
		  font-weight: 800;
		}
		.maps {
		  text-color: #fff;
		  font-size: 15px;
		  padding-bottom: 70px;
		  padding-left: 89px;
		  padding-top: 50px;
		  position: absolute;
		  top: 27%;
		}
		iframe {
		  padding-top: 40px;
		}
		label {
		  font-weight: 800;
		}


			/*Footer Area*/
		.footer_top {
		  background: #323536 none repeat scroll 0 0;
		  border-bottom: 1px solid #494b4c;
		  color: #fff;
		  padding-bottom: 35px;
		  padding-top: 60px;
		}
		.footer h2 {
		  font-size: 20px;
		  font-weight: 400;
		  margin-bottom: 30px;
		  text-transform: uppercase;
		}
		.footer p {
		  font-size: 13px;
		  font-weight: 400;
		}

		.recent img {
		  float: left;
		  margin-bottom: 10px;
		  margin-right: 10px;
		}
		.recent p {
		  font-size: 12px;
		  margin-bottom: 10px;
		}
		.recent h5 {
		  font-size: 10px;
		  margin-bottom: 10px;
		}
		.social-icons i {
		  border: 1px solid #6bac00;
		  font-size: 18px;
		  height: 30px;
		  margin-top: 35px;
		  padding-top: 6px;
		  text-align: center;
		  width: 30px;
		  cursor:pointer;
		}
		.social-icons i:hover{background:#6bac00;}
		.footer h5, .footer h6 {
		  font-size: 14px;
		}
		.footer h6 {
		  margin-top: 35px;
		}
		.footer-margin{margin-top:15px}
			
			
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
	
	
	<!--Map Area-->
	<div class="map-area fix">
		<div class="parallax-window" data-parallax="scroll" data-image-src="image/background2.jpg"></div>
		<div class="maps">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2>Contact Me</h2>
						<hr class="star-light">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6141.742439382396!2d90.37581259093015!3d23.750877292613048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sKalabagan%2Cdhanmondi32+Dhaka!5e0!3m2!1sen!2sbd!4v1471204170765" width="650" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-lg-10 col-lg-offset-2">
								<form  id="contact" method="post">
								<fieldset>
									<div class="row control-group">
										<div class="form-group col-xs-12 floating-label-form-group controls">
											<label>Name</label>
											<input type="text" name="name" class="form-control" placeholder="Name" id="name" required autofocus>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="row control-group">
										<div class="form-group col-xs-12 floating-label-form-group controls">
											<label>Email Address</label>
											<input type="text" name="email" class="form-control" placeholder="Email Address" id="email" required>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="row control-group">
										<div class="form-group col-xs-12 floating-label-form-group controls">
											<label>Phone Number</label>
											<input type="tel" name="phone" class="form-control" placeholder="Phone Number" id="phone" required>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="row control-group">
										<div class="form-group col-xs-12 floating-label-form-group controls">
											<label>Message</label>
											<textarea rows="5" name="message" class="form-control" placeholder="Type your Message Here...." id="message" required></textarea>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<br>
									<div id="success"></div>
									<div class="row">
										<div class="form-group col-md-12">
											<button type="reset" class="btn btn-default">Cancel</button>
											<button type="submit" class="btn btn-success btn-md" >Send</button>
										</div>
									</div>
								</fieldset>	
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
		<!--Footer Area-->
			<footer class="footer_areatop fix">
			<div class="footer_top">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="footer">
								<h2>Downlaod coupon</h2>
								<p>You shouldn't have to take our word for it. You can read what our satisfied clients have to say. More importantly, you can see real hMore importantly, you can see real h</p>
								<img src="image/add.png" class="footer-margin" alt="" />
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer">
								<h2>Recent Post</h2>
								<div class="recent">
									<img src="image/post.jpg" alt="" />
									<p>You shouldn't have to take our word for it. You sdfd read what i</p>
									<h5>November 10. 2017</h5>
								</div>
								<div class="recent">
									<img src="image/post.jpg" alt="" />
									<p>You shouldn't have to take our word for it. You sdfd read what i</p>
									<h5>November 10. 2017</h5>
								</div>
								<div class="recent">
									<img src="image/post.jpg" alt="" />
									<p>You shouldn't have to take our word for it. You sdfd read what i</p>
									<h5>November 10. 2017</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer">
								<h2>Follow Us</h2>
								<p>You shouldn't have to take our word for it. You can read what our satisfied clients have to say. More importantly, you can see real h</p>
								<div class="social-icons">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-twitter"></i>
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
								</div>
							</div>
						</div>
						<div class="footer">
							<h2>Adress</h2>
							<p>You shouldn't have to take our word for it. You can read what our</p>
							<h5>Dhanmondi, Dhaka</h5>
							<h6>Phone: (208) 705-7705</h6>
						</div>
					</div>
				</div>
			</div>
		
		
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
							<p>&copy;2017faisalkabir.All Rights Reserved</p>
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