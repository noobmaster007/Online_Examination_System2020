<?php
include '../../database/config.php';
$rsid = mysqli_real_escape_string($conn, $_GET['rid']);
$exid = mysqli_real_escape_string($conn, $_GET['eid']);

$sql = "DELETE FROM tbl_assessment_records WHERE record_id='$rsid'";

if ($conn->query($sql) === TRUE) {
    header("location:../view-results.php?EXAM IS ACTIVE NOW!!!&eid=$exid");
} else {
     header("location:../view-results.php?COULD NOT APPLY SETTING!!!&eid=$exid");
}

$conn->close();
?>
