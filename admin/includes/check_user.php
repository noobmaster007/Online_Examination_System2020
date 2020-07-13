<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
	// checks whether the variable is set or not

	// $_SESSION variable actually holds the data across all pages. 
	// also this var holds only one user information.
	$myfname = $_SESSION['first_name'];
	$mylname = $_SESSION['last_name'];
	$mygender = $_SESSION['gender'];
	$mydob = $_SESSION['dob'];
	$myaddress = $_SESSION['address'];
	$myemail = $_SESSION['email'];
	$myphone = $_SESSION['phone'];
	$mydepartment = $_SESSION['department'];
	$myrole = $_SESSION['role'];
	
		$myid = $_SESSION['myid'];
	$mycategory = $_SESSION['mycategory'];
	if ($myrole == "admin") {
		
	}else{
	header("location:../?rp=YOU MUST BE A ADMIN TO ACCESS!!");	
	
	}
}else{
	header("location:../?rp=YOU MUST LOGIN FIRST!!");
	// here rp=9422 means the alert msg, and the code fetch from the database.
	// if you want to access without login, then  this statement executed.
}

?>