<?php
	session_start(); 
								
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACHARIYA</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark"   style="background-color: #3c3c3c;margin-left: 20px;margin-right: 20px;margin-top: 20px;border-radius: 40px;height: 85px;">
		<img src="images/logo.png" style="border-radius: 50%; max-width: 71px;margin-left: -7px;">
		<div class="container-fluid"><img src="images/achariya_college_of_engineering_TECHNOLOGY-removebg-preview.png" style="max-width: 354px;">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">
				</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../signup.php"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../index.php">Login</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<div class="x_content"><h2>Issue Books</h2>
		<form name="form1" action="" method="post">
			<table>
				<tr>
					<td>
						<select name="id" class="form-control selectpicker">
							<?php
							$connection = mysqli_connect("localhost","root","");
							$db = mysqli_select_db($connection,"lms");
							$query = "select id from users";
							$query_run = mysqli_query($connection,$query);
							while($row = mysqli_fetch_assoc($query_run)){
								?>
								<option><?php echo $row['id'];?></option>
								<?php
							}
							?>
						</select>
					</td>
					<td>
						<input type="submit" value="search" name="submit1" class="form-control  btn btn-primary" style="margin-top: 5px;">
							
					</td>
				</tr>
			</table>

			<?php
			
			?>
				<table class="table table-striped">
					<tr>
						<td>
							<input type="text" class="form-control" placeholder="Student Id" name="id" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" class="form-control" placeholder="Student Name" name="name" required>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" class="form-control" placeholder="Student Contact" name="mobile" required>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" class="form-control" placeholder="Student E-mail" name="email" required>
						</td>
					</tr>
					<tr>
						<td>
							<select name="books_name" class="form form-control selectpicker">
							<?php
							$connection = mysqli_connect("localhost","root","");
							$db = mysqli_select_db($connection,"lms");
							$query = "select book_name from books";
							$query_run = mysqli_query($connection,$query);
							while($row = mysqli_fetch_assoc($query_run)){
								?>
								<option><?php echo $row['book_name'];?></option>
								<?php
							}
							?>
							
							
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" class="form-control" placeholder="Book Issue Date" name="bookissuedate" required>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" class="form-control" placeholder="Student User Name" name="studentusername" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" class="form-control" value="Issue Book"
								name="submit2"class="form-control btn btn-default" name="issue books" style="background-color:black; color:white">
						</td>
					</tr>
				</table>


				<?php
			

			?>
				
		</form>
	</div>
	<!-- <span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br> -->
</body>
</html>