<?php
$classRoutineSelectSQL = "SELECT * FROM `class_routine`";
$c_routines = $crud->select($classRoutineSelectSQL);

if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $d_id = $_GET['id'];
        $delDataSQL = "DELETE FROM `class_routine` WHERE id = $d_id";
        $delSMS = $crud->delete($delDataSQL);
        if(isset($delSMS)){
            echo "<h2 class='text-success'>Class Routine Delete Success</h2>";
        }else{
            echo "<h2 class='text-danger'>Class Routine Delete Error, Please Try Again!!</h2>";
        }
    }
}


?>
<!--== Seminar Details ==-->
<h1>All Class Routine</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>All Class Routine</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>ID</th>
                                    <th>Day</th>
                                    <th>1st Period(10:00-11:00)</th>
                                    <th>2nd Period(11:00-12:00)</th>
                                    <th>3rd Period(12:00-01:00)</th>
                                    <th>4th Period(02:00-03:00)</th>
                                    <th>5th Period(03:00-04:00)</th>
                                    <th>6th Period(04:00-05:00)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php  
                            $i = 1;                                    
                            while($croutine = mysqli_fetch_assoc($c_routines)){
                            ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $croutine['id']; ?></td>
                                    <td><?php echo $croutine['day']; ?></td>
                                    <td><?php echo $croutine['10:00-11:00']; ?> </td>
                                    <td><?php echo $croutine['11:00-12:00'] ?></td>
                                    <td><?php echo $croutine['12:00-01:00'] ?></td>
                                    <td><?php echo $croutine['02:00-03:00'] ?></td>
                                    <td><?php echo $croutine['03:00-04:00'] ?></td>
                                    <td><?php echo $croutine['04:00-05:00'] ?></td>
                                    <td>
                                        <a href="ad-class-routine-edit.php?status=edit&&id=<?php echo $croutine['id'] ?>" class="ad-st-view bg-info">Edit</a>
                                        <a onclick="confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $croutine['id'] ?>" class="ad-st-view bg-danger">Delete</a>
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