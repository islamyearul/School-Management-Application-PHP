<?php
$classSelectSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSelectSQL);

if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $d_id = $_GET['id'];
        $delDataSQL = "DELETE FROM `class` WHERE class_id = $d_id";
        $delSMS = $crud->delete($delDataSQL);
        if(isset($delSMS)){
            echo "<h2 class='text-success'>Class Delete Success</h2>";
        }else{
            echo "<h2 class='text-danger'>Class Delete Error, Please Try Again!!</h2>";
        }
    }
}


?>
<!--== Seminar Details ==-->
<h1>All Class</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>All Class</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>ID</th>
                                    <th>Class Name</th>
                                    <th>Class Name Numeric</th>
                                    <th>Teachers ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php  
                            $i = 1;                                    
                            while($class = mysqli_fetch_assoc($classes)){
                            ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $class['class_id']; ?></td>
                                    <td><?php echo $class['name']; ?></td>
                                    <td><?php echo $class['name_numeric']; ?> </td>
                                    <td><?php echo $class['teacher_id'] ?></td>
                                    <td>
                                        <a href="ad-class-edit.php?status=edit&&id=<?php echo $class['class_id'] ?>" class="ad-st-view bg-info">Edit</a>
                                        <a onclick="confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $class['class_id'] ?>" class="ad-st-view bg-danger">Delete</a>
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