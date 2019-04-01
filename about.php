<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>About</title>
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


			 /*Banner Area*/
		.banner-area.fix {
		  background: #e8edff none repeat scroll 0 0;
		}


			 /*Text Area*/
		.text-area.fix {
		  background: #00a88c none repeat scroll 0 0;
		  padding-bottom: 50px;
		  padding-top: 40px;
		}
		h2 {
		  color: #fff;
		  font-weight: 800;
		  text-align: center;
		}
		.col-md-6 > p {
		  color: #fff;
		}
		
		
			 /*Provider Area*/
		.service-area, .provide-area {
		  padding-bottom: 65px;
		  padding-top: 90px;
		}
		.service-area h2, .provide-area h2, .testimonial_area h2 {
		  color: #313131;
		  font-size: 40px;
		  font-family: 'Lato', sans-serif;
		  font-weight: 400;
		  margin-bottom: 30px;
		  text-align: center;
		}
		.service-area p, .provide-area p, .testimonial_area p {
		  color: #000;
		  font-size: 16px;
		  font-family: 'Lato', sans-serif;
		  font-weight: 300;
		  margin-bottom: 30px;
		  text-align: center;
		}
		.seperator {
		  background: #6bac00 none repeat scroll 0 0;
		  height: 2px;
		  margin: 0 auto;
		  width: 85px;
		}
		.service {
		  margin-top: 35px;
		}
		.service img {
		  width: 100%;
		}
		.service h3 {
		  border: 1px solid #ececec;
		  color: #747474;
		  font-size: 14px;
		  font-weight: 400;
		  padding: 15px 0;
		  text-align: center;
		}
		.background{
			background:#FBFBFB;
		}
		.parallax-window {
		  min-height: 400px;
		  background: transparent;
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
	
	
	<!--Banner Area-->
	<div class="banner-area fix">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="image/about.png" alt="banner" />
				</div>
			</div>
		</div>
	</div>
	
	
	<!--Text Area-->
	<div class="text-area fix">
		<div class="container">
			<div class="row">
                <h2>Company Overview</h2>
                <hr class="star-light">
				<div class="col-md-6">
					<p>A company overview (also known as company information or a company summary) is an essential part of a business plan. Your company overview should be exactly what it sounds like: an overview containing all of the most important points about your company. It usually appears after the executive summary. This is typically the shortest chapter of a business plan document, but that doesn't reduce its importance. If you're presenting this plan to people outside of your company, this is your opportunity to introduce yourself and your business, and you are going to want to put your best foot forward. Imagine that the person reading your business plan document has never heard of you, and doesn't know anything about your business.</p>
				</div>
				<div class="col-md-6">
					<p>A company overview (also known as company information or a company summary) is an essential part of a business plan. Your company overview should be exactly what it sounds like: an overview containing all of the most important points about your company. It usually appears after the executive summary. This is typically the shortest chapter of a business plan document, but that doesn't reduce its importance. If you're presenting this plan to people outside of your company, this is your opportunity to introduce yourself and your business, and you are going to want to put your best foot forward. Imagine that the person reading your business plan document has never heard of you.</p>
				</div>
			</div>
		</div>
	</div>
	
	
	<!--Parallax Area-->
	<div class="parallax-window" data-parallax="scroll" data-image-src="image/para.jpg">
	</div>
	
	
	<!--Provider Area-->
	<div class="service-area fix">
			<div class="container">
				<div class="row">
					<h2>SERVICE</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not onlyto make a type specimen book.</p>
					<div class="seperator"></div>
					<div class="col-md-3">
						<div class="service">
							<img src="image/service1.jpg" alt="" />
							<h3>Fine a Maze Near You</h3>
						</div>
					</div>
					<div class="col-md-3">
						<div class="service">
							<img src="image/service2.jpg" alt="" />
							<h3>Fine a Maze Near You</h3>
						</div>
					</div>
					<div class="col-md-3">
						<div class="service">
							<img src="image/service3.jpg" alt="" />
							<h3>Fine a Maze Near You</h3>
						</div>
					</div>
					<div class="col-md-3">
						<div class="service">
							<img src="image/service4.jpg" alt="" />
							<h3>Fine a Maze Near You</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	
	<!--Footer Area-->
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