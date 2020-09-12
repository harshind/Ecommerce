<?php 
require 'includes/common.php';
if (isset($_SESSION['email'])) {   
    header('location: products.php'); 
} 

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Lifestyle Store</title>
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

        <div id="banner_image">
        	<div class="container">
        		<div id="banner_content"><a class="btn btn-danger btn-lg active" href="products.php">Shop Now</a></div>
        	</div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>  
    </body>
    
</html>
