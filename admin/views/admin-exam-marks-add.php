<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

$sessionSQL = "SELECT * FROM `session`";
$sessions = $crud->select($sessionSQL);

$examSQL = "SELECT * FROM `exam_all`";
$exams = $crud->select($examSQL);

$subjectSQL = "SELECT * FROM `subject`";
$subjects = $crud->select($subjectSQL);

$gradeSQL = "SELECT * FROM `grade`";
$grades = $crud->select($gradeSQL);



if(isset($_POST['add_exam_marks'])){
    extract($_POST);
    $examMarksSQL = "INSERT INTO `exam_marks`(`student_id`, `student_name`, `subject_id`, `class_id`, `session_id`, `exam_id`, `mark_obtained`, `mark_total`, `result`, `point`, `comment`) VALUES ('$std_id', '$std_name','$subject','$class','$session','$exam','$marks_obtain','$total_marks', '$result','$point','$comments')";
    $addMarkd  = $crud->insert($examMarksSQL);

    if(isset($addMarkd)){
        echo "<h2 class='text-success'>Exam Mark Add Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Exam Mark Added Error, Please Try Again!!</h2>";
    }

 

}

?>

<!--== Seminar Details ==-->
<h1>Add Exam Marks</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add Exam Marks</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student ID</label>
                                <input type="text" value="" class="validate" required name="std_id" id="std-id-for-fees">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student name</label>
                                <input type="text" value="" class="validate" required name="std_name" id="std-name-for-fees">
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
                                <label for="inputState">Class</label>
                                <select id="inputState" class="form-control" name="class" style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                    <option value="<?php echo $classe['name']; ?>"><?php echo $classe['name']; ?>
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
                                <label for="inputState">Exam </label>
                                <select id="inputState" class="form-control" name="exam" style="font-size: 15px;">
                                    <option selected disabled>---Choose Exam---</option>
                                    <?php while($exam = mysqli_fetch_assoc($exams)){ ?>
                                    <option value="<?php echo $exam['exam_name']; ?>"><?php echo $exam['exam_name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col s12">
                                <label class="" >Marks Obtain</label>
                                <input type="number" value="" id="marksObtain" class="validate" required name="marks_obtain">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Marks Total</label>
                                <input type="number" value="" class="validate" required name="total_marks">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Result</label>
                                <input type="text" value="" id="marksres" class="validate" required name="result">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Point</label>
                                <input type="text" value="" id="markpoint" class="validate" required name="point">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Comments</label>
                                <input type="text" value="" class="validate" required name="comments">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="add_exam_marks"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {
    $("#marksres").focus(function(){
        var marks = $("#marksObtain").val();  
         var res;
        if (marks >= 80) {
            res = "A+";
        } 
        else if (marks >= 70) {
            res = "A";
        }
        else if (marks >= 60) {
            res = "A-";
        }
        else if (marks >= 50) {
            res = "B";
        }
        else if (marks >= 40) {
            res = "C";
        }
        else if (marks >= 33) {
            res = "D";
        } else {
            res = "F";

        }
        $("#marksres").val(res);
     });
});
</script>
<script>
    $(document).ready(function () {
        $("#markpoint").focus(function(){
           
        var point = $("#marksres").val(); 

            if (point == "A+") {
                ress = 5.00 ;
            } 
            else if (point == "A") {
                ress = 4.00 ;
            }
            else if (point == "A-") {
                ress = 3.50 ;
            }
            else if (point == "B") {
                ress = 3.00 ;
            }
            else if (point == "C") {
                ress = 2.00 ;
            }
            else if (point == "D") {
                ress = 1.00 ;
            } else {
                ress = 0.00 ;

            }
             $("#markpoint").val(ress);
        })
    });
</script>
<script>
$(document).ready(function () {
    $("#std-name-for-fees").focus(function(){
        var stdidfees = $("#std-id-for-fees").val();  
       
        $.get("bind/stddata.php",{ fid: stdidfees }, function(data){
            //alert(data);
            $("#std-name-for-fees").val(data);
        });
     });
});
</script>
