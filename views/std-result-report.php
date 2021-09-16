<?php
  include("../admin/libraries/database_crud.php");
  $crud = new Database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">




    <title>Document</title>

    <style>
    html {
        font-family: arial;
        font-size: 18px;
    }

    thead {
        font-weight: bold;
        text-align: center;
        background: #625D5D;
        color: white;
    }

    table {
        border-collapse: collapse;
    }

    .footer {
        text-align: right;
        font-weight: bold;
    }

    .output td {
        border: 1px solid #726E6D;
        padding: 15px;
    }

    h1 {
        color: #D92028;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 800;
        text-transform: uppercase;
    }

    h2 {
        color: #D95412;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 700;
    }

    .footer {
        text-align: right;
        font-weight: bold;
    }

    .output tbody>tr:nth-child(odd) {
        background: #D1D0CE;
    }
    </style>
</head>

<body>
    <?php 
if(isset($_POST['full_result'])){
//     extract($_POST);
//    print_r($_POST);
   $Stid = $_POST['std_id'];
   $Stname = $_POST['std_name'];
   $Stclass = $_POST['class'];
   $Stsession = $_POST['session'];
   $Stidexam = $_POST['exam'];

   //echo $Stid . $Stname . $Stclass . $Stsession . $Stidexam ;


   $stdSQL = "SELECT * FROM `students` WHERE std_id=$Stid";
   $allinfo = $crud->select($stdSQL);
   $std = mysqli_fetch_assoc($allinfo);

   $allResSQL= "SELECT * FROM `exam_marks` WHERE `student_id`='$Stid' AND `student_name`= '$Stname' AND `class_id`='$Stclass' AND `session_id`='$Stsession'  AND `exam_id`='$Stidexam' ";
  @ $allresults = $crud->select($allResSQL);
   @$allresultsb = $crud->select($allResSQL);
   //$rows = mysqli_fetch_all($allresults);
   @$row = mysqli_num_rows($allresults);

    //echo " $Stid  $Stname   $Stclass $Stsession $Stidexam";

  if( $row > 0){
?>


    <div class="container my-5" id="example">
        <div>
            <div class="container">
                <div class="row my-2">
                    <div class="col-md-3">
                        <img src="../assets/images/logo.png" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-center">Islam Education </h1>
                        <h2 class="text-center">Result Card</h2>
                        <h3 class="text-center">Final Exam Result</h3>
                        <p>
                            Address: Room No 401, Monjuri Bhaban, 8-DIT Avem Motijhel, Dhaka.

                            Phone: +8801825682260

                            Email: yearulislamonem@gmail.com
                        </p>
                        <hr>
                        <h3 class="text-center text-danger"><?php echo @$std['FullName']; ?></h3>
                        <div class="row">
                            <div class="col-md-8">
                                <div>
                                    <table>
                                        <?php while(@$res= mysqli_fetch_assoc($allresultsb)){ 
                                                                    
                                                @$class = $res['class_id'];
                                               @ $session = $res['session_id'];
                                               @ $exam = $res['exam_id'];
                                                                }
                                         ?>
                                        <td>Student's Name:</td>
                                        <td><?php echo @$std['FullName']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td><?php echo @$std['Gender']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Date Of Birth:</td>
                                            <td><?php echo @$std['DOB']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Registration:</td>
                                            <td><?php echo @$std['RegNo']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Class:</td>
                                            <td><?php  echo @$class ?></td>
                                        </tr>
                                        <tr>
                                            <td>Session:</td>
                                            <td><?php   echo @$session; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Examination:</td>
                                            <td><?php  echo @$exam; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="../admin/upload/<?php echo @$std['Photo']; ?>" class="img-fluid img-thumbnail"
                                    alt="Responsive image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="../assets/images/logo.png" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-3">
                <table style="border-collapse: collapse;" class="output">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Total Marks</th>
                            <th>Obtain Marks</th>
                            <th>Point</th>
                            <th>Grade</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php 
                                @$totalmarks = 0;
                                @$obtainmarks = 0;
                                @$totalpoint = 0;

                    while(@$mark = mysqli_fetch_assoc($allresults)){ 

                        
                        ?>
                        <tr>
                            <td><?php echo $mark['subject_id']; ?></td>

                            <td><?php $totalmarks += $mark['mark_total'];
                                     echo $mark['mark_total']; ?></td>
                            <td><?php $obtainmarks += $mark['mark_obtained'];
                                     echo $mark['mark_obtained']; ?></td>
                            <td><?php  $totalpoint += $mark['point'];
                                     echo $mark['point']; ?></td>
                            <td><?php echo $mark['result']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="footer">Grade</td>
                            <td colspan="2"><?php  @$grade =  $totalpoint/$row;
                                       if($grade >= 5 ){
                                        echo "A+";
                                       }
                                       elseif ($grade >= 4) {
                                        echo "A";
                                       }
                                       elseif ($grade >= 3.5) {
                                        echo "A-";
                                       }
                                       elseif ($grade >= 3) {
                                        echo "B";
                                       }
                                       elseif ($grade >= 2) {
                                        echo "C";
                                       }
                                       elseif ($grade >= 1) {
                                        echo "D";
                                      } else{
                                           echo "F";

                                       } ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="footer">GPA</td>
                            <td colspan="2"><?php   
                                   @ $point = $totalpoint/$row;
                                     $pointdes = round($point, 2); 
                                     echo  $pointdes; ?> Out Of 5.0 </td>
                        </tr>
                </table>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-6 text-center">
                <img src="../assets/images/sign/tsign.png" class="img-fluid" alt="Responsive image"
                    style="width: 100px;">
                <p>Class Teacher</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="../assets/images/sign/islam-sign.png" class="img-fluid" alt="Responsive image"
                    style="width: 100px;">
                <p>Principal</p>
            </div>
        </div>
        <div class="justify-content-center text-center">
            <button onclick="window.print()" class="btn btn-danger ">Print Result</button>
        </div>
    </div>






    <?php   } else {

            echo "Result Not Found";
            }

} else {

    echo "Result Not Found";
}
?>









    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>
</body>





</html>