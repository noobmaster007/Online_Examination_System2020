<!--Password Update-->
<?php
include '../includes/check_user.php';   // student details
include '../../database/config.php';

$new_password = md5($_POST['pass1']);  // this password comes from the profile.php page
// converts this into hash code md5
$sql = "UPDATE tbl_users SET login='$new_password' WHERE user_id='$myid'";
// store it into the database 
if ($conn->query($sql) === TRUE) {
   header("location:../profile.php?rp=PASSWORD HAS BEEN CHANGED!!!");
   // if the query execute successfully then this msg will occur in the url
} else {
   header("location:../profile.php?rp=SOMETHING WENT WRONG!!!");
}

$conn->close();
?>
