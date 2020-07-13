<?php
session_start();
$_SESSION['login'] = false;
session_destroy();
header("location:../"); // back to index page.

?>