<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

$studentQL = "SELECT * FROM `students`";
$students = $crud->select($studentQL);

$sessionSQL = "SELECT * FROM `session`";
$sessions = $crud->select($sessionSQL);

$examSQL = "SELECT * FROM `exam_all`";
$exams = $crud->select($examSQL);

$subjectSQL = "SELECT * FROM `subject`";
$subjects = $crud->select($subjectSQL);



?>

<h2 class="text-center">Student Fees Check</h2>
<h4 class="text-center">Pleace Click the button for Check</h4>
<div>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <button style="font-size: 20px; font-family: arial; font-weight: bold;" class="btn btn-outline-success"
                type="button" id="subres">Check Full Class</button> &nbsp;&nbsp;&nbsp;
            <button style="font-size: 20px; font-family: arial; font-weight: bold;" class="btn btn-outline-success"
                type="button" id="fullres">Check Single Student</button> &nbsp;&nbsp;&nbsp;
            <span><a class="btn btn-outline-success" style="font-size: 20px; font-family: arial; font-weight: bold;"
                    href="ad-student-fees-check.php">Refresh Page</a></span>
        </form>
    </nav>
</div>
<!--== Subject Result ==-->
<div class="sb2-2-3" id="subjectresult">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Check Full Class</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">

                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Class</label>
                                <select id="inputState" class="form-control" name="class" style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                    <option value="<?php echo $classe['name']; ?>">
                                        <?php echo $classe['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Session</label>
                                <select id="inputState" class="form-control" name="session" style="font-size: 15px;">
                                    <option selected disabled>---Choose Session---</option>
                                    <?php while($session = mysqli_fetch_assoc($sessions)){ ?>
                                    <option value="<?php echo $session['name']; ?>">
                                        <?php echo $session['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-button-input bg-info text-white" name="check-all">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--== Full Result ==-->
<div class="sb2-2-3" id="fullresult">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Check Single Student</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student Id</label>
                                <input type="text" value="" class="validate" required name="std_id"
                                    id="std-id-for-feesn" style="font-size: 15px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student Name</label>
                                <input type="text" value="" class="validate" required name="std_name"
                                    id="std-name-for-feesn" style="font-size: 15px;">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="">Class</label>
                                <select id="" class="form-control" name="class" style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php $classSQL = "SELECT * FROM `class`";
                                        $classes = $crud->select($classSQL); 
                                         while($classe = mysqli_fetch_assoc($classes)){ ?>
                                    <option value="<?php echo $classe['name']; ?>">
                                        <?php echo $classe['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Session</label>
                                <select id="inputState" class="form-control" name="session" style="font-size: 15px;">
                                    <option selected disabled>---Choose Session---</option>
                                    <?php 
                                        $sessionSQL = "SELECT * FROM `session`";
                                        $sessions = $crud->select($sessionSQL);
                                        while($session = mysqli_fetch_assoc($sessions)){ ?>
                                    <option value="<?php echo $session['name']; ?>">
                                        <?php echo $session['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-button-input bg-info text-white"
                                    name="single_student">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Show Result subject -->
<?php

 if(isset($_POST['check-all'])){
    extract($_POST);
    
    $checkclassfeesSQL= "SELECT * FROM `feescollection` WHERE  `Class`='$class' AND `Session`='$session'";
    $feeallresults = $crud->select($checkclassfeesSQL);

    if($feeallresults){ ?>



<!-- // header("Location: ");
        echo "<script> location.replace('ad-sub-result-show.php'); </script>"; -->
<h2>full class fees check</h2>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Class Fees Results</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover" id="feesdataprintclass">
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
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i = 1;                                     
                                    $totalfees =0;
                                    $paidfees = 0;
                                    $duefeees; 
                                    

                                    while($classfees = mysqli_fetch_assoc($feeallresults)){
                                       
                                    $totalfees += $classfees['current_fees'];
                                    $paidfees += $classfees['PaidAmount'];              
                                    
                                    ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $classfees['id']; ?></td>
                                    <td><?php echo $classfees['student_id']; ?></td>
                                    <td><?php echo $classfees['student_name']; ?></td>
                                    <td><?php echo $classfees['Class']; ?></td>
                                    <td><?php echo $classfees['Session']; ?></td>
                                    <td><?php echo $classfees['fees_cat']; ?></td>
                                    <td><?php echo $classfees['due_fees']; ?></td>
                                    <td><?php echo $classfees['current_fees']; ?></td>
                                    <td><?php echo $classfees['total_fees']; ?></td>
                                    <td><?php echo $classfees['PaidAmount']; ?></td>
                                    <td><?php echo $classfees['due_balance']; ?></td>
                                    <td><?php echo $classfees['Date']; ?></td>
                                    <td><?php echo $classfees['Remarks']; ?></td>
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
<div class="row py-5">
    <div class="col-md-12">
        <h3 class="text-center">Ammount Summery</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Total</th>
                    <th>Paid</th>
                    <th>Due</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $totalfees ; ?></td>
                    <td><?php echo $paidfees ; ?></td>
                    <td><?php $duefeees =  $totalfees - $paidfees;
                        echo $duefeees ; ?></td>
                </tr>
            </tbody>

        </table>
    </div>
</div>
<?php  } else{
       echo "not fund";
    }
 }
 ?>
<!-- End Subject Result -->
<!-- Show Single Student Res -->
<?php

 if(isset($_POST['single_student'])){
    extract($_POST);

    $stdfSQL= "SELECT * FROM `feescollection` WHERE `student_id`='$std_id' AND `student_name`= '$std_name' AND `Class`='$class' AND `Session`='$session'";
    $stdfeeses = $crud->select($stdfSQL);
 
    if($stdfeeses){    @$rows = mysqli_num_rows($stdfeeses);  ?>
    
<!-- // header("Location: ");
        echo "<script> location.replace('ad-sub-result-show.php'); </script>"; -->
<h2>Single Student Fees</h2>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Student Fees</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover" id="feesdataprintstd">
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
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i = 1;                                     
                                    $totalfees =0;
                                    $paidfees = 0;
                                    $duefeees; 
                                    

                                    while($stdfees = mysqli_fetch_assoc($stdfeeses)){
                                       
                                    $totalfees += $stdfees['current_fees'];
                                    $paidfees += $stdfees['PaidAmount'];              
                                    
                                    ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $stdfees['id']; ?></td>
                                    <td><?php echo $stdfees['student_id']; ?></td>
                                    <td><?php echo $stdfees['student_name']; ?></td>
                                    <td><?php echo $stdfees['Class']; ?></td>
                                    <td><?php echo $stdfees['Session']; ?></td>
                                    <td><?php echo $stdfees['fees_cat']; ?></td>
                                    <td><?php echo $stdfees['due_fees']; ?></td>
                                    <td><?php echo $stdfees['current_fees']; ?></td>
                                    <td><?php echo $stdfees['total_fees']; ?></td>
                                    <td><?php echo $stdfees['PaidAmount']; ?></td>
                                    <td><?php echo $stdfees['due_balance']; ?></td>
                                    <td><?php echo $stdfees['Date']; ?></td>
                                    <td><?php echo $stdfees['Remarks']; ?></td>
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
<div class="row py-5">
    <div class="col-md-12">
        <h3 class="text-center">Ammount Summery</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Total</th>
                    <th>Paid</th>
                    <th>Due</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $totalfees ; ?></td>
                    <td><?php echo $paidfees ; ?></td>
                    <td><?php $duefeees =  $totalfees - $paidfees;
                        echo $duefeees ; ?></td>
                </tr>
            </tbody>

        </table>
    </div>
</div>
<?php  } else{
       echo "not fund";
    }
 }
 ?>
<!-- End All Result -->




<script>
$(document).ready(function() {
    $("#subres").click(function() {
        $("#subjectresult").toggle();
    });

    $("#fullres").click(function() {
        $("#fullresult").toggle();
    });
});
</script>
<script>
$(document).ready(function() {
    $("#std-name-for-fees").focus(function() {
        var stdidfees = $("#std-id-for-fees").val();

        $.get("bind/stddata.php", {
            fid: stdidfees
        }, function(data) {
            //alert(data);
            $("#std-name-for-fees").val(data);
        });
    });
});
</script>
<script>
$(document).ready(function() {
    $("#std-name-for-feesn").focus(function() {
        var stdidfees = $("#std-id-for-feesn").val();

        $.get("bind/stddata.php", {
            fid: stdidfees
        }, function(data) {
            //alert(data);
            $("#std-name-for-feesn").val(data);
        });
    });
});
</script>


<script>
    $(document).ready(function() {
    $('#feesdataprintclass').DataTable( {
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
    $(document).ready(function() {
    $('#feesdataprintstd').DataTable( {
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