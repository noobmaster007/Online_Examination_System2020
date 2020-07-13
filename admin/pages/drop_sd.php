<?php
// STUDENT DROP
include '../../database/config.php';
$sdid = mysqli_real_escape_string($conn, $_GET['id']);  // fetch the student id

$sql = "DELETE FROM tbl_users WHERE user_id='$sdid'";

if ($conn->query($sql) === TRUE) {
    header("location:../students.php?DROPPED SUCCESSFULLY!!");
} else {
    header("location:../students.php?Could Not Apply Settings!!!");
}

$conn->close();
?>
