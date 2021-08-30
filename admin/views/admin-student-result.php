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
                    <div class="table-responsive table-desi">
                        <form action="" method="post">
                            <div class="">
                                <div class=" col s12">
                                    <label class="">Student ID</label>
                                    <input type="text" value="" class="validate" required name="std_id">
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
                                    <select id="inputState" class="form-control" name="session"
                                        style="font-size: 15px;">
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
                                    <select id="inputState" class="form-control" name="subject"
                                        style="font-size: 15px;">
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
                            <div class="">
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
                    <div class="table-responsive table-desi">
                        <form action="" method="post">
                            <div class="">
                                <div class="form-group ">
                                    <label for="">Class</label>
                                    <select id="" class="form-control" name="class" style="font-size: 15px;">
                                        <option selected disabled>---Choose Class---</option>
                                        <?php $classSQL = "SELECT * FROM `class`";
                                        $classes = $crud->select($classSQL); 
                                         while($classe = mysqli_fetch_assoc($classes)){ ?>
                                        <option value="<?php echo $classe['class_id']; ?>">
                                            <?php echo $classe['name']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group ">
                                    <label for="inputState">Session</label>
                                    <select id="inputState" class="form-control" name="session"
                                        style="font-size: 15px;">
                                        <option selected disabled>---Choose Session---</option>
                                        <?php 
                                        $sessionSQL = "SELECT * FROM `session`";
                                        $sessions = $crud->select($sessionSQL);
                                        while($session = mysqli_fetch_assoc($sessions)){ ?>
                                        <option value="<?php echo $session['session_id']; ?>">
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
                                        <option value="<?php echo $exam['exam_id']; ?>">
                                            <?php echo $exam['exam_name']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="input-field col s12">
                                    <input type="submit" class="waves-button-input bg-info text-white"
                                        name="add_exam_marks">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Show Result -->
<?php



if(isset($_POST['subject_result'])){
    extract($_POST);
    $SubjectResSQL= "SELECT * FROM `exam_marks` WHERE `student_id`='$std_id' AND `class_id`='$class' AND `session_id`='$session' AND `subject_id`='$subject' AND `exam_id`='$exam' ";
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
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student Id</th>
                                    <th>Subject Id</th>
                                    <th>Class Id</th>
                                    <th>Session Id</th>
                                    <th>Exam Id</th>
                                    <th>Obtain Marks</th>
                                    <th>Total Marks</th>
                                    <th>Result</th>
                                    <th>Status</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($mark = mysqli_fetch_assoc($Subresults)){ ?>
                                <tr>
                                    <td><?php echo $mark['student_id']; ?></td>
                                    <td><?php echo $mark['subject_id']; ?></td>
                                    <td><?php echo $mark['class_id']; ?></td>
                                    <td><?php echo $mark['session_id']; ?></td>
                                    <td><?php echo $mark['exam_id']; ?></td>
                                    <td><?php echo $mark['mark_obtained']; ?></td>
                                    <td><?php echo $mark['mark_total']; ?></td>
                                    <td><?php echo $mark['result']; ?></td>
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