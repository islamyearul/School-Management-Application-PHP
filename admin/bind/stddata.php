<?php

include("../libraries/database_crud.php");
$crud = new Database();

$id = $_GET['fid'];



$sql = "SELECT * FROM `students` WHERE std_id = '$id'";
$students = $crud->select($sql);
$rows = @mysqli_num_rows($students);

if( $rows > 0){
    $student = @mysqli_fetch_assoc($students);
    echo $student['FullName'];
}else{
    echo "Student Data Not found, Please Be Sure Student ID";
}






?>