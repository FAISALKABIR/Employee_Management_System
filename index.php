<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/owl.theme.css" />
	<link rel="stylesheet" href="css/responsive.css" />
	<style>
		*{margin:0;padding:0;}

		h1,h2,h3,h4,h5,h6,p{margin:0;}

		img{max-width:100%;}

		.float-right{float:right;}
		.fix{overflow:hidden;}

		.navbar {
		  background: #4c4c4c none repeat scroll 0 0;
		  border: 1px solid transparent;
		  margin-bottom: 0;
		  min-height: 20px;
		  position: relative;
		}


			  /*Main Menu Area*/
		.main-menu-area {
		  background: #FFFFFF;
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



			 /*Slider Area*/
		#slider .item img{
			display: block;
			width: 100%;
			height: auto;
		}	

		h1 {
			color: #fff;
			float: left;
			font-size: 75px;
			margin-left: 128px;
			margin-right: 160px;
			position: absolute;
			text-align: center;
			top: 5%;
			text-shadow: 4px 5px 5px;
			margin-top: 200px;
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
		.provide {
		  margin-top: 55px;
		  text-align: center;
		}
		.provide i {
		  border: 1px solid #6bac00;
		  border-radius: 50%;
		  color: #111;
		  font-size: 35px;
		  height: 80px;
		  margin-bottom: 35px;
		  padding-top: 20px;
		  width: 80px;
		}
		.provide h3 {
		  color: #81ab02;
		  font-size: 20px;
		  font-weight: 400;
		  margin-bottom: 20px;
		}
		.provide p {
		  color: #333333;
		  font-size: 14px;
		  font-weight: 400;
		  margin-bottom: 20px;
		}
		.provide a {
		  background: #6bac00 none repeat scroll 0 0;
		  border-radius: 5px;
		  color: #fff;
		  display: inline-block;
		  font-size: 14px;
		  font-weight: 400;
		  padding: 5px 15px;
		  text-decoration: none;
		}
		.testimonial_area {
		  background: #fff none repeat scroll 0 0;
		  padding-bottom: 30px;
		  padding-top: 75px;
		}
		.test1 {
		  margin-top: 50px;
		  text-align: center;
		}
		.test1 p {
		  color: #141414;
		  font-size: 16px;
		  font-weight: 400;
		  margin-bottom: 7px;
		}
		.test1 img {
		  border: 1px solid #6bac00;
		  border-radius: 50%;
		  margin-bottom: 20px;
		  width: 125px;
		}
		.test1 h3 {
		  color: #111;
		  font-size: 16px;
		  text-align: right;
		}
		.client-area {
		  background: rgba(0, 0, 0, 0) url("image/client.jpg") no-repeat scroll center center / cover;
		  padding-bottom: 40px;
		  padding-top: 105px;
		}
		.client-area h2 {
		  color: #313131;
		  font-size: 40px;
		  margin-bottom: 30px;
		  text-align: center;
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
		  padding-bottom: 8px;
		  padding-top: 8px;
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
		  font-size: 30px;
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
	
	
	<!--slider area-->
	<div class="slider-area fix">
		<div id="owl-demo" class="owl-carousel owl-theme">
			<div class="item"><img src="image/slider1.jpg" alt="slider1"></div>
			<div class="item"><img src="image/slider2.jpg" alt="slider2"></div>
			<div class="item"><img src="image/slider3.jpg" alt="slider3"></div>
			<div class="item"><img src="image/slider4.jpg" alt="slider4"></div>
			<div class="item"><img src="image/slider5.jpg" alt="slider5"></div>
		</div>
		<div class="text">
			<h1>"Emlpoyee Management System"</h1>
		</div>
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
		<div class="parallax-window" data-parallax="scroll" data-image-src="image/work.jpg">
		</div>
		<div class="provide-area background fix">
			<div class="container">
				<div class="row">
					<h2>WHAT WE PROVIDE</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not onlyto make a type specimen book.</p>
					<div class="seperator"></div>
					<div class="col-md-3">
						<div class="provide">
							<i class="fa fa-users"></i>
							<h3>GROUP RESERVATIONS</h3>
							<p>We have great group rates and the maze can be fun for everyone! Whether it's a church activity or just a bunch of friends you'll have a blast at the maze!</p>
							<a href="">Learn More</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="provide">
							<i class="fa fa-users"></i>
							<h3>GROUP RESERVATIONS</h3>
							<p>We have great group rates and the maze can be fun for everyone! Whether it's a church activity or just a bunch of friends you'll have a blast at the maze!</p>
							<a href="">Learn More</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="provide">
							<i class="fa fa-users"></i>
							<h3>GROUP RESERVATIONS</h3>
							<p>We have great group rates and the maze can be fun for everyone! Whether it's a church activity or just a bunch of friends you'll have a blast at the maze!</p>
							<a href="">Learn More</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="provide">
							<i class="fa fa-users"></i>
							<h3>GROUP RESERVATIONS</h3>
							<p>We have great group rates and the maze can be fun for everyone! Whether it's a church activity or just a bunch of friends you'll have a blast at the maze!</p>
							<a href="">Learn More</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="provide">
							<i class="fa fa-users"></i>
							<h3>GROUP RESERVATIONS</h3>
							<p>We have great group rates and the maze can be fun for everyone! Whether it's a church activity or just a bunch of friends you'll have a blast at the maze!</p>
							<a href="">Learn More</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="provide">
							<i class="fa fa-users"></i>
							<h3>GROUP RESERVATIONS</h3>
							<p>We have great group rates and the maze can be fun for everyone! Whether it's a church activity or just a bunch of friends you'll have a blast at the maze!</p>
							<a href="">Learn More</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="provide">
							<i class="fa fa-users"></i>
							<h3>GROUP RESERVATIONS</h3>
							<p>We have great group rates and the maze can be fun for everyone! Whether it's a church activity or just a bunch of friends you'll have a blast at the maze!</p>
							<a href="">Learn More</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="provide">
							<i class="fa fa-users"></i>
							<h3>GROUP RESERVATIONS</h3>
							<p>We have great group rates and the maze can be fun for everyone! Whether it's a church activity or just a bunch of friends you'll have a blast at the maze!</p>
							<a href="">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="parallax-window" data-parallax="scroll" data-image-src="image/clnt2.jpg">
		</div>
		<div class="client-area fix">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>OUR CLIENTS</h2>
						<div id="clients">
							<div><img src="image/client1.jpg" alt="" /></div>
							<div><img src="image/client2.jpg" alt="" /></div>
							<div><img src="image/client1.jpg" alt="" /></div>
							<div><img src="image/client2.jpg" alt="" /></div>
							<div><img src="image/client1.jpg" alt="" /></div>
							<div><img src="image/client2.jpg" alt="" /></div>
							<div><img src="image/client1.jpg" alt="" /></div>
							<div><img src="image/client2.jpg" alt="" /></div>
							<div><img src="image/client1.jpg" alt="" /></div>
							<div><img src="image/client2.jpg" alt="" /></div>
							<div><img src="image/client1.jpg" alt="" /></div>
							<div><img src="image/client2.jpg" alt="" /></div>
							<div><img src="image/client1.jpg" alt="" /></div>
							<div><img src="image/client2.jpg" alt="" /></div>
							<div><img src="image/client1.jpg" alt="" /></div>
							<div><img src="image/client2.jpg" alt="" /></div>
							<div><img src="image/client1.jpg" alt="" /></div>
							<div><img src="image/client2.jpg" alt="" /></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonial_area fix">
			<div class="container">
				<div class="row">
					<h2>TESTIMONIAL</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to</p>
					<div class="seperator"></div>
					<div class="col-md-1">
						<i class="fa fa-quote-left"></i>
					</div>
					<div class="col-md-10">
						<div id="testimonial" class="owl-carousel">
							<div class="test1">
								<img src="image/testimonial.jpg" alt="" />
								<p>Praesent pulvinar, est eget pharetra euismod, metus felis condimentum massa, ut vestibulum ipsum risus vel ligula. In hac habitasse platea dictumst.Praesent pulvinar, est eget pharetra euismod, metus felis condimentum massa,ut vestibulum ipsum risus vel ligula. In hac habitasse platea dictumst</p>
								<h3>by Mick fernandag</h3>
							</div>
							<div class="test1">
								<img src="image/testimonial.jpg" alt="" />
								<p>Praesent pulvinar, est eget pharetra euismod, metus felis condimentum massa, ut vestibulum ipsum risus vel ligula. In hac habitasse platea dictumst.Praesent pulvinar, est eget pharetra euismod, metus felis condimentum massa,ut vestibulum ipsum risus vel ligula. In hac habitasse platea dictumst</p>
								<h3>by Mick fernandag</h3>
							</div>
							<div class="test1">
								<img src="image/testimonial.jpg" alt="" />
								<p>Praesent pulvinar, est eget pharetra euismod, metus felis condimentum massa, ut vestibulum ipsum risus vel ligula. In hac habitasse platea dictumst.Praesent pulvinar, est eget pharetra euismod, metus felis condimentum massa,ut vestibulum ipsum risus vel ligula. In hac habitasse platea dictumst</p>
								<h3>by Mick fernandag</h3>
							</div>
						</div>
					</div>
					<div class="col-md-1">
						<i class="fa fa-quote-right"></i>
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
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	
	<script type="text/javascript">
			$(document).ready(function() 
			{
			 
				$("#owl-demo").owlCarousel({
					
					navigation : true, // Show next and prev buttons
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem:true,
					autoPlay : 2000
			 
					// "singleItem:true" is a shortcut for:
					// items : 1, 
					// itemsDesktop : false,
					// itemsDesktopSmall : false,
					// itemsTablet: false,
					// itemsMobile : false
			 
				});
			 
			});
			
			$(document).ready(function() {
				  $("#testimonial").owlCarousel({
					singleItem:true,
					autoPlay:5000
				  });
				});
		</script>
		<script type="text/javascript">
			    $(document).ready(function() {
				  $("#clients").owlCarousel({
					items:6,
					autoPlay:true,
					pagination:false
				  });
				});
			
	</script>
	
</body>
</html>