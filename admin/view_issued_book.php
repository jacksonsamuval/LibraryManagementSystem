<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_name = "";
	$author = "";
	$name= "";
	$book_no = "";

	$query = "select issued_books.book_name,issued_books.book_author,issued_books.book_no,users.name from issued_books left join users on issued_books.student_id = users.id where issued_books.status = 1";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Issued Books</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="background-color: #3c3c3c;margin-left: 20px;margin-right: 20px;margin-top: 20px;border-radius: 40px;height: 85px;">
		<img src="images/logo.png" style="border-radius: 50%; max-width: 71px;margin-left: -7px;">
		<div class="container-fluid"><img src="images/achariya_college_of_engineering_TECHNOLOGY-removebg-preview.png" style="max-width: 354px;">
			<div class="navbar-header">
				<!-- <a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a> -->
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="#">View Profile</a>
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
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd ;margin-left: 10px;
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
		<center><h4>Issued Books</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="input-group">
					<form action="" method="get">
						<div class="input-group-prepend">
							<input type="text" class="form-control" value="<?php if(isset($_GET[''])){echo $_GET['search'];} ?>" style="margin-bottom: 20px;" name="search" placeholder="search here">
							<button type="submit" class="btn btn-primary"style="margin-bottom:20px;margin-left:20px;" >search</button>
						</div>
					</form>	
				</div>

				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>Name</th>
							<th>Author</th>
							<th>Number</th>
							<th>Student Name</th>
							<th>Delete</th>
						</tr>
				
						<?php
							$con = mysqli_connect("localhost","root","","lms");
							if(isset($_GET['search']))
							{
								$filtervalues = $_GET['search'];
								$query = "SELECT * FROM issued_books WHERE book_no LIKE '%$filtervalues%'";			
													
								$query_run = mysqli_query($con,$query);
								if(mysqli_num_rows($query_run) > 0)
								{
									foreach($query_run as $items)
									{
										?>
										<tr>
                                        	
                                    	</tr>
										<?php
									}
								}
								else
								{
									?>
                                    <tr>
                                        <td colspan="4" style="text-align: center">No Record Found</td>
                                    </tr>
                                    <?php
								}
							}
							$query_run = mysqli_query($connection,$query);
							$query = "select * from users where name = '$_SESSION[name]'";
							while ($row = mysqli_fetch_assoc($query_run))
							{
							?>
							<tr>
							<td><?php echo $row['book_name'];?></td>
							<td><?php echo $row['book_author'];?></td>
							<td><?php echo $row['book_no'];?></td>
							<td><?php echo $_SESSION['name'];?></td>	
							<td>
							<button class="btn"><a href="delete_issues.php?bn=<?php echo $row['book_no'];?>">Delete</a></button></td>
							</tr>
							<?php
							}
							?>
				</table>
				</form>
			</div>
			<div class="col-md-2">
			</div>
		</div>
</body>
</html>
