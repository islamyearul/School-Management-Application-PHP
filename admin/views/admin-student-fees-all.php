<?php
$feesSelectSQL = "SELECT * FROM `feescollection`";
$fees = $crud->select($feesSelectSQL);

if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $d_id = $_GET['id'];
        $delDataSQL = "DELETE FROM `feescollection` WHERE id = $d_id";
        $delSMS = $crud->delete($delDataSQL);
        if(isset($delSMS)){
            echo "<h2 class='text-success'>Fees Delete Success</h2>";
        }else{
            echo "<h2 class='text-danger'>Fees Delete Error, Please Try Again!!</h2>";
        }
    }
}


?>
<!--== Seminar Details ==-->
<h1>All Fees Table</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                <h4 class="text-center">All Fees</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover" id="example">
                       
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>ID</th>
                                    <th>student_id</th>
                                    <th>student_name</th>
                                    <th>Class</th>
                                    <th>Session</th>
                                    <th>Fees cat</th>
                                    <th>Prev Due</th>
                                    <th>Curent Fees</th>
                                    <th>total_fees</th>
                                    <th>PaidAmount</th>
                                    <th>due_balance</th>
                                    <th>Date</th>
                                    <th>Receipt</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php  
                            $i = 1;                                    
                            while($fee = mysqli_fetch_assoc($fees)){
                            ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $fee['id']; ?></td>
                                    <td><?php echo $fee['student_id']; ?></td>
                                    <td><?php echo $fee['student_name']; ?></td>
                                    <td><?php echo $fee['Class']; ?></td>
                                    <td><?php echo $fee['Session']; ?></td>
                                    <td><?php echo $fee['fees_cat']; ?></td>
                                    <td><?php echo $fee['due_fees']; ?></td>
                                    <td><?php echo $fee['current_fees']; ?></td>
                                    <td><?php echo $fee['total_fees']; ?></td>
                                    <td><?php echo $fee['PaidAmount']; ?></td>
                                    <td><?php echo $fee['due_balance']; ?></td>
                                    <td><?php echo $fee['Date']; ?></td>
                                    <td><?php echo $fee['receipt_no']; ?></td>
                                    <td><?php echo $fee['Remarks']; ?></td>

                                    <td>
                                        <a href="ad-student-fees-edit.php?status=edit&&id=<?php echo $fee['id'] ?>" class="ad-st-view bg-info">Edit</a>
                                        <a onclick="confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $fee['id'] ?>" class="ad-st-view bg-danger">Delete</a>
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
//     $(document).ready(function() {
//     var table = $('#example').DataTable( {
//         lengthChange: false,
//         buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
//     } );
 
//     table.buttons().container()
//         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
// } );
</script>

<script>
    $(document).ready(function() {
    $('#example').DataTable( {
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