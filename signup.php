<!DOCTYPE html>
<html>
<head>
	<title>Achariya</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#main_content{
		padding: 50px;
		background-color: rgb(255, 255, 255);
	}
	#side_bar{
		background-color: rgb(255, 255, 255);
		padding: 50px;
		width: 300px;
		height: 450px;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="background-color: #3c3c3c;margin-left: 20px;margin-right: 20px;margin-top: 20px;border-radius: 40px;height: 85px;">
		<img src="logos/logo.png" style="border-radius: 50%; max-width: 71px;margin-left: -7px;">
		<div class="container-fluid"><img src="logos/achariya_college_of_engineering_TECHNOLOGY-removebg-preview.png" style="max-width: 354px;">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"></a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Login</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<!-- <span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br> -->
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening: 8:00 AM</li>
				<li>Closing: 4:15 PM</li>
				<li>(Sunday Holiday)</li>
			</ul>
			<h5>Departments</h5>
			<ul>
				<li>Computer Science and Engineering</li>
				<li>Electrical and Electronics Engineering</li>
				<li>Electronics and Communication Engineering</li>
				<li>Civil Engineering</li>
				<li>Mechanical Engineering</li>
				<li>Artificial Inteligence and Machine Learning</li>
			</ul>
			<h5>We provide</h5>
			<ul>
				<li>News Papers</li>
				<li>Peacefull Environment</li>
				<li>All Department Books</li>
			</ul>
		</div>
		<div class="col-md-8" id="main_content">
			<center><h3>Register</h3></center>
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name"  style="margin-left: 10px;">Enter ID </label>
					<input type="text" name="id" class="form-control" placeholder="Enter Student id" style="border-radius: 20px; " required>
				</div>
				<div class="form-group">
					<label for="name"  style="margin-left: 10px;">Full Name:</label>
					<input type="text" name="name" class="form-control" placeholder="Enter Full Name" style="border-radius: 20px; " required>
				</div>
				<div class="form-group">
					<label for="email"  style="margin-left: 10px;">Email ID:</label>
					<input type="text" name="email"  placeholder="Enter E-mail id" style="border-radius: 20px; " class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password" style="margin-left: 10px;">Password:</label>
					<input type="password" name="password"  placeholder="Enter Password" style="border-radius: 20px; "class="form-control" required>
				</div>
				<div class="form-group">
					<label for="mobile"  style="margin-left: 10px;">Mobile:</label>
					<input type="text" name="mobile" placeholder="Enter Mobile No" style="border-radius: 20px; " class="form-control" required>
				</div>
				<div class="form-group">
					<label for="address"  style="margin-left: 10px;">Address:</label>
					<textarea name="address" class="form-control"  placeholder="Enter Address" style="border-radius: 20px; "required></textarea> 
				</div>
				<button type="submit" class="btn btn-primary" style="
				margin-left: 370px;
				width: 116px;
				border-radius: 20px;"
			>Register</button>	
			</form>
		</div>
	</div>
</body>
</html>