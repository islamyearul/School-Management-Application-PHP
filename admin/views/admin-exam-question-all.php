<?php

$examAllQSQL = "SELECT * FROM `examquestion`";
$examqs = $crud->select($examAllQSQL);

if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $d_id = $_GET['id'];
        $delDataSQL = "DELETE FROM `examquestion` WHERE examquestion_id = $d_id";
        $delSMS = $crud->delete($delDataSQL);
        if(isset($delSMS)){
            echo "<h2 class='text-success'>Exams Question Delete Success</h2>";
        }else{
            echo "<h2 class='text-danger'>Exams Question Delete Error, Please Try Again!!</h2>";
        }
    }
}

?>
<!--== User Details ==-->
<h2>All Exam Question</h2>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Exams Questions</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Exam Q Id</th>
                                    <th>Subject Id</th>
                                    <th>Exam Id</th>
                                    <th>Class Id</th>
                                    <th>Teacher Id</th>
                                    <th>Session Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>File Name</th>
                                    <th>File Type</th>
                                    <th>Date  & Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; while($exam = mysqli_fetch_assoc($examqs)){ ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $exam['examquestion_id']; ?></td>
                                    <td><?php echo $exam['subject']; ?></td>
                                    <td><?php echo $exam['exam']; ?></td>
                                    <td>
                                        <?php 
                                        $id = $exam['class'];
                                        $classSQL = "SELECT * FROM `class` WHERE class_id = $id";
                                        $classes = $crud->select($classSQL);
                                        $class = mysqli_fetch_assoc($classes);
                                        echo $class['name'];
                                         ?>
                                    </td>
                                    <td><?php echo $exam['teachers']; ?></td>
                                    <td><?php echo $exam['session']; ?></td>
                                    <td><?php echo $exam['title']; ?></td>
                                    <td><?php echo $exam['description']; ?></td>
                                    <td><?php echo $exam['file_name']; ?></td>
                                    <td><?php echo $exam['file_type']; ?></td>
                                    <td><?php echo $exam['timestamp']; ?></td>
                                    <td>
                                        <?php if($exam['status'] == 'Approved'){?>
                                           <span class="label label-success">Approved</span>
                                        <?php }else{?>
                                            <span class="label label-danger">Inapprove</span>

                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="ad-exam-question-edit.php?status=edit&&id=<?php echo $exam['examquestion_id'] ?>" class="ad-st-view bg-info">Edit</a>
                                        <a onclick="confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $exam['examquestion_id']; ?>" class="ad-st-view bg-danger">Delete</a>
                                   </td>
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