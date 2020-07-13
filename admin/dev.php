<?php 
include 'includes/check_user.php';
?>
<!DOCTYPE html>
<html>
   
<head>
        
        <title>Developers</title>
        
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
        <link href="../assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	
        <link href="../assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css">
        <link href="../assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/images/icon.png" rel="icon">
        <link href="../assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        
        <script src="../assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

        
    </head>
    <body class="page-header-fixed">
        <div class="overlay"></div>
        
        
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                  
                   
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-right">
                              

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name"><?php echo "$myfname"; ?><i class="fa fa-angle-down"></i></span>
										
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
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    
                    <ul class="menu accordion-menu">
                        <li><a href="./" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li><a href="departments.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-folder-open"></span><p>Departments</p></a></li>
                        <li><a href="categories.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon glyphicon-tags"></span><p>Categories</p></a></li>
                        <li><a href="subject.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon glyphicon-file"></span><p>Subjects</p></a></li>
                        <li><a href="students.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon glyphicon-user"></span><p>Students</p></a></li>
                        <li><a href="examinations.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-book"></span><p>Examinations</p></a></li>
                        <li><a href="questions.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-question-sign"></span><p>Questions</p></a></li>
                        <li class="active"><a href="dev.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-cog"></span><p>Developers</p></a></li>
                        <li><a href="results.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-certificate"></span><p>Exam Results</p></a></li>
          

                    </ul>
                </div>
            </div>
            <div class="page-inner">
                <div class="page-title">
                    <h3>About Developers</h3>



                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
						<div class="row">
                            <div class="col-md-12">
                                <!-- About Section Start -->
                                <div class="w3-container w3-center w3-animate-bottom">
                                <div class="panel info-box panel-white">
                                    <div class="panel-body">
                                        <div class="info-box-stats">
                                            <p class="counter"></p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="..\assets\images\Pratip Sarkar.jpg" width=200 height=200 alt="Pratip Sarkar" class="img-rounded">
                                            </div>
                                            <div class="col-md-5">
                                                <a href="https://www.linkedin.com/in/pratip-sarkar-b09289169/" target="_blank" style="font-size:25px" title="Find on LinkedIn">Pratip Sarkar</a>
                                                <h4>+91 9614333732</h4>
                                                <h4>gablusarkar91@gmail.com</h4>
                                                <h4>Siliguri Institute of Technology, Siliguri</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="w3-container w3-center w3-animate-bottom">
                                <div class="panel info-box panel-white">
                                    <div class="panel-body">
                                        <div class="info-box-stats">
                                            <p class="counter"></p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="..\assets\images\Pranay Karmakar.jpg" width=200 height=200 alt="Pranay Karmakar" class="img-rounded">
                                            </div>
                                            <div class="col-md-5">
                                                <a href="https://www.linkedin.com/in/pranay-karmakar-6b1a82155" target="_blank" style="font-size:25px" title="Find on LinkedIn">Pranay Karmakar</a>
                                                <h4>+91 7602458272</h4>
                                                <h4>pranaykarmakar9@gmail.com</h4>
                                                <h4>Siliguri Institute of Technology, Siliguri</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="w3-container w3-center w3-animate-bottom">
                                <div class="panel info-box panel-white">
                                    <div class="panel-body">
                                        <div class="info-box-stats">
                                            <p class="counter"></p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="..\assets\images\Sudipta.jpg" width=200 height=200 alt="Sudipta Gupta" class="img-rounded">
                                            </div>
                                            <div class="col-md-5">

                                                <a href="http://www.linkedin.com/in/sudipta-gupta-03482a17a" target="_blank" style="font-size:25px" title="Find on LinkedIn">Sudipta Gupta</a>
                                                <h4>+91 8250989206</h4>
                                                <h4>sudiptagupta14@gmail.com</h4>
                                                <h4>Siliguri Institute of Technology, Siliguri</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="w3-container w3-center w3-animate-bottom">
                                <div class="panel info-box panel-white">
                                    <div class="panel-body">
                                        <div class="info-box-stats">
                                            <p class="counter"></p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="..\assets\images\krishnendu.jpg" width=200 height=220 alt="Krishnendu Pattadar" class="img-rounded">
                                            </div>
                                            <div class="col-md-5">
                                                <a href="http://www.linkedin.com/in/krishnendu-pattadar-0046a91a8" target="_blank" style="font-size:25px" title="Find on LinkedIn">Krishnendu Pattadar</a>
                                                <h4>+91 7047722283</h4>
                                                <h4>krishnendu.pattadar@gmail.com</h4>
                                                <h4>Siliguri Institute of Technology, Siliguri</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="w3-container w3-center w3-animate-bottom">
                                <div class="panel info-box panel-white">
                                    <div class="panel-body">
                                        <div class="info-box-stats">
                                            <p class="counter"></p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="..\assets\images\Sangramjeet.jpg " width=200 height=200 alt="Sangramjeet Dutta" class="img-rounded">
                                            </div>
                                            <div class="col-md-5">
                                                <a href="" target="_blank" style="font-size:25px" title="Find on LinkedIn">Sangramjeet Dutta</a>
                                                <h4>+91 6295187547</h4>
                                                <h4>sangramjeetdutta@gmail.com</h4>
                                                <h4>Siliguri Institute of Technology, Siliguri</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- About Section End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> 



                                 
                                 
                                      
                                

		

        <div class="cd-overlay"></div>

        <script src="../assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="../assets/plugins/pace-master/pace.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/switchery/switchery.min.js"></script>
        <script src="../assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="../assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="../assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="../assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="../assets/js/modern.min.js"></script>
    </body>

</html>