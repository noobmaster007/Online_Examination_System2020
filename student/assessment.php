<!--EXAMINATION PAGE, where all the questions and options are there-->
<?php 
date_default_timezone_set('Africa/Dar_es_salaam');
include 'includes/check_user.php'; // usually checks the student, throughout this page, till logout

include '../includes/uniques.php';  // create random unique numbers
if (isset($_SESSION['current_examid'])) {   // exam_id from the take_assessment page
include '../database/config.php';
$exam_id = $_SESSION['current_examid'];	
$retake_status = $_SESSION['student_retake'];   // if the student is already took the exam, and waits for retake. then it shows 1

if ($retake_status == "1") {    // if there is 1, then the student already took the exam before.
$sql = "DELETE FROM tbl_assessment_records WHERE student_id = '$myid' AND exam_id = '$exam_id'";
// So this query deletes the previous records of the student and put the current one.
if ($conn->query($sql) === TRUE) {

} else {

}	
}


$sql = "SELECT * FROM tbl_examinations WHERE exam_id = '$exam_id' AND category = '$mycategory' AND status = 'Active'";
// fetch the particular exam from exam_id and category
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $exam_name =$row['exam_name'];
	$subject = $row['subject'];
	$deadline = $row['date'];
	$duration = $row['duration'];
	$passmark = $row['passmark'];
	$reexam = $row['re_exam'];
	
	$status = $row['status'];
	$today_date = date('Y/m/d');
    $next_retake = date('m/d/Y', strtotime($today_date. ' + '.$reexam.' days'));
	
	$today_date = date('m/d/Y');
    }
} else {
header("location:./");	
}
}else{
header("location:./");	
}



$sql = "SELECT * FROM tbl_assessment_records WHERE student_id = '$myid'";   // this id comes from check_user page
// this query fetches the student record from assessment record
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // if the student already took the exam, then it redirects the take_assessment page
    while($row = $result->fetch_assoc()) {
    header("location:./take-assessment.php?id=$exam_id");
    }
} else {    // if not, then it creates a new record(student) in the assessment_record 
$myname = "$myfname $mylname";
$recid = 'RS'.get_rand_numbers(14).'';  // creates a record id of the student

$sql = "INSERT INTO tbl_assessment_records (record_id, student_id, student_name, exam_name, exam_id, score, status, next_retake, date)
VALUES ('$recid', '$myid', '$myname', '$exam_name', '$exam_id', '0', 'FAIL', '$next_retake', '$today_date')";   // default values

if ($conn->query($sql) === TRUE) {

} else {

}

}

?>
<!DOCTYPE html>
<html>
    
