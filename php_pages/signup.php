<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="StyleSheet\Style.css">
		<link rel="stylesheet" type="text/css" href="StyleSheet\bootstrap-3.3.7-dist\css\bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="StyleSheet\font-awesome-4.7.0\css\font-awesome.min.css">
		<style type="text/css">
		.footbar
		{
		height: auto;
		margin-top: 5px;
		margin-left: 5px;
		margin-right: 5px;
		background-color: #fdd31d;
		}
		.navbarcenter
		{
		position: absolute;
		left:50%;
		transform: translateX(-50%);
		}
		.navbar
		{
		border: none;
		background-color: #fdd31d;
		}
		a
		{
		font-weight: bolder;
		color:#fdd31d ;
		}
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
		width: 100%;
		margin: auto;
		}
		.navbar-inverse .navbar-nav>li>a {
		color: #e20086;
		}
		.btn{
		border:none;
		background-color: #fdd31d;  /*mustard*/
		}
		.btn:hover {
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
		background-color: #e20086; /* magenta */
		color: white;
		}
		.button:hover
		{
		background-color: black;
		color:white;
		}
		.button1:hover{
		background-color: #e20086;
		}
		.label{
		color:white;
		}
		</style>
	</head>
	<body>
		<!------------------------------- 1ST NAVBAR--------------------------------------->
		<div class="container-fluid" style="background-color: lightgray; text-align:center;
			height: 25px;">
			<div class="row">
				<div class="col-lg-12">
					<p><i>Free shipping over $80 (Will not applicable on big items) </i></p>
				</div>
			</div>
		</div>
		<!-----------------2nd Div Container start (logo, search bar, login and cart------------------------->
		<div class="container-fluid" style=" height: auto; background-color:#e20086">
			<div class="row">
				<div class="col-lg-4">
					<!--  <div style="height: 100px;"> -->
					<h1 style = "text-align: center; font-family: Georgia; font-size: 50px; color: #fdd31d"><b><i>eventCart</i></b></h1>
					<!--   </div> -->
				</div>
				<div class="col-lg-4">
					<div style= "padding-top: 10px;">
						<div class="navbar-form">
							<div class="input-group">
								<input type="text" name="" class="form-control" style="width: 500px" placeholder="search a vender or product">
								<div class="input-group-btn">
									<button class="btn btn-default button" type="submit"><i  class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4" >
					<ul class="nav navbar-nav navbar-right" style=" color:#fdd31d; padding-top: 10px;">
						<li><a href="#"><i class="fa fa-heart fa-2x" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> &nbsp;Cart</a></li>
						<li><a href="login.html" ><i class="fa fa-user fa-2x"></i> &nbsp;Signup </a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container-fluid">  <!---https://cartzilla.createx.studio/home-fashion-store-v1.html---->
		<div class="row">
			<div class="navbar navbar-default navbar-inverse">
				<div class="navbar-header" style="margin-left: 100px;">
					<button class="navbar-toggle" data-toggle="collapse" data-target="#nav1" >
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse" id="nav1">
					<!---------------navigation items-------------------->
					<ul class="nav navbar-nav" >
						<li ><a href="index.html">Home</a></li>
						<li><a href="#">Shop</a></li>
						<li><a href="#">Write a Review</a> </li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" >
			<div class="col-lg-8 col-lg-offset-2" style="margin-top: 20px;">
				<div class="col-lg-6" style="padding: 30px; height: 650px; background-color: #fdd31d; box-shadow:0px 0px 25px  #fdd31d">
					<h1 style="text-align: center; color: white">Login </h1>
					<form action="./login.php" method="post">
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" placeholder="Enter Email " class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" placeholder="Enter Password" class="form-control">
						</div>
						<div class="form-group">
							<label>Select User-Type</label>
							<select class="form-control">
								<option>Customer</option>
								<option>Vendor</option>
							</select>
						</div>
						<button class="btn btn-primary">Login Now</button>
					</form>
				</div>
				<div class="col-lg-6" style="padding:50px; height: 650px; background-color:#e20086;box-shadow:0px 0px 25px #e20086">
					<h1 style="text-align: center; color: white">Create a new account</h1>
					<form action="./register.php" method="post">
						<div class="form-group">
							<label>First Name</label>
							<input id="FirstName" type="fname" name="first_name" placeholder="Enter your first name" class="form-control">
						</div>
						<div class="form-group">
							<label>Last Name</label>
							<input id="LastName" type="lname" name="last_name" placeholder="Enter your last name" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input id="Email" type="email" name="email" placeholder="Enter Email" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input id="Password" type="pass" name="paasword" placeholder="Enter Password" class="form-control">
						</div>
						<div class="form-group">
							<label>Re-enter Password</label>
							<input id="Re_password" type="re_pass" name="re_enter_pass" placeholder="Re-Enter Password" class="form-control">
						</div>
						<div class="form-group">
							<label>Select User-Type</label>
							<select class="form-control" name="select_type">
								<option>Customer</option>
								<option>Vendor</option>
							</select>
						</div>
						<button class="btn btn-primary" type="submit">Register Now</button>
						<!-- <button href="CustomerInfo.php"; class = "btn btn-primary" id="Register-now">Register Now</button> -->
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- <script type="text/javascript" src= "signup.js"></script> -->
</body>
</html>