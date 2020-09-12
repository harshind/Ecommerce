<?php 
 require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
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
 	require 'includes/header.php';
 	include 'includes/check-if-added.php';
	?>
	<div class="container">
		<div class="jumbotron">
			<h1>Welcome to our Lifestyle Store!</h1>
			<p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
			<
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/5.jpg" alt="img-responsive"></a>
				<div class="caption">

					<h3>Camera EOS</h3>
					<p>Price: Rs 36000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(1)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?> 
				</div>
			</div>
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/2.jpg" alt="img-responsive"></a>
				<div class="caption">
					<h3>Sony DSLR</h3>
					<p>Price: Rs 40000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(2)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?>				</div>
			</div>
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/3.jpg" alt="img-responsive"></a>
				<div class="caption">
					<h3>Sony DSLR</h3>
					<p>Price: Rs 50000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(3)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?>
				</div>
			</div>
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/4.jpg" alt="img-responsive"></a>
				<div class="caption">
					<h3>Olympus DSLR</h3>
					<p>Price: Rs 80000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(4)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/9.jpg" alt="img-responsive"></a>
				<div class="caption">
					<h3>Titan Model #301</h3>
					<p>Price: Rs 13000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(5)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?>
				</div>
			</div>
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/10.jpg" alt="img-responsive"></a>
				<div class="caption">
					<h3>Titan Model #201</h3>
					<p>Price: Rs 3000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(6)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?>
				</div>
			</div>
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/11.jpg" alt="img-responsive"></a><div class="caption">
					<h3>HMT Milan</h3>
					<p>Price: Rs 8000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(7)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?>
				</div>
			</div>
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/12.jpg" alt="img-responsive"></a>
				<div class="caption">
					<h3>Faber Luba #111</h3>
					<p>Price: Rs 18000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(8)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/8.jpg" alt="img-responsive"></a>
				<div class="caption">
					<h3>H&#38W</h3>
					<p>Price: Rs 800.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(9)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?>
				</div>
			</div>
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/6.jpg" alt="img-responsive"></a>
				<div class="caption">
					<h3>Luis Phil</h3>
					<p>Price: Rs 1000.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(10)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?>
				</div>
			</div>
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/13.jpg" alt="img-responsive"></a>
				<div class="caption">
					<h3>John Zok</h3>
					<p>Price: Rs 1500.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(11)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?>
				</div>
			</div>
			<div class="col-sm-6 col-md-3"><a class="thumbnail" href=""><img src="img/14.jpg" alt="img-responsive" alt="img-responsive"></a>
				<div class="caption">
					<h3>Jalshani</h3>
					<p>Price: Rs 1300.00</p>
					<?php if (!isset($_SESSION['email'])) { ?>                       <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
					<?php } else {                                 /*We have created a function to check whether this particular product is added to cart or not.*/           			if (check_if_added_to_cart(12)) { 
						/*This is same as if(check_if_added_to_cart != 0)*/			echo '<a href="#" class="btn btn-block 		btn-success" disabled>Added to cart</a>';
					} else { ?>                                     
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php }} ?>
				</div>
			</div>
		</div>
	</div>
</body>
<?php 
 	require 'includes/footer.php';
?>
</html>