<?php
	session_start();
?>
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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #3c3c3c;margin-left: 20px;margin-right: 20px;margin-top: 20px;border-radius: 40px;height: 85px;">
		<img src="logos/logo.png" style="border-radius: 50%; max-width: 71px;margin-left: -7px;">
		<div class="container-fluid"><img src="logos/achariya_college_of_engineering_TECHNOLOGY-removebg-preview.png" style="max-width: 354px;">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"></a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="admin/index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="signup.php"></span>Register</a>
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
			<img src="logos/welcomeACET.png" style="
			max-width: 334px;
			margin-top: 73px;
			margin-left: 150px;
		">
			<!-- <h5>Library Timing</h5>
			<ul>
				<li>Opening: 8:00 AM</li>
				<li>Closing: 8:00 PM</li>
				<li>(Sunday Off)</li>
			</ul>
			<h5>What We provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>
			</ul> -->
		</div>
		<div class="col-md-8" id="main_content">
			<center><h3 style="margin-left: -288px;" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Login</h3></center>
			<form action="" method="post" style="max-width: 350px; margin-left: 150px;margin-top: 30px;">
				<div class="form-group">
					<label for="email" style="margin-bottom: 15px;">Email ID:</label>
					<input type="text" name="email" placeholder="Enter your E-mail" class="form-control"style="border-radius: 24px;" required>
				</div>
				<div class="form-group">
					<label for="password" style="margin-bottom: 15px;">Password:</label>
					<input type="password" name="password"  style="border-radius: 24px;"placeholder="Enter your Password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary" style="    margin-left: 39px;
				width: 100px;
				border-radius: 20px;">Login</button> |
				<a href="signup.php"> Not registered yet ?</a>	
			</form>
			<?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['id'] =  $row['id'];
								header("Location: user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger" style="margin-left: -298px;">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
