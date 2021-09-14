<div class="udb-sec udb-prof">
    <h4><img src="assets/images/icon/db1.png" alt="" />My Profile</h4>
    <p>It is a long established fact that a reader will be distracted by the readable content of a
        page when looking at its layout. The point of using Lorem Ipsum is that it has a
        more-or-less normal distribution of letters, as opposed
        to using 'Content here, content here', making it look like readable English.</p>
</div>
<?php
$examAllSQL = "SELECT * FROM `exam_all`";
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
<h2>All Exam List</h2>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Exams List and Time Table</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Exam Id</th>
                                    <th>Exam Name</th>
                                    <th>Start Date</th>
                                    <th>Start Time</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; while($exam = mysqli_fetch_assoc($exams)){ ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $exam['exam_id']; ?></td>
                                    <td><?php echo $exam['exam_name']; ?></td>
                                    <td><?php echo $exam['start_date']; ?></td>
                                    <td><?php echo $exam['start_time']; ?></td>
                                    <td><?php echo $exam['duration']; ?></td>

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