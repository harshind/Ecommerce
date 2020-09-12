<?php 
session_start();
$item_id = $_GET['id'];
require 'includes/common.php';
$insert_query = "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart') ";
$insert_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
header("location:products.php");
?>