<?php

include("../libraries/database_crud.php");
$crud = new Database();

$clsn = $_POST['className'];
$fesc = $_POST['feesCat'];



$sql = "SELECT $fesc FROM `all_class_fees_table` WHERE class = '$cn'";


$feeses = $crud->select($sql);
$rows = @mysqli_num_rows($feeses);

if( $rows > 0){
    $fees = @mysqli_fetch_assoc($feeses);
    echo $fees['FullName'];
}else{
    echo "Student Data Not found, Please Be Sure Student ID";
}






?>