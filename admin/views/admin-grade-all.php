<?php
$gradeSelectSQL = "SELECT * FROM `grade`";
$grades = $crud->select($gradeSelectSQL);

if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $d_id = $_GET['id'];
        $delDataSQL = "DELETE FROM `grade` WHERE grade_id = $d_id";
        $delSMS = $crud->delete($delDataSQL);
        if(isset($delSMS)){
            echo "<h2 class='text-success'>Grade Delete Success</h2>";
        }else{
            echo "<h2 class='text-danger'>Grade Delete Error, Please Try Again!!</h2>";
        }
    }
}


?>
<!--== Seminar Details ==-->
<h1>All Grade Details</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>All Grade</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>ID</th>
                                    <th>Grade Name</th>
                                    <th>Grade Point</th>
                                    <th>Number From</th>
                                    <th>Number Upto</th>
                                    <th>Comments</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php  
                            $i = 1;                                    
                            while($grade = mysqli_fetch_assoc($grades)){
                            ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $grade['grade_id']; ?></td>
                                    <td><?php echo $grade['name']; ?></td>
                                    <td><?php echo $grade['grade_point']; ?> </td>
                                    <td><?php echo $grade['mark_from'] ?></td>
                                    <td><?php echo $grade['mark_upto'] ?></td>
                                    <td><?php echo $grade['comment'] ?></td>
                                    <td>
                                        <a href="ad-grade-edit.php?status=edit&&id=<?php echo $grade['grade_id'] ?>" class="ad-st-view bg-info">Edit</a>
                                        <a onclick="confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $grade['grade_id'] ?>" class="ad-st-view bg-danger">Delete</a>
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