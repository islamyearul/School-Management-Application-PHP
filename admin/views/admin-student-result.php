<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

$studentQL = "SELECT * FROM `students`";
$students = $crud->select($studentQL);

$sessionSQL = "SELECT * FROM `session`";
$sessions = $crud->select($sessionSQL);

$examSQL = "SELECT * FROM `exam_all`";
$exams = $crud->select($examSQL);

$subjectSQL = "SELECT * FROM `subject`";
$subjects = $crud->select($subjectSQL);


?>

<h2 class="text-center">Student Result</h2>
<h4 class="text-center">Pleace Click the button for result</h4>
<div>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <button style="font-size: 20px; font-family: arial; font-weight: bold;" class="btn btn-outline-success"
                type="button" id="subres">Subject Result</button> &nbsp;&nbsp;&nbsp;
            <button style="font-size: 20px; font-family: arial; font-weight: bold;" class="btn btn-outline-success"
                type="button" id="fullres">Full Result</button> &nbsp;&nbsp;&nbsp;
            <span><a class="btn btn-outline-success" style="font-size: 20px; font-family: arial; font-weight: bold;"  href="ad-student-result.php">Refresh Page</a></span>
        </form>
    </nav>
</div>
<!--== Subject Result ==-->
<div class="sb2-2-3" id="subjectresult">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Subject Result</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student Id</label>
                                <input type="text" value="" class="validate" required name="std_id"
                                    id="std-id-for-fees" style="font-size: 15px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student Name</label>
                                <input type="text" value="" class="validate" required name="std_name"
                                    id="std-name-for-fees" style="font-size: 15px;">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Class</label>
                                <select id="inputState" class="form-control" name="class" style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                    <option value="<?php echo $classe['name']; ?>">
                                        <?php echo $classe['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Session</label>
                                <select id="inputState" class="form-control" name="session" style="font-size: 15px;">
                                    <option selected disabled>---Choose Session---</option>
                                    <?php while($session = mysqli_fetch_assoc($sessions)){ ?>
                                    <option value="<?php echo $session['name']; ?>">
                                        <?php echo $session['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Subject </label>
                                <select id="inputState" class="form-control" name="subject" style="font-size: 15px;">
                                    <option selected disabled>---Choose Subject---</option>
                                    <?php while($subject = mysqli_fetch_assoc($subjects)){ ?>
                                    <option value="<?php echo $subject['name']; ?>">
                                        <?php echo $subject['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Exam </label>
                                <select id="inputState" class="form-control" name="exam" style="font-size: 15px;">
                                    <option selected disabled>---Choose Exam---</option>
                                    <?php while($exam = mysqli_fetch_assoc($exams)){ ?>
                                    <option value="<?php echo $exam['exam_name']; ?>">
                                        <?php echo $exam['exam_name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-button-input bg-info text-white"
                                    name="subject_result">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--== Full Result ==-->
<div class="sb2-2-3" id="fullresult">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Full Result</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student Id</label>
                                <input type="text" value="" class="validate" required name="std_id"
                                    id="std-id-for-feesn">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student Name</label>
                                <input type="text" value="" class="validate" required name="std_name"
                                    id="std-name-for-feesn" style="font-size: 15px;">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="">Class</label>
                                <select id="" class="form-control" name="class" style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php $classSQL = "SELECT * FROM `class`";
                                        $classes = $crud->select($classSQL); 
                                         while($classe = mysqli_fetch_assoc($classes)){ ?>
                                    <option value="<?php echo $classe['name']; ?>">
                                        <?php echo $classe['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Session</label>
                                <select id="inputState" class="form-control" name="session" style="font-size: 15px;">
                                    <option selected disabled>---Choose Session---</option>
                                    <?php 
                                        $sessionSQL = "SELECT * FROM `session`";
                                        $sessions = $crud->select($sessionSQL);
                                        while($session = mysqli_fetch_assoc($sessions)){ ?>
                                    <option value="<?php echo $session['name']; ?>">
                                        <?php echo $session['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Exam </label>
                                <select id="inputState" class="form-control" name="exam" style="font-size: 15px;">
                                    <option selected disabled>---Choose Exam---</option>
                                    <?php 
                                        $examSQL = "SELECT * FROM `exam_all`";
                                        $exams = $crud->select($examSQL);
                                         while($exam = mysqli_fetch_assoc($exams)){ ?>
                                    <option value="<?php echo $exam['exam_name']; ?>">
                                        <?php echo $exam['exam_name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-button-input bg-info text-white" name="full_result">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Show Result subject -->
 <?php

 if(isset($_POST['subject_result'])){
    extract($_POST);
    $SubjectResSQL= "SELECT * FROM `exam_marks` WHERE `student_id`='$std_id' AND `student_name`= '$std_name' AND `class_id`='$class' AND `session_id`='$session' AND `subject_id`='$subject' AND `exam_id`='$exam' ";
    $Subresults = $crud->select($SubjectResSQL);
    if($Subresults){ ?>
 <!-- // header("Location: ");
        echo "<script> location.replace('ad-sub-result-show.php'); </script>"; -->
 <h2>Subject Results</h2>
 <div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Subject Results</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover" id="stdResultsubject">
                            <thead>
                                <tr>
                                    <th>Std Id</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Class</th>
                                    <th>Session</th>
                                    <th>Exam</th>
                                    <th>Obtain Marks</th>
                                    <th>Total Marks</th>
                                    <th>Result</th>
                                    <th>Point</th>
                                    <th>Status</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($mark = mysqli_fetch_assoc($Subresults)){ ?>
                                <tr>
                                    <td><?php echo $mark['student_id']; ?></td>
                                    <td><?php echo $mark['student_name']; ?></td>
                                    <td><?php echo $mark['subject_id']; ?></td>
                                    <td><?php echo $mark['class_id']; ?></td>
                                    <td><?php echo $mark['session_id']; ?></td>
                                    <td><?php echo $mark['exam_id']; ?></td>
                                    <td><?php echo $mark['mark_obtained']; ?></td>
                                    <td><?php echo $mark['mark_total']; ?></td>
                                    <td><?php echo $mark['result']; ?></td>
                                    <td><?php echo $mark['point']; ?></td>
                                    <td>
                                        <?php if($mark['mark_obtained'] > 32){?>
                                        <span class="label label-success">Pass</span>
                                        <?php }else{?>
                                        <span class="label label-danger">Fail</span>

                                        <?php } ?>
                                    </td>
                                    <td><?php echo $mark['comment']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 <?php  } else{
       echo "not fund";
    }
 }
 ?>
<!-- End Subject Result -->
<!-- Show Result All -->
 <?php

 if(isset($_POST['full_result'])){
    extract($_POST);

    $allResSQL= "SELECT * FROM `exam_marks` WHERE `student_id`='$std_id' AND `student_name`= '$std_name' AND `class_id`='$class' AND `session_id`='$session'  AND `exam_id`='$exam' ";
    $allresults = $crud->select($allResSQL);
    $rows = mysqli_num_rows($allresults);
    if($allresults){ ?>
 <!-- // header("Location: ");
        echo "<script> location.replace('ad-sub-result-show.php'); </script>"; -->
 <h2>Full Results</h2>
 <div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Full Results</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover" id="stdResultall">
                            <thead>
                                <tr>
                                    <th>Std Id</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Class</th>
                                    <th>Session</th>
                                    <th>Exam</th>
                                    <th>Obtain Marks</th>
                                    <th>Total Marks</th>
                                    <th>Result</th>
                                    <th>Point</th>
                                    <th>Status</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $stdid;
                                $stdname;
                                $totalmarks = 0;
                                $obtainmarks = 0;
                                $totalpoint = 0;

                                 while($mark = mysqli_fetch_assoc($allresults)){ ?>
                                <tr>
                                    <td><?php $stdid=$mark['student_id']; 
                                    echo $mark['student_id']; ?></td>
                                    <td><?php $stdname = $mark['student_name'];;
                                     echo $mark['student_name']; ?></td>
                                    <td><?php echo $mark['subject_id']; ?></td>
                                    <td><?php echo $mark['class_id']; ?></td>
                                    <td><?php echo $mark['session_id']; ?></td>
                                    <td><?php echo $mark['exam_id']; ?></td>
                                    <td><?php $obtainmarks += $mark['mark_obtained'];
                                     echo $mark['mark_obtained']; ?></td>
                                    <td><?php $totalmarks += $mark['mark_total'];
                                     echo $mark['mark_total']; ?></td>
                                    <td><?php echo $mark['result']; ?></td>
                                    <td><?php  $totalpoint += $mark['point'];
                                     echo $mark['point']; ?></td>
                                    <td>
                                        <?php if($mark['mark_obtained'] > 32){?>
                                        <span class="label label-success">Pass</span>
                                        <?php }else{?>
                                        <span class="label label-danger">Fail</span>

                                        <?php } ?>
                                    </td>
                                    <td><?php echo $mark['comment']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Final Results</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover" id="">
                            <thead>
                                <tr>
                                    <th>Std Id</th>
                                    <th>Name</th>
                                    <th>Total marks</th>
                                    <th>Obtain Marks</th>
                                    <th> Point</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><?php echo $stdid; ?></td>
                                    <td><?php echo $stdname; ?></td>
                                    <td><?php echo  $totalmarks; ?></td>
                                    <td><?php echo  $obtainmarks; ?></td>
                                    <td><?php
                                     $point = $totalpoint/$rows;
                                     $point = round($point, 2);
                                     echo  $point;

                                      ?></td>
                                    <td><?php
                                       $grade =  $totalpoint/$rows;
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

                                       }
                                       
                                    
                                    ?></td>
                                
                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 <?php  } else{
       echo "not fund";
    }
 }
 ?>
<!-- End All Result -->




<script>
$(document).ready(function() {
    $("#subres").click(function() {
        $("#subjectresult").toggle();
    });

    $("#fullres").click(function() {
        $("#fullresult").toggle();
    });
});
</script>
<script>
$(document).ready(function() {
    $("#std-name-for-fees").focus(function() {
        var stdidfees = $("#std-id-for-fees").val();

        $.get("bind/stddata.php", {
            fid: stdidfees
        }, function(data) {
            //alert(data);
            $("#std-name-for-fees").val(data);
        });
    });
});
</script>
<script>
$(document).ready(function() {
    $("#std-name-for-feesn").focus(function() {
        var stdidfees = $("#std-id-for-feesn").val();

        $.get("bind/stddata.php", {
            fid: stdidfees
        }, function(data) {
            //alert(data);
            $("#std-name-for-feesn").val(data);
        });
    });
});
</script>


<script>
    $(document).ready(function() {
    $('#stdResultsubject').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
    } );
} );
    $(document).ready(function() {
    $('#stdResultall').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
    } );
} );
</script>