<?php
include '../../database/config.php';
$ctid = mysqli_real_escape_string($conn, $_GET['id']);  // this id is fetched from catagory.php page

$sql = "DELETE FROM tbl_categories WHERE category_id='$ctid'";

if ($conn->query($sql) == TRUE) {
    header("location:../categories.php?DROPPED SUCCESSFULLY!!");
} else {
    header("location:../categories.php?Something Went Wrong!!");
}

$conn->close();
?>
