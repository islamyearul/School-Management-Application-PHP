
<?php
$view = "dashboard";
include("template.php");


session_start();
$sid = $_SESSION['StdsessionID'];

if($sid == null){
    header("Location: std-login.php");
//echo "<script type='text/javascript'>window.top.location='std-login.php';</script>"; exit;

}
?>

 