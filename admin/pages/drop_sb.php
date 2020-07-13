<?php
// DROP SUBJECT
include '../../database/config.php';
$sbid = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "DELETE FROM tbl_subjects WHERE subject_id='$sbid'";

if ($conn->query($sql) === TRUE) {
    header("location:../subject.php?DROPPED SUCCESSFULLY!!");
} else {
    header("location:../subject.php?Could Not Apply Settings!!");
}

$conn->close();
?>
