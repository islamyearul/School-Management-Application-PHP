
<?php

$showCourse = "SELECT * FROM `courses`";
$courses = $crud->select($showCourse);

$showFees = "SELECT * FROM `course_process_fees`";
$Fees = $crud->select($showFees);

$showtimes = "SELECT * FROM `course_time_table`";
$times = $crud->select($showtimes);

if(isset($_GET['status'])){
    if($_GET['status']=='delete-course'){
        $id = $_GET['id'];
        $delcourse = "DELETE FROM `courses` WHERE course_id = $id";
        $delSMS = $crud->delete($delcourse);
    } 
    elseif($_GET['status']=='delete-fees') {
        $id = $_GET['id'];
        $delfees = "DELETE FROM `course_process_fees` WHERE course_fees_id = $id";
        $delFeeSMS = $crud->delete($delfees);

    }
    elseif($_GET['status']=='delete-times') {
        $id = $_GET['id'];
        $deltimes = "DELETE FROM `course_time_table` WHERE course_time_id = $id";
        $delTimeSMS = $crud->delete($deltimes);

    }
}

if(isset($delSMS)){ 
    echo "<h2 class='text-danger'>Course Delete Success</h2>"; 
}
elseif(isset($delFeeSMS)){
    echo "<h2 class='text-danger'>Course Fees Delete Success</h2>"; 
}
elseif(isset($delTimeSMS)){
    echo "<h2 class='text-danger'>Course Time Delete Success</h2>"; 
}

?>

<!--== User Details ==-->
<br><h2>All Course Details</h2><hr>
<?php if(isset($delSMS)){ echo $delSMS; } ?>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Course Details</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Course Name</th>
                                    <th>Descrition</th>
                                    <th>Categories</th>
                                    <th>Seats</th>
                                    <th>Start From</th>
                                    <th>Contact Person</th>
                                    <th>Contact</th>
                                    <th>Contact Email</th>
                                    <th>Image</th>
                                    <th>Status</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php while($course = mysqli_fetch_assoc($courses)){ ?>
                                <tr>
                                    <td><?php echo $course['course_id'] ?></td>
                                    <td><?php echo $course['course_name'] ?></td>
                                    <td><?php echo $course['course_description'] ?></td>
                                    <td><?php echo $course['course_cat'] ?></td>
                                    <td><?php echo $course['course_seat'] ?></td>
                                    <td><?php echo $course['course_start_date'] ?></td>
                                    <td><?php echo $course['course_contact_person_name'] ?></td>
                                    <td><?php echo $course['course_contact_person_phone'] ?></td>
                                    <td><?php echo $course['course_contact_email'] ?></td>
                                    <td>
                                        <img src="upload/<?php echo $course['course_image'] ?>" alt="" style="width: 100px;">
                                    </td>
                                    <td>
                                        <?php if($course['course_status']=='Active'){ ?>
                                        <span class="label label-success">Active</span> 
                                        <?php }else {?>
                                        <span class="label label-danger">Inactive</span>
                                        <?php }?>
                                    </td>
                                    <td>
                                        <a href="?status=delete-course&&id=<?php echo $course['course_id']; ?>" class="ad-st-view bg-danger" onclick="confirm('Are You Sure?')">Delete</a>
                                        <a href="ad-edit-course.php?status=edit-course&&id=<?php echo $course['course_id'] ?>" class="ad-st-view bg-info">Edit</a>
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
<!--== User Details ==-->
<br><br><hr>
<h1>Course Process And Fees</h1>

<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Course Fees</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>1st Term Fees</th>
                                    <th>2nd Term Fees</th>
                                    <th>3rd Term Fees</th>
                                    <th>4th Term Fees</th>
                                    <th>Fees Descrition</th>
                                    <th>Step 1 Process</th>
                                    <th>Step 2 Process</th>
                                    <th>Step 3 Process</th>
                                    <th>Step 4 Process</th>
                                    <th>Step 5 Process</th>
                                    <th>Course ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php while($fee = mysqli_fetch_assoc($Fees)){ ?>
                                <tr>
                                    <td><?php echo $fee['course_fees_id'] ?></td>
                                    <td><?php echo $fee['first_term_fee'] ?></td>
                                    <td><?php echo $fee['second_term_fee'] ?></td>
                                    <td><?php echo $fee['third_term_fee'] ?></td>
                                    <td><?php echo $fee['forth_term_fee'] ?></td>
                                    <td><?php echo $fee['fees_description'] ?></td>
                                    <td><?php echo $fee['step_1_des'] ?></td>
                                    <td><?php echo $fee['step_2_des'] ?></td>
                                    <td><?php echo $fee['step_3_des'] ?></td>
                                    <td><?php echo $fee['step_4_des'] ?></td>
                                    <td><?php echo $fee['step_5_des'] ?></td>
                                    <td><?php echo $fee['course_id'] ?></td>
                                    <td>
                                    <a href="?status=delete-fees&&id=<?php echo $fee['course_fees_id']; ?>" class="ad-st-view bg-danger" onclick="confirm('Are You Sure?')">Delete</a>
                                        <a href="ad-edit-course_fees.php?status=edit-fees&&id=<?php echo $fee['course_fees_id'] ?>" class="ad-st-view bg-info">Edit</a>
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
<!--== User Details ==-->
<br><br><hr>
<h1>Course Time Table</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Course Time Table</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>1st Semister Name</th>
                                    <th>1st Semister Descrition</th>
                                    <th>2nd Semister Name</th>
                                    <th>2nd Semister Descrition</th>
                                    <th>3rd Semister Name</th>
                                    <th>3rd Semister Descrition</th>
                                    <th>4th Semister Name</th>
                                    <th>4th Semister Descrition</th>
                                    <th>Course ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php while($time = mysqli_fetch_assoc($times)){ ?>
                                <tr>
                                    <td><?php echo $time['course_time_id'] ?></td>
                                    <td><?php echo $time['1st_sem_name'] ?></td>
                                    <td><?php echo $time['1st_sem_des'] ?></td>
                                    <td><?php echo $time['2nd_sem_name'] ?></td>
                                    <td><?php echo $time['2nd_sem_des'] ?></td>
                                    <td><?php echo $time['3rd_sem_name'] ?></td>
                                    <td><?php echo $time['3rd_sem_des'] ?></td>
                                    <td><?php echo $time['4th_sem_name'] ?></td>
                                    <td><?php echo $time['4th_sem_des'] ?></td>
                                    <td><?php echo $time['course_id'] ?></td>

                                    <td>
                                    <a href="?status=delete-times&&id=<?php echo $time['course_time_id']; ?>" class="ad-st-view bg-danger" onclick="confirm('Are You Sure?')">Delete</a>
                                    <a href="ad-edit-course_time.php?status=edit-times&&id=<?php echo $time['course_time_id'] ?>" class="ad-st-view bg-info">Edit</a>
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