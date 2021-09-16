<?php

// $classSQL = "SELECT * FROM `class`";
// $classes = $crud->select($classSQL);

// $studentQL = "SELECT * FROM `students`";
// $students = $crud->select($studentQL);

// $sessionSQL = "SELECT * FROM `session`";
// $sessions = $crud->select($sessionSQL);

// $examSQL = "SELECT * FROM `exam_all`";
// $exams = $crud->select($examSQL);

// $subjectSQL = "SELECT * FROM `subject`";
// $subjects = $crud->select($subjectSQL);



?>

<!--SECTION START-->

<!--== Full Result ==-->
<div class="sb2-2-3" id="fullresult">
    <div class="row">
        <div class="col-md-12">
            <div class="px-5">
                <div class="inn-title">
                    <h4>Result</h4>
                </div>
                <form action="views/std-result-report.php" method="post">
                    <div class="row">
                        <div class=" col s12">
                            <label class="">Student Id</label>
                            <input type="text" value="" class="validate" required name="std_id" id="std-id-for-feesn"
                                style="font-size: 15px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col s12">
                            <label class="">Student Name</label>
                            <input type="text" value="" class="validate" required name="std_name"
                                id="std-name-for-feesn" style="font-size: 15px;" readonly>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group ">
                            <label for="">Class</label>
                            <select id="std-class" class="" name="class" style="font-size: 15px;">
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
                            <label for="std-session">Session</label>
                            <select id="std-session" class="" name="session" style="font-size: 15px;">
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
                            <label for="std-exam">Exam </label>
                            <select id="std-exam" class="" name="exam" style="font-size: 15px;">
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
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Check Result"
                                name="full_result" id="check-res">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Show Result All -->
<?php

if(isset($_POST['full_result'])){

//     $allResSQL= "SELECT * FROM `exam_marks` WHERE `student_id`='$Stid' AND `student_name`= '$Stname' AND `class_id`='$Stclass' AND `session_id`='$Stsession'  AND `exam_id`='$Stidexam' ";
//    $allresults = $crud->select($allResSQL);
    
//    $rows = mysqli_num_rows($allresults);

//     if( $rows > 0){
       // header("Location: views/std-result-report.php");
        //echo "<script> location.replace('std-result-report.php'); </script>";
        //echo "ok";


    } else {
               
        //echo "alert('Data Not Found')";
       // echo "no";
    }
//    extract($_POST);
   //print_r($_POST);
?>
<!-- End All Result -->


<script>
$(document).ready(function() {
    $("#std-name-for-feesn").focus(function() {
        var stdidfees = $("#std-id-for-feesn").val();

        $.get("admin/bind/stddata.php", {
            fid: stdidfees
        }, function(data) {
            //alert(data);
            $("#std-name-for-feesn").val(data);
        });
    });
});
</script>