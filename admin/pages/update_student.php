<?php
$student_id = $_POST['student_id'];	// this id is fetched from student.php page
include '../../database/config.php';
//	fetched from student.php page & stored into variable.
$fname = ucwords(mysqli_real_escape_string($conn, $_POST['fname']));
$lname = ucwords(mysqli_real_escape_string($conn, $_POST['lname']));
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$department = mysqli_real_escape_string($conn, $_POST['department']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$address = ucwords(mysqli_real_escape_string($conn, $_POST['address']));
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);

//	basically this query checks whether the existing data is same or not.
$sql = "SELECT * FROM tbl_users WHERE email = '$email' AND user_id !='$student_id' OR phone = '$phone' AND user_id !='$student_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $sem = $row['email'];	
	$sph = $row['phone'];
	if ($sem == $email) {		// if the email is same
	 header("location:../edit-student.php?Duplicate Email ID Found!!&sid=$student_id");	
	}else{
	
	if ($sph == $phone) {	// duplicate phone no found
	 header("location:../edit-student.php?Duplicate Phone Number Found!!!&sid=$student_id");	
	}else{
		
	}
	
	}
	
    }
} else {
	// this query update the new data from edit-student.php page
$sql = "UPDATE tbl_users SET first_name = '$fname', last_name = '$lname', gender = '$gender', dob = '$dob', address = '$address', email = '$email', phone = '$phone', department = '$department', category = '$category' WHERE user_id='$student_id'";

if ($conn->query($sql) === TRUE) {
  header("location:../edit-student.php?STUDENT UPDATED!!!&sid=$student_id");
} else {
  header("location:../edit-student.php?Could Not Apply Settings!!!&sid=$student_id");
}


}

$conn->close();
?>