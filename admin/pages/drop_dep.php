<?php
include '../../database/config.php';
$depid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "DELETE FROM tbl_departments WHERE department_id='$depid'";

if ($conn->query($sql) === TRUE) {
    header("location:../departments.php?rp=DEPT DROPPED!!!");
} else {
    header("location:../departments.php?rp=COULD NOT APPLY SETTINGS!!");
}

$conn->close();
?>
