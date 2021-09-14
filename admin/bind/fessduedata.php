<?php

include("../libraries/database_crud.php");
$crud = new Database();
$res = 0;
$clsn = $_POST['className'];
$studentdId = $_POST['studentdId'];
$Session = $_POST['SessionData'];

//echo $clsn . $studentdId . $Session;

if($clsn && $studentdId && $Session ){
    $sql = "SELECT * FROM `feescollection` WHERE class= '$clsn' AND student_id = '$studentdId' AND  `Session` = '$Session' ORDER BY Date DESC LIMIT 1";

    // 
    $duefeeses = $crud->select($sql);
    $rows = @mysqli_num_rows($duefeeses);
    $res = 0;
    if( $rows > 0){

        $dufees = @mysqli_fetch_assoc($duefeeses);
        $res = $dufees['due_balance'];
    
            echo $res;
        
        
    }else{
        echo "System error OR Data Not Found";
    }

}else{
    echo "Please Chose Student ID, Class And Session";
}





?>
