<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Admin Insert</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

        <!-- Google fonts library -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <!-- Librabies for jQuery and bootstrap -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Functions file -->
        <script type="text/javascript" src="js/functions.js"></script>
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
		  background: #308170;
		}
		h3 {
		  color: #fff;
		  float: right;
		  font-weight: 800;
		  padding-top: 39px;
		}



			 /*Menu Area*/
		.main-menu-area {
		  background: #ddd0ef none repeat scroll 0 0;
		}
		#nav > li {
		  display: inline-block;
		  margin: 0;
		  padding: 7px 50px;
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
		  background: #E8EDFF;
		  padding-bottom: 50px;
		  padding-top: 30px;
		}
		.col-md-6 > img {
		  padding-top: 100px;
		}
		.col-md-6 > h3 {
		  color: #00aff0;
		  font-size: 27px;
		  padding-bottom: 25px;
		  padding-right: 88px;
		}
		#insertForm > p {
		  font-size: 15px;
		  font-weight: 600;
		  padding-bottom: 12px;
		  padding-right: 81px;
		}
		#insertForm > input {
		  background: #1ca347 none repeat scroll 0 0;
		  border: 1px solid #1ca347;
		  border-radius: 15px;
		  color: #fff;
		  font-size: 18px;
		  font-weight: 800;
		  margin-left: 50px;
		  padding: 3px 22px;
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
						<h3>Welcome Admin ! :) </h3>
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
								<li><a href="adminhome.php">Home</a></li>
								<li><a href="adminsearch.php">Search & View</a></li>
								<li><a href="admininsert.php">Insert</a></li>
								<li><a href="totalemployee.php">Total Employee</a></li>
								<li><a href="login.php">Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	</div>
	
	<!-- Main Area -->
	<div class="text-area fix">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="image/insert.png" alt="" />
				</div>
				<div class="col-md-6">
        
					<div class="page-header">
						<h1 align="right">Insert Employee Details:</h1>
					</div>

					<!--Content's containers-->
					<div class="container">
						<form align="center" id="frmPerson" class="form-horizontal">
							<div class="form-group">
								<label for="txtID" class="col-sm-2 control-label">ID</label>
								<div class="col-sm-4">
									<input type="text" id="txtID" class="form-control" placeholder="ID">
								</div>
							</div>                    
							<div class="form-group">
								<label for="txtName" class="col-lg-2 control-label">Name</label>
								<div class="col-sm-4">
									<input type="text" id="txtName" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="txtPhone" class="col-lg-2 control-label">Phone</label>
								<div class="col-sm-4">
									<input type="text" id="txtPhone" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="form-group">
								<label for="txtEmail" class="col-lg-2 control-label">Email</label>
								<div class="col-sm-4">
									<input type="email" id="txtEmail" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-sm-4">
									<input type="submit" value="Insert" id="btnSave" class="btn btn-success"/>
								</div>
							</div>
						</form>
					</div>      

					<!--Table container
					<div class="container">
						<table id="tblList" class="table table-bordered"></table>
					</div>-->
				</div>
			</div>
		</div>
	</div>
	
	
	<!--Text Area--
	<div class="text-area fix">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="image/insert.png" alt="" />
				</div>
				<div class="col-md-6">
					<h3>Insert Employee details: </h3>
					<div class="row">
						<div class="col-lg-10 col-lg-offset-2">
							<form name="name" id="insertForm">
								<div class="row control-group">
									<div class="form-group col-xs-10 floating-label-form-group controls">
										<label>UserName: </label>
										<input type="text" class="form-control" placeholder="Enter UserName">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="row control-group">
									<div class="form-group col-xs-10 floating-label-form-group controls">
										<label>Password: </label>
										<input type="Password" class="form-control" placeholder="Password">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="row control-group">
									<div class="form-group col-xs-10 floating-label-form-group controls">
										<label>Re-Type Password: </label>
										<input type="Password" class="form-control" placeholder="Re-Type Password">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="row control-group">
									<div class="form-group col-xs-10 floating-label-form-group controls">
										<label>Full Name: </label>
										<input type="text" class="form-control" placeholder="Enter full name">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<p>Gender: </p>
								<input type="radio" name="gender" value="Male"/>   Male
								<input type="radio" name="gender" value="Female"/>   Female
								<p>Nationality: </p>
								<input type="radio" name="place" font="bold" value="Bangladesh"/>   Bangladesh
								<input type="radio" name="place" value="Foreign"/>   Foreign
								<div class="row control-group">
									<div class="form-group col-xs-10 floating-label-form-group controls">
										<label>Date-of-birth: </label>
										<input type="date" class="form-control" placeholder="dd/mm/yy">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="row control-group">
									<div class="form-group col-xs-10 floating-label-form-group controls">
										<label>Address: </label>
										<input type="text" class="form-control" placeholder="Enet Address">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="row control-group">
									<div class="form-group col-xs-10 floating-label-form-group controls">
										<label>Phone No: </label>
										<input type="" class="form-control" placeholder="Phone No">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="row control-group">
									<div class="form-group col-xs-10 floating-label-form-group controls">
										<label>Email: </label>
										<input type="email" class="form-control" placeholder="Email">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<p>Designation : 
									<select class="form-control" name="form-control">
										<option  value="Clark">Clark</option>
										<option value="Manager">Manager</option>
										<option value="Ceo">CEO</option>
									</select>
								</p>
								<input type="submit" value="Insert" id="btnSave" class="btn btn-success"/>
								<input type="reset" value="Reset" />
							</form>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>-->
	
	
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
	
</body>

</html>