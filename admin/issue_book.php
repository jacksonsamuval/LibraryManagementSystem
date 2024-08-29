<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Achariya</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
  			alert("Book added successfully...");
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="
    margin-top: 10px;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: -14px;
    border-radius: 40px;">
		<img src="images/logo.png" style="border-radius: 50%; max-width: 71px;margin-left: -7px;">
		<div class="container-fluid"><img src="images/achariya_college_of_engineering_TECHNOLOGY-removebg-preview.png" style="max-width: 354px;">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php"></a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="#">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;margin-left: 10px;
    margin-right: 10px;
    border-radius: 10px;">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Books </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_book.php">Add New Book</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_book.php">Manage Books</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_cat.php">Add New Category</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_cat.php">Manage Category</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Authors</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_author.php">Add New Author</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_author.php">Manage Author</a>
	        	</div>
		      </li>
	          <li class="nav-item">
		        <a class="nav-link" href="issue_book.php">Issue Book</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<!-- <span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br> -->
		<center><h4>Issue Book</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="book_name" style="
						margin-left: 10px">Book Name:</label> 
						<select class="form-control" name="book_name"  style="border-radius: 20px" required>
							<option>-Select Book Name-</option>
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
						<!-- <input type="text" name="book_name" placeholder="Enter Book Name" style="border-radius: 20px; " class="form-control" required> -->
					</div>
					<div class="form-group">
						<label for="book_author" style="
						margin-left: 10px">Author Name:</label>
						<select class="form-control" name="book_author"  style="border-radius: 20px">
							<option>-Select author-</option>
							<?php  
								$connection = mysqli_connect("localhost","root","");
								$db = mysqli_select_db($connection,"lms");
								$query = "select author_name from authors";
								$query_run = mysqli_query($connection,$query);
								while($row = mysqli_fetch_assoc($query_run)){
									?>
									<option><?php echo $row['author_name'];?></option>
									<?php
								}
							?>
						</select>
						<!--<input type="text" name="book_author" class="form-control" required> -->
					</div>
					<div class="form-group">
						<label for="book_no" style="
						margin-left: 10px">Book Number:</label>
						<input type="text" name="book_no" placeholder="Enter Book Number" style="border-radius: 20px; " class="form-control" required>
					</div>
					<div class="form-group">
						<label for="student_id" style="
						margin-left: 10px" >Student ID:</label>
						<input type="text" name="student_id" placeholder="Enter Student ID" style="border-radius: 20px; " class="form-control" required>
					</div>
					<div class="form-group">
						<label for="issue_date" style="
						margin-left: 10px">Issue Date:</label>
						<input type="text" name="issue_date" style="border-radius: 20px; " class="form-control" value="<?php echo date("yy-m-d");?>" required>
					</div>
					<button type="submit" name="issue_book" style="border-radius: 20px;width: 150px;
					margin-left: 159px; " class="btn btn-primary">Issue Book</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>

<?php
	if(isset($_POST['issue_book']))
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "insert into issued_books(book_no,book_name,book_author,student_id,status,issued_date) values($_POST[book_no],'$_POST[book_name]','$_POST[book_author]','$_POST[student_id]',1,'$_POST[issue_date]')";
		$query_run = mysqli_query($connection,$query);
		// header("Location:admin_dashboard.php");
	}
?>
