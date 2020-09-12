<?php 
	require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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

    <div style="padding-top: 75px" class="text-center container col-xs-12 col-lg-12 col-md-8">
		<div  class="panel panel-primary">
			<div class="panel-heading">
				LOGIN
			</div>
			<div class="panel-body">
				<p class="text-warning">Login to make a purchase</p>
				<div class="container">
					<div class="row">
						<form method="Post" action="login_submit.php">
							<div class="form-group">
								<input type="text" class="from-control" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="from-control" name="password" placeholder="Password">
							</div>
							<button class="btn btn-primary">Login</button>
						</form>
					</div>
				</div>
				
			</div>
			<div class="panel-footer">
					Don't have an account?<a href="signup.php">Register</a>
			</div>
		</div>
	</div>
</div>
	<?php
        include 'includes/footer.php';
    ?>
</body>
</html>