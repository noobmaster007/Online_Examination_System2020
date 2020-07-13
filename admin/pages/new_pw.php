<?php
// PASSWORD UPDATION
include '../includes/check_user.php';
include '../../database/config.php';

$new_password = md5($_POST['pass1']);

$sql = "UPDATE tbl_users SET login='$new_password' WHERE user_id='$myid'";

if ($conn->query($sql) === TRUE) {
	header("location:../profile.php?rp=PASSWORD HAS BEEN CHANGED!!!");
} else {
   header("location:../profile.php?rp=SOMETHING WENT WRONG!!");
}

$conn->close();
?>
