<?php 
require 'includes/common.php';
if (isset($_SESSION['email'])) {   
	header('location: products.php'); 
} 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="icon" href="img/store.png" type="img/icon type">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>
	<?php 
	include 'includes/header.php';
	?>
    <div style="padding-top: 75px" class="container-fluid col-xs-12 col-lg-12 col-md-8">
    	<center>
		<div class="panel panel-default">
				<h1>SIGN UP</h1>
			<div class="panel-body">
				<div class="container-fluid">
					<div class="row">
						<form action="signup_script.php" method="POST">
							<div class="form-group">
								<input type="text" class="from-control" name="name" placeholder="Name" required="true">
							</div>
							<div class="form-group">
								<input type="text" class="from-control" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="from-control" name="password" placeholder="Password">
							</div>
							<div class="form-group">
								<input type="text" class="from-control" name="contact" placeholder="Contact">
							</div>
							<div class="form-group">
								<input type="text" class="from-control" name="city" placeholder="City">
							</div>
							<div class="form-group">
								<input type="text" class="from-control" name="address" placeholder="Address">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
		</center>
	</div>
</div>
	<?php 
	include 'includes/footer.php';
	?>
</body>
</html>