<?php

include("../libraries/database_crud.php");
$crud = new Database();
$res = 0;
$clsn = $_POST['className'];
$fesc = $_POST['feesCat'];
// echo $clsn;
// echo $fesc;


if($clsn && $fesc){
    $sql = "SELECT $fesc FROM `all_class_fees_table` WHERE class = '$clsn'";


$feeses = $crud->select($sql);
$rows = @mysqli_num_rows($feeses);
$res = 0;
if( $rows > 0){

    $fees = @mysqli_fetch_assoc($feeses);
    $res += $fees[$fesc];
  
        echo $res;
    
    
}else{
    echo "System error";
}

}else{
    echo "Please Chose Class And Fees Category";
}





?>
