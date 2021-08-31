<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

$sessionSQL = "SELECT * FROM `session`";
$sessions = $crud->select($sessionSQL);

$examSQL = "SELECT * FROM `exam_all`";
$exams = $crud->select($examSQL);

$subjectSQL = "SELECT * FROM `subject`";
$subjects = $crud->select($subjectSQL);

if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $retID = $_GET['id'];
        $showExamMarks = "SELECT * FROM `exam_marks` WHERE mark_id = $retID";
        $Marks = $crud->select($showExamMarks);
        $mark = mysqli_fetch_assoc($Marks);
    }
}
if(isset($_POST['update_exam_marks'])){
    extract($_POST);
    $subject = @$subject;
    $class = @$class;
    $session = @$session;

    $examMarksupSQL = "UPDATE `exam_marks` SET `student_id`='$std_id',`student_name`='$std_name',`subject_id`='$subject',`class_id`='$class',`session_id`='$session',`exam_id`='$exam',`mark_obtained`='$marks_obtain',`mark_total`='$total_marks', `result`='$result',`point`='$point',`comment`='$comments' WHERE mark_id = $up_id";
    $updateMarkd  = $crud->insert($examMarksupSQL);

    if(isset($updateMarkd)){
        echo "<h2 class='text-success'>Exam Mark Update Success</h2>";

    }else{
        echo "<h2 class='text-danger'>Exam Mark Update Error, Please Try Again!!</h2>";
    }
}
?>
<!--== Seminar Details ==-->
<h1>Update Exam Marks</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Update Exam Marks</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                            <div class=" col s12">
                                <label class="">Student ID</label>
                                <input type="text" value="<?php echo $mark['student_id']; ?>" class="validate" required name="std_id" id="std-id-for-fees">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student name</label>
                                <input type="text" value="<?php echo $mark['student_name']; ?>" class="validate" required name="std_name" id="std-name-for-fees">
                            </div>
                        </div>
                        <input type="hidden" name="up_id" value="<?php echo $mark['mark_id']; ?>">
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Subject </label>
                                <select id="inputState" class="form-control" name="subject" style="font-size: 15px;">
                                    <option selected disabled>---Choose Subject---</option>
                                    <?php while($subject = mysqli_fetch_assoc($subjects)){ ?>
                                    <option value="<?php echo $subject['name']; ?>" 
                                    <?php if($subject['name']==$mark['subject_id']){ echo "selected";} ?>>
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
                                    <option value="<?php echo $classe['name']; ?>"
                                    <?php if($classe['name']==$mark['class_id']){ echo "selected";} ?>><?php echo $classe['name']; ?>
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
                                    <option value="<?php echo $session['name']; ?>"
                                    <?php if($session['name']==$mark['session_id']){ echo "selected";} ?>>
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
                                    <option value="<?php echo $exam['exam_name']; ?>"
                                    <?php if($exam['exam_name']==$mark['exam_id']){ echo "selected";} ?>><?php echo $exam['exam_name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Marks Obtain</label>
                                <input type="number" id="marksObtain" value="<?php echo $mark['mark_obtained']; ?>" class="validate" required name="marks_obtain">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Marks Total</label>
                                <input type="number" value="<?php echo $mark['mark_total']; ?>" class="validate" required name="total_marks">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Result</label>
                                <input type="text" value="<?php echo $mark['result']; ?>" id="marksres" class="validate" required name="result">
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
                                <input type="text" value="<?php echo $mark['comment']; ?>" class="validate" required name="comments">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="update_exam_marks"></i>
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