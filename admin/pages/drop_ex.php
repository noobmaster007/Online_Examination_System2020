<?php
// DROP EXAMINATION
include '../../database/config.php';
$exid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "DELETE FROM tbl_examinations WHERE exam_id='$exid'";

if ($conn->query($sql) === TRUE) {

$sql = "DELETE FROM tbl_questions WHERE exam_id='$exid'";
if ($conn->query($sql) === TRUE) {
} else {
}

    header("location:../examinations.php?DROPPED SUCCESSFULLY!!");
} else {
    header("location:../examinations.php?COULD NOT APPLY SETTING!!");
}

$conn->close();
?>
