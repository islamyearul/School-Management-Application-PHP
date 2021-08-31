<?php

$examMarksQSQL = "SELECT * FROM `exam_marks`";
$marks = $crud->select($examMarksQSQL);

if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $d_id = $_GET['id'];
        $delDataSQL = "DELETE FROM `exam_marks` WHERE mark_id = $d_id";
        $delSMS = $crud->delete($delDataSQL);
        if(isset($delSMS)){
            echo "<h2 class='text-success'>Exams Marks Delete Success</h2>";
        }else{
            echo "<h2 class='text-danger'>Exams Marks Delete Error, Please Try Again!!</h2>";
        }
    }
}

?>
<!--== User Details ==-->
<h2>All Exam Marks</h2>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Exams Marks</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Marks Id</th>
                                    <th>Student Id</th>
                                    <th>Student Name</th>
                                    <th>Subject Id</th>
                                    <th>Class Id</th>
                                    <th>Session Id</th>
                                    <th>Exam Id</th>
                                    <th>Obtain Marks</th>
                                    <th>Total Marks</th>
                                    <th>Result</th>
                                    <th>Point</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; while($mark = mysqli_fetch_assoc($marks)){ ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $mark['mark_id']; ?></td>
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
                                    <td>
                                        <a href="ad-exam-marks-edit.php?status=edit&&id=<?php echo $mark['mark_id'] ?>" class="ad-st-view bg-info">Edit</a>
                                        <a onclick="confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $mark['mark_id']; ?>" class="ad-st-view bg-danger">Delete</a>
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