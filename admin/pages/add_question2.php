<!--Question tab > Add Question Section-->
<?php
include '../../database/config.php';
include '../../includes/uniques.php';
$examid = mysqli_real_escape_string($conn, $_POST['exam']); // exam id is passed from examination.php
$question_id = 'QS-'.get_rand_numbers(6).'';    // this is question id
$question = mysqli_real_escape_string($conn, $_POST['question']);   // the question itself
$answer = mysqli_real_escape_string($conn, $_POST['answer']);   // the answer option is fetched from question.php page(radio button)

if (isset($_GET['type'])) { // checks whether this variable is empty or not
$question_type = $_GET['type'];	// type is "mc" fetched from question.php page
if ($question_type == "mc") {	// if the type is matched then
$opt1 = mysqli_real_escape_string($conn, $_POST['opt1']);   // this options are fetched from question.php page
$opt2 = mysqli_real_escape_string($conn, $_POST['opt2']);
$opt3 = mysqli_real_escape_string($conn, $_POST['opt3']);
$opt4 = mysqli_real_escape_string($conn, $_POST['opt4']);

// this query is, select everything from question table where exam id means the exam and question is fetched. 
// and also it means that it checks that whether the existing exam has same question or not
$sql = "SELECT * FROM tbl_questions WHERE exam_id = '$examid' AND question = '$question'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {  // fetched all rows from question table
        // if the same question is found then it shows a msg in the url
 header("location:../questions.php?DUPLICATE RECORD FOUND!!!");
    }
} else {
    // if not same, then this query will insert the new question along with the answer
$sql = "INSERT INTO tbl_questions (question_id, exam_id, type, question, option1, option2, option3, option4, answer)
VALUES ('$question_id', '$examid', 'MC', '$question', '$opt1', '$opt2', '$opt3', '$opt4', '$answer')";

if ($conn->query($sql) === TRUE) {  // if the query is true then new question is added
    header("location:../questions.php?NEW QUESTION ADDED SUCCESSFULLY!!");	
} else {    // it means there is an error somewhere
 header("location:../questions.php?COULD NOT ADD QUESTION!!");	
}

}

// deleted.
}else if($question_type == "fib") {
$sql = "SELECT * FROM tbl_questions WHERE exam_id = '$examid' AND question = '$question'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
header("location:../add-questions.php?DUPLICATE RECORD FOUND!!&eid=$examid");
    }
} else {

$sql = "INSERT INTO tbl_questions (question_id, exam_id, type, question, answer)
VALUES ('$question_id', '$examid', 'FB', '$question', '$answer')";

if ($conn->query($sql) === TRUE) {
  header("location:../questions.php?NEW QUESTION ADDED SUCCESSFULLY!!");  	
} else {
 header("location:../questions.php?COULD NOT ADD QUESTION!!");
}


}


}else{
	
}
	
}else{
	
header("location:../");	
	
}


?>