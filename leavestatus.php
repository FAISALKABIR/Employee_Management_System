<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Employee Leave Status</title>
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


			 /*Table Area*/
		@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Oxygen);

		/* Page layout */

		body {
			background-color: #fff;
			margin: 0;
			padding: 0;
			font-family: 'Oxygen', sans-serif;
			color: #444;
			font-size: 15px;
			line-height: 18px;
			font-weight: 300;
		}


		article {
			margin: 40px 30px;
		}

		h2 { margin: 20px 0 10px 0;
			font-weight: 900;
		}


		/* Table Layout */

		table.application {
			margin: 20px 0 0 0;
			border-collapse: collapse;
			border-spacing: 0;
			background: #212121;
			color: #fff;
			width: 100%;
		}

		table.application th, table.application td {
			text-align: center;
		}

		table.application thead {
			line-height: 12px;
			background: #2e63e7;
			text-transform: uppercase;
		}

		table.application thead th {
			color: #fff;
			padding: 10px;
			letter-spacing: 1px;
			vertical-align: bottom;
		}

		table.application thead th:nth-child(1) {
			width: 10%;
			text-align: left;
			padding-left: 20px;
		}

		table.application thead th:nth-child(2) {
			width: 15%;
		}

		table.application thead th:nth-child(3) {
			width: 15%;
		}

		table.application thead th:nth-child(4) {
			width: 15%;
		}
		
		table.application thead th:nth-child(5) {
			width: 35%;
		}
		
		table.application thead th:nth-child(6) {
			width: 10%;
		}

		table.application tbody {
			font-size: 1em;
			line-height: 15px;
		}

		table.application tbody tr {
			border-top: 2px solid rgba(109, 176, 231, 0.8);
			transition: background 0.6s, color 0.6s;
		}

		table.application tbody tr:nth-child(even) {
			background: rgba(255, 255, 255, 0.2);
		}

		table.application tbody tr:hover {
			color: #000;
			background: rgba(255, 255, 255, 0.7);
			font-weight: 900;
		}

		table.application tbody td {
			padding: 12px;
		}

		table.application tbody tr:hover td:first-child {
			background: rgba(0,0,0,0);
		}

		table.application tbody td:first-child {
			text-align: left;
			padding-left: 20px;
			font-weight: 700;
			background: rgba(109, 176, 231, 0.35);
			transition: backgrounf 0.6s;
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
	
	
	<!--Table Area-->
	<div class="table-area fix">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<article>
				<h2>Application Status: </h2>
					<table class="application">
						<thead>
							<tr>
								<th>ID</th>
								<th>starting Date</th>
								<th>Ending Date</th>
								<th>Applying Date</th>
								<th>Purpose</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>	
							<tr>
								<td>001</th>
								<td>01/12/2017</td>
								<td>05/12/2017</td>
								<td>11/11/2017</td>
								<td>For spending some time with family...</td>
								<td><i class="fa fa-spinner" aria-hidden="true">Pending</i></td>
							</tr>
							<tr>
								<td>001</th>
								<td>03/12/2017</td>
								<td>07/12/2017</td>
								<td>12/11/2017</td>
								<td>For attending a ceremony...</td>
								<td><i class="fa fa-spinner" aria-hidden="true">Pending</i></td>
							</tr>
							<tr>
								<td>001</th>
								<td>05/12/2017</td>
								<td>07/12/2017</td>
								<td>15/11/2017</td>
								<td>For travelling with family...</td>
								<td><i class="fa fa-spinner" aria-hidden="true">Pending</i></td>
							</tr>
							<tr>
								<td>001</th>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>001</th>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>001</th>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>001</th>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>	
					</table>
				</article>
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