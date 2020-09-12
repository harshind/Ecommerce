<?php 
require 'includes/common.php';
$email = mysqli_real_escape_string($_POST['email']);
$password = mysqli_real_escape_string($_POST['password']);
$str = mds($password);
$select_query =" Select id, email_id from users";
$select_query_result = mysqli_query($con, $select_query) or 
die(mysqli_error($con));
if (mysqli_num_row($select_query_result) == 0) {
} else{
	while (mysqli_fetch_array($select_query_result)) {
		$_SESSION ['email'] =$email;
		$_SESSION ['id'] = $user_id;
		header("location:products.php");
	}
}
?>