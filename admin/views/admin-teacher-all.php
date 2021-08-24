<?php

$viewTeachers ="SELECT * FROM `teachers` ";
$teachers = $crud->select($viewTeachers);

if(isset($_GET['status'])){
    if($_GET['status']== 'delete'){
        $id = $_GET['id'];
        $deletedata = "DELETE FROM `teachers` WHERE teachers_id = $id";
       $deleteSMS =  $crud->delete($deletedata);
    }
}

if(isset($deleteSMS)){
    echo $deleteSMS;
}


?>


<!--== Teacher Details ==-->
<h1>All Teachers</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Teachers Details</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr >
                                    <th>Image</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>Joining Date</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php while($teacher = mysqli_fetch_assoc($teachers)) { ?>


                                <tr>
                                    <td><span class="list-img"><img src="upload/<?php echo $teacher['teachers_image']; ?>" alt=""></span></td>
                                    <td><?php echo $teacher['teachers_id']; ?></td>
                                    <td><?php echo $teacher['teachers_name']; ?></td>
                                    <td><?php echo $teacher['teachers_email']; ?></td>
                                    <td><?php echo $teacher['teachers_mobile']; ?></td>
                                    <td><?php echo $teacher['teachers_gender']; ?></td>
                                    <td><?php echo $teacher['teachers_joining_date']; ?></td>
                                    <td><?php echo $teacher['teachers_subject']; ?></td>
                                    <td>
                                        <?php if($teacher['teachers_status'] == 'Active'){?>
                                           <span class="label label-success">Active</span>
                                        <?php }else{?>
                                            <span class="label label-danger">Inactive</span>

                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="ad-teacher-edit.php?status=edit&&id=<?php echo $teacher['teachers_id']; ?>" class="btn btn-success text-white" style="padding: 10px;">Edit</a>
                                        <a onclick="return confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $teacher['teachers_id']; ?>" class="btn btn-danger text-white" style="padding: 10px;">Delete</a>
                                    </td>
                                    <!-- <td><a href="admin-student-details.html" class="ad-st-view">View</a></td> -->
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