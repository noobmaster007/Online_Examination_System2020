<?php
date_default_timezone_set('Africa/Dar_es_salaam');
include '../../database/config.php';
include '../../includes/uniques.php';
$exam_id = $_POST['examid'];    // this id comes from edit-exam.php page
$exam = ucwords(mysqli_real_escape_string($conn, $_POST['exam']));
$duration = mysqli_real_escape_string($conn, $_POST['duration']);
$passmark = mysqli_real_escape_string($conn, $_POST['passmark']);
$attempts = mysqli_real_escape_string($conn, $_POST['attempts']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$category = mysqli_real_escape_string($conn, $_POST['category']);

$sql = "SELECT * FROM tbl_examinations WHERE exam_name = '$exam' AND subject = '$subject' AND category = '$category' AND exam_id != '$exam_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
header("location:../examinations.php?DUPLICATE RECORD FOUND!!!");
    }
} else {

$sql = "UPDATE tbl_examinations SET category = '$category', subject = '$subject', exam_name = '$exam', date = '$date', duration = '$duration', passmark = '$passmark', re_exam = '$attempts' WHERE exam_id='$exam_id'";

if ($conn->query($sql) === TRUE) {
header("location:../edit-exam.php?EXAM UPDATED!!&eid=$exam_id");
} else {
header("location:../edit-exam.php?Could Not Apply Settings!!&eid=$exam_id");
}


}
$conn->close();
?>
