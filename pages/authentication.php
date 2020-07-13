<!--this page is responsible for login access, both student and admin section-->
<?php
include '../database/config.php';
$myusername = mysqli_real_escape_string($conn, $_POST['user']);
$mypassword = md5($_POST['login']);

$sql = "SELECT * FROM tbl_users WHERE user_id = '$myusername' AND login = '$mypassword' OR email = '$myusername' AND login = '$mypassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    session_start();
	$_SESSION['login'] = true;
	$_SESSION['first_name'] = $row['first_name'];
	$_SESSION['last_name'] = $row['last_name'];
	$_SESSION['gender'] = $row['gender'];
	$_SESSION['dob'] = $row['dob'];
	$_SESSION['address'] = $row['address'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['phone'] = $row['phone'];
	$_SESSION['department'] = $row['department'];
	$_SESSION['role'] = $row['role'];
	$_SESSION['myid'] = $row['user_id'];
	$_SESSION['mycategory'] = $row['category'];
	$accstat = $row['acc_stat'];	// this means admin or student (default value will be 1)
	if ($accstat == "0") {	// if the value of accstat is 0 then this will execute
	 header("location:../?rp=YOUR ACCOUNT HAS BEEN DISABLED!!");	
	}else{	// otherwise redirect to the main page, if you are a student, or admin
		$location = strtolower($row['role']);
	header("location:../$location/");	
	}

    }
} else {	// if the credential does not match then this will occur
    header("location:../?rp=WRONG USER ID AND PASSWORD!!");
}
$conn->close();

?>