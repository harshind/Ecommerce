<?php
	session_start(); 
	require 'includes/common.php';
	if (!isset($_SESSION['email'])) {   
		header('location: index.php');
	 } 
	 $_SESSION['id']=$user_id;
	 $select_query = "Select items.pid, items.name, items.price from items INNER JOIN users_items on users_items.item_id= items.pid where users_items.user_id ='$user_id'";
	 $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
	 if (mysqli_num_rows($select_query_result) == 0) {
	 	echo "Add items to the cart first!.";
	 } else {
	 	$sum =0;
	 	?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="icon" href="img/store.png" type="img/icon type">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    	.container-padding{
    		padding-top: 85px;
    	}
    </style>
	
</head>
<body>
			<?php 
			include 'includes/header.php';
			?>
	<div class="container container-padding">
		<?php while($row = mysqli_fetch_array($select_query_result)) { 
			$sum = $sum + $row['price'];
	 		$id = $row['pid'].',';?>
		<table class="table table-striped table-bordered table-hover">
			<tbody>
				<tr>
					<th>Item Number</th>
					<th>Item Name</th>
					<th>Price</th>
					<th></th>
				</tr>
				<tr>
					<th></th>
				</tr>
				<tr>
					<td><?php echo $row['pid']."   ";?></td>
					<td><?php echo $row['name']."   ";?></td>
					<td><?php echo $row['price']."   ";?></td>
					<td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a> </td>
				</tr>
				<tr>
					<td></td>
					<td>Total</td>
					<td><?php echo "Rs ".$sum;?></td>
					<td><a href="sucsess.php"><button class="btn btn-primary ">Confirm Order</button></a></td>
					<?php 	}
					 } 
				?>
				</tr>

			</tbody>
		</table>
	</div>
	<?php 
		include 'includes/footer.php';
	?>
</body>
</html>