<head>
        
    
        <title>Examination</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="../assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="../assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        
        <link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/images/icon.png" rel="icon">
        <link href="../assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--Internet requires-->
        <script src="../assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
    </head>
	<body class="page-header-fixed page-horizontal-bar" >
        <div class="overlay"></div>
        

        <main class="page-content content-wrap container">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">  <!--this is for the quiz-time-->
                        <a class="logo-text"><span><div id="quiz-time-left"></div></span></a>
                    </div>

                    <div class="topmenu-outer">
                        <div class="top-menu">
						 <ul class="nav navbar-nav navbar-left">


                            </ul>
                            <ul class="nav navbar-nav navbar-right">


                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name"><?php echo "$myfname"; ?> <?php echo "$mylname"; ?><i class="fa fa-angle-down"></i></span>
									
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="profile.php"><i class="fa fa-user"></i>Profile</a></li>
                                       
                                    </ul>
                                </li>
                                <li>
                                    <a href="logout.php" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                                <li>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="horizontal-bar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        
                    </div>
                    <ul class="menu accordion-menu">
                        <li><a href="./" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li><a href="examinations.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-book"></span><p>Examinations</p></a></li>
                        <li><a href="results.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-certificate"></span><p>Exam Results</p></a></li>

                    </ul>
                </div>
            </div>
            <div class="page-inner">
                <div class="page-title">
                    <h3>Examination</h3>
                   
                </div>
                <div id="main-wrapper">
                    <div class="row">
                    <!-- Miss you amigos. Hopefully we'll work together again! :) -->
                                        <!-- Dated - 13.07.2020 -->
                                <div class="panel panel-white">
                                    <div class="panel-body">
                                        <div class="tabs-below" role="tabpanel">
                                       <form action="pages/submit_assessment.php" method="POST" name="quiz" id="quiz_form" >
                                            <div class="tab-content">
											<?php 
											include '../database/config.php';
                                            $sql = "SELECT * FROM tbl_questions WHERE exam_id = '$exam_id'";
                                            // fetch questions corresponding to exam_id
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                            $qno = 1;
                                            while($row = $result->fetch_assoc()) {
												$qsid = $row['question_id'];
												$qs = $row['question'];
												$type = $row['type'];
												$op1 = $row['option1'];
												$op2 = $row['option2'];
												$op3 = $row['option3'];
												$op4 = $row['option4'];
												$ans = $row['answer'];
												$enan = $row[$ans];
                                            if ($type == "FB") {    // this part will not execute, only MC will execute
											if ($qno == "1") {
											print '
											<div role="tabpanel" class="tab-pane active fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'.</b> '.$qs.'</p>
											 <p><input type="text" name="an'.$qno.'"  class="form-control" placeholder="Enter your answer" autocomplete="off">
                                             <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($ans).'">
                                             </div>
											';	
											}else{
											print '
											<div role="tabpanel" class="tab-pane fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'.</b> '.$qs.'</p>
											 <p><input type="text" name="an'.$qno.'"  class="form-control" placeholder="Enter your answer" autocomplete="off">
					                         <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($ans).'">
                                             </div>
											';		
											}

											$qno = $qno + 1;	
											}else{  // here the type is MC, this will execute
											
											if ($qno == "1") {  // if the question number is 1, then execute this

											print '
											<div role="tabpanel" class="tab-pane active fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'.</b> '.$qs.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op1.'"> '.$op1.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op2.'"> '.$op2.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op3.'"> '.$op3.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op4.'"> '.$op4.'</p>
											 <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($enan).'">
                                             </div>
											';	
											}else{  // if the question number is different. 
											print '
											<div role="tabpanel" class="tab-pane fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'.</b> '.$qs.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op1.'"> '.$op1.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op2.'"> '.$op2.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op3.'"> '.$op3.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op4.'"> '.$op4.'</p>
											 <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($enan).'">
                                             </div>
											';		
											}

											$qno = $qno + 1;	  

											
											}

                                            }
                                            } else {
 
                                            }
											
											?>

                                            </div>
                 
											
                                            <ul class="nav nav-tabs" role="tablist">
											<?php 
											include '../database/config.php';
                                            $sql = "SELECT * FROM tbl_questions WHERE exam_id = '$exam_id'";
                                            // fetch all the questions
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                            $qno = 1;
											$total_questions = 0;
                                            while($row = $result->fetch_assoc()) {
											$total_questions++; // total questions are incremented as student are attempted
											if ($qno == "1") {
											print '<li role="presentation" class="active"><a href="#tab'.$qno.'" role="tab" data-toggle="tab">'.$qno.'</a></li>';	
											}else{
											print '<li role="presentation"><a href="#tab'.$qno.'" role="tab" data-toggle="tab">'.$qno.'</a></li>';		
											}

											$qno = $qno + 1;
                                            }
                                            } else {
 
                                            }
											
											?>
                                            <input type="hidden" name="tq" value="<?php echo "$total_questions"; ?>">   <!--How many questions are attempt-->
											<input type="hidden" name="eid" value="<?php echo "$exam_id"; ?>"> <!--Exam ID of the current examination-->
											<input type="hidden" name="pm" value="<?php echo "$passmark"; ?>">  <!--Passmark of the current exam-->
											<input type="hidden" name="ri" value="<?php echo "$recid"; ?>"> <!--Record ID of the Current Exam, Based on this the score will be stored into the database-->
											
                                            </ul>
											

                                        </div>
								<br><input onclick="return confirm('Are you sure you want to submit your assessment ?')" class="btn btn-success" type="submit" value="Submit Assessment">
											</form>
                                    </div>
                                </div>  
                    </div>
                </div>
                
            </div>
        </main>
		
?>
        <div class="cd-overlay"></div>
	

        <script src="../assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="../assets/plugins/pace-master/pace.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/plugins/switchery/switchery.min.js"></script>
        <script src="../assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="../assets/plugins/waves/waves.min.js"></script>
        <script src="../assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="../assets/js/modern.min.js"></script>
        
				

<script type="text/javascript">
var max_time = <?php echo "$duration" ?>;
var c_seconds  = 0;
var total_seconds =60*max_time;
max_time = parseInt(total_seconds/60);
c_seconds = parseInt(total_seconds%60);
document.getElementById("quiz-time-left").innerHTML='' + max_time + ':' + c_seconds + 'Min';
function init(){
document.getElementById("quiz-time-left").innerHTML='' + max_time + ':' + c_seconds + ' Min';
setTimeout("CheckTime()",999);
}
function CheckTime(){
document.getElementById("quiz-time-left").innerHTML='' + max_time + ':' + c_seconds + ' Min' ;
if(total_seconds <=0){
setTimeout('document.quiz.submit()',1);
    
    } else
    {
total_seconds = total_seconds -1;
max_time = parseInt(total_seconds/60);
c_seconds = parseInt(total_seconds%60);
setTimeout("CheckTime()",999);
}

}
init();
</script>
    </body>

</html>


