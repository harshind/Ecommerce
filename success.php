<?php 
	session_start();
	require 'includes/common.php';
	if (!isset($_SESSION['email'])) {   
		header('location: index.php');
	 } else{ 
	 	$_SESSION['user_id'] = $user_id;
		 $status_update_query = "UPDATE users_items SET status = 'confirmed' where user_id = '$user_id'";
		 $status_update_query_result = mysqli_query($con,$status_update_query) or die(mysqli_error($con));
	 ?>
	 <p>Your order is confirmed. Thank you for shopping with us.<a href="products.php">Click here</a> to purchase any other item.</p>
	 <?php }
	 ?>
	