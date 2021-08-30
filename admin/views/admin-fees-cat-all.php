<?php
$subjectSelectSQL = "SELECT * FROM `subject`";
$subjects = $crud->select($subjectSelectSQL);

if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $d_id = $_GET['id'];
        $delDataSQL = "DELETE FROM `subject` WHERE subject_id = $d_id";
        $delSMS = $crud->delete($delDataSQL);
        if(isset($delSMS)){
            echo "<h2 class='text-success'>subject Delete Success</h2>";
        }else{
            echo "<h2 class='text-danger'>subject Delete Error, Please Try Again!!</h2>";
        }
    }
}

?>
<!--== Seminar Details ==-->
<h1>All Subject</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>All Subject</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Subject ID</th>
                                    <th>Subject Name</th>
                                    <th>Class ID</th>
                                    <th>Teachers ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php  
                            $i = 1;                                    
                            while($subject = mysqli_fetch_assoc($subjects)){
                            ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $subject['subject_id']; ?></td>
                                    <td><?php echo $subject['name']; ?></td>
                                    <td>
                                        <?php $sub= $subject['class_id'];
                                        $ClsSQL ="SELECT * FROM `class` WHERE class_id = $sub";
                                        $Clss = $crud->select($ClsSQL);
                                        $cls = mysqli_fetch_assoc($Clss);
                                        if($cls){
                                            echo $cls['name'];
                                        }

                                         ?> 
                                    </td>
                                    <td>
                                        <?php 
                                        $tcher = $subject['teacher_id'] ;
                                        $tcherSQL ="SELECT * FROM `teachers` WHERE teachers_id = $tcher";
                                        $tchs = $crud->select($tcherSQL);
                                        $tch = mysqli_fetch_assoc($tchs);
                                        if($cls){
                                            echo $tch['teachers_name'];
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <a href="ad-subject-edit.php?status=edit&&id=<?php echo $subject['subject_id'] ?>" class="ad-st-view bg-info">Edit</a>
                                        <a onclick="return confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $subject['subject_id'] ?>" class="ad-st-view bg-danger">Delete</a>
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