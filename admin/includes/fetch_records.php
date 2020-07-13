<?php
// this page is only for panels we have used in admin dashboard.

include '../database/config.php';
// declaring all the variables for the each panels.
$departments = 0;
$students = 0;
$examination = 0;
$subjects = 0;
$categories = 0;
$questions = 0;


$sql = "SELECT * FROM tbl_departments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $departments++;    // counts the no of dept.
    }
} else {

}

$sql = "SELECT * FROM tbl_users WHERE role = 'student'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $students++;
    }
} else {

}


$sql = "SELECT * FROM tbl_examinations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $examination++;
    }
} else {

}

$sql = "SELECT * FROM tbl_subjects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $subjects++;
    }
} else {

}

$sql = "SELECT * FROM tbl_categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $categories++;
    }
} else {

}


$sql = "SELECT * FROM tbl_questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $questions++;
    }
} else {

}

$conn->close();
?>