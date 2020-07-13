<!--ASSESSMENT page > SUBMIT_ASSESSMENT page-->
<?php
error_reporting(0);
$total_questions = $_POST['tq']; // this is comes from assessment page
$starting_mark = 1;
$mytotal_marks = 0;
$exam_id = $_POST['eid'];
$record = $_POST['ri'];

while ($starting_mark <= $total_questions) { // lets say starting marks is 1 and total_question is 3
if (strtoupper(base64_decode($_POST['ran'.$starting_mark.''])) == strtoupper($_POST['an'.$starting_mark.''])) {
   // ran and an comes from the assessment page
   // 'ran' stands for right answer and 'an' stands for only answer. if this is matched then this execute
$mytotal_marks = $mytotal_marks + 1;	// if matched, then total_marks incremented
}else{
	
}
$starting_mark++; // incremented
}

$percent_score = ($mytotal_marks / $total_questions) * 100;
$percent_score = floor($percent_score);   // floor means omits the decimal numbers.  
$passmark = $_POST['pm'];  // (Given by the admin)you have to put the value, when the examination will create. 

if ($percent_score >= $passmark) {  // if the percent score is above than your passmark   
$status = "PASS";	
}else{
$status = "FAIL";	
}

session_start();
$_SESSION['record_id'] = $record;
include '../../database/config.php';
$sql = "UPDATE tbl_assessment_records SET score='$percent_score', status='$status' WHERE record_id='$record'";
// this 
if ($conn->query($sql) === TRUE) {

	
   header("location:../assessment-info.php");
} else {
   header("location:../assessment-info.php");
}

$conn->close();
?>
