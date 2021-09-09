<?php

$view = "student_login";
include("template.php");


session_start();
$sid = $_SESSION['StdsessionID'];
if($std){
    header("location: dashboard.php");
}


?>
