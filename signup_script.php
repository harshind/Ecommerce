<?php 
require 'includes/common.php';
$email =mysqli_real_escape_string($_POST['email']);
$name = mysqli_real_escape_string($_POST['name']);
$contact =mysqli_real_escape_string( $_POST['contact']);
$password = mysqli_real_escape_string( $_POST['password']);
$str =md5($password);
$city = mysqli_real_escape_string( $_POST['city']);
$address = mysqli_real_escape_string( $_POST['address']);
$select_query =" Select id from users where email ='$email'";
$select_query_result = mysqli_query($con, $select_query) or 
die(mysqli_error($con));
if (mysql_num_rows($select_query_result) > 0) {
	echo "Email id already exists";
}else{
	$user_registration_query = "Insert into users(email_id, name,password,contact, city, address)values ('$email', '$name','$str', '$contact','$city','$address')" or die($user_registration_query);
	$user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
	$_SESSION ['email'];
	$_SESSION ['id'] = mysqli_insert_id($con);
	header("location:products.php");
}

//echo "User inserted Successfully";

?>