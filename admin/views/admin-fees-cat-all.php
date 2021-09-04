<?php
$feescatSelectSQL = "SELECT * FROM `all_class_fees_table`";
$feeses = $crud->select($feescatSelectSQL);

if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $d_id = $_GET['id'];
        $delDataSQL = "DELETE FROM `all_class_fees_table` WHERE all_class_fees_id = $d_id";
        $delSMS = $crud->delete($delDataSQL);
        if(isset($delSMS)){
            echo "<h2 class='text-success'>Fees Category Delete Success</h2>";
        }else{
            echo "<h2 class='text-danger'>Fees Category Delete Error, Please Try Again!!</h2>";
        }
    }
}

?>
<!--== Seminar Details ==-->
<h1>All Fees Category</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>All Fees Category</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>ID</th>
                                    <th>Class</th>
                                    <th>Year</th>
                                    <th>admission_fees</th>
                                    <th>session_feesr</th>
                                    <th>seminar_fee</th>
                                    <th>event_fee</th>
                                    <th>january_salary</th>
                                    <th>february_salary</th>
                                    <th>march_salary</th>
                                    <th>afril_salary</th>
                                    <th>first_terminal_exam_fees</th>
                                    <th>may_salary</th>
                                    <th>june_salary</th>
                                    <th>july_salary</th>
                                    <th>august_salary</th>
                                    <th>mid_terminal_exam_fees</th>
                                    <th>september_salary</th>
                                    <th>october_salary</th>
                                    <th>november_salary</th>
                                    <th>december_salary</th>
                                    <th>final_exam_fees</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php  
                            $i = 1;                                    
                            while($fee = mysqli_fetch_assoc($feeses)){
                            ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $fee['all_class_fees_id']; ?></td>
                                    <td><?php echo $fee['class']; ?></td>
                                    <td><?php echo $fee['year']; ?></td>
                                    <td><?php echo $fee['admission_fees']; ?></td>
                                    <td><?php echo $fee['session_fees']; ?></td>
                                    <td><?php echo $fee['seminar_fee']; ?></td>
                                    <td><?php echo $fee['event_fee']; ?></td>
                                    <td><?php echo $fee['january_salary']; ?></td>
                                    <td><?php echo $fee['february_salary']; ?></td>
                                    <td><?php echo $fee['march_salary']; ?></td>
                                    <td><?php echo $fee['afril_salary']; ?></td>
                                    <td><?php echo $fee['first_terminal_exam_fees']; ?></td>
                                    <td><?php echo $fee['may_salary']; ?></td>
                                    <td><?php echo $fee['june_salary']; ?></td>
                                    <td><?php echo $fee['july_salary']; ?></td>
                                    <td><?php echo $fee['august_salary']; ?></td>
                                    <td><?php echo $fee['mid_terminal_exam_fees']; ?></td>
                                    <td><?php echo $fee['september_salary']; ?></td>
                                    <td><?php echo $fee['october_salary']; ?></td>
                                    <td><?php echo $fee['november_salary']; ?></td>
                                    <td><?php echo $fee['december_salary']; ?></td>
                                    <td><?php echo $fee['final_exam_fees']; ?></td>
                        
                                    <td>
                                        <a href="ad-fees-cat-edit.php?status=edit&&id=<?php echo $fee['all_class_fees_id'] ?>" class="ad-st-view bg-info">Edit</a>
                                        <a onclick="return confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $fee['all_class_fees_id'] ?>" class="ad-st-view bg-danger">Delete</a>
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