<?php
$examAllSQL = "SELECT * FROM `exam_all_trash`";
$exams = $crud->select($examAllSQL);

if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $d_id = $_GET['id'];
        $delDataSQL = "DELETE FROM `exam_all` WHERE exam_id = $d_id";
        $delSMS = $crud->delete($delDataSQL);
        if(isset($delSMS)){
            echo "<h2 class='text-success'>Exams Delete Success</h2>";
        }else{
            echo "<h2 class='text-danger'>Exams Delete Error, Please Try Again!!</h2>";
        }
    }
}

?>
<!--== User Details ==-->
<h2>Trash Exam List</h2>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Trash Exams List and Time Table</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Trash Id</th>
                                    <th>Exam Id</th>
                                    <th>Exam Name</th>
                                    <th>Start Date</th>
                                    <th>Start Time</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; while($exam = mysqli_fetch_assoc($exams)){ ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $exam['trash_id']; ?></td>
                                    <td><?php echo $exam['exam_id']; ?></td>
                                    <td><?php echo $exam['exam_name']; ?></td>
                                    <td><?php echo $exam['start_date']; ?></td>
                                    <td><?php echo $exam['start_time']; ?></td>
                                    <td><?php echo $exam['duration']; ?></td>
                                    <td>
                                        <!-- <a href="ad-event-edit.php?status=edit&&id=<?php //echo $exam['exam_id'] ?>" class="ad-st-view bg-info">Edit</a> -->
                                        <a onclick="confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $exam['trash_id']; ?>" class="ad-st-view bg-danger">Delete</a>
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