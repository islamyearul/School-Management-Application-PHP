<?php
    $showStudents = "SELECT * FROM `students`";
    $students =  $crud->select($showStudents);

    if(isset($_GET['status'])){
        if($_GET['status']=='delete'){
            $id = $_GET['id'];
            $delStudent = "DELETE FROM `students` WHERE std_id = $id";
            $delSMS = $crud->delete($delStudent);
            if($delSMS){
                echo $delSMS;
            }
    
        }
    }


?>

<!--== User Details ==-->
 <br><h2>All Student Details</h2><hr>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Student Details</h4>

                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover" id="studentallData">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Reg</th>
                                    <th>Class</th>
                                    <th>Ac Year</th>
                                    <th>Total Fees</th>
                                    <th>Advance Fees</th>
                                    <th>Balance</th>
                                    <th>Parent</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($student = mysqli_fetch_assoc($students)){ ?>
                                <tr>
                                    <td>
                                        <span class="list-img"><img src="upload/<?php echo $student['Photo'] ?>" alt=""></span>
                                    </td>
                                    <td><?php echo $student['std_id'] ?></td>
                                    <td><?php echo $student['FullName'] ?></td>
                                    <td><?php echo $student['Gender'] ?></td>
                                    <td><?php echo $student['DOB'] ?></td>
                                    <td><?php echo $student['RegNo'] ?></td>
                                    <td><?php echo $student['Class'] ?></td>
                                    <td><?php echo $student['AcademicYear'] ?></td>
                                    <td><?php echo $student['TotalFees'] ?></td>
                                    <td><?php echo $student['AdvanceFees'] ?></td>
                                    <td><?php echo $student['Balance'] ?></td>
                                    <td><?php echo $student['Parent'] ?></td>
                                    <td>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td>
                                        <a href="ad-student-edit.php?status=edit&&id=<?php echo $student['std_id']; ?>" class="ad-st-view bg-info">Edit</a>
                                        <a href="?status=delete&&id=<?php echo $student['std_id']; ?>" class="ad-st-view bd-danger">Delete</a>
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

<script>
    $(document).ready(function() {
    $('#studentallData').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
    } );
} );
</script>