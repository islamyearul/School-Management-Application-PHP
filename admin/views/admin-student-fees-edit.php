<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

$sessionSQL = "SELECT * FROM `session`";
$sessions = $crud->select($sessionSQL);


if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $retID = $_GET['id'];
        $showfees = "SELECT * FROM `feescollection` WHERE id = $retID";
        $fees = $crud->select($showfees);
        $fee = mysqli_fetch_assoc($fees);
    }
}


if(isset($_POST['update_fees'])){
    extract($_POST);
    $updatefees =  "UPDATE `feescollection` SET `student_id`='$std_id',`student_name`='$std_name',`Class`='$class_id',`Session`='$session_id',`total_fees`='$total_fees',`PaidAmount`='$paid_ammount',`due_balance`='$due_balance',`Date`='$date',`Remarks`='$remarks' WHERE id = $up_id";
    $returnSMS = $crud->update($updatefees);
    if(isset($returnSMS)){
        echo "<h2 class='text-success'>Fees Update Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Fees Update Error, Please Try Again!!</h2>";
    }
}

?>

<!--== Seminar Details ==-->
<h1>Update Student Fees</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Update Fees</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student Id</label>
                                <input type="text" value="<?php echo $fee['student_id']; ?>" class="validate" required name="std_id" id="std-id-for-fees">
                            </div>
                        </div>
                        <input type="hidden" name="up_id" value="<?php echo $fee['id']; ?>">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student Name</label>
                                <input type="text" value="<?php echo $fee['student_name']; ?>" class="validate" required name="std_name" id="std-name-for-fees">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Class</label>
                                <select id="inputState" class="form-control" name="class_id"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                        <option value="<?php echo $classe['class_id']; ?>"
                                        <?php if($classe['class_id']==$fee['Class']){ echo "selected";} ?>><?php echo $classe['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Session</label>
                                <select id="inputState" class="form-control" name="session_id"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Session---</option>
                                    <?php while($session = mysqli_fetch_assoc($sessions)){ ?>
                                        <option value="<?php echo $session['session_id']; ?>"
                                        <?php if($session['session_id']==$fee['Session']){ echo "selected";} ?>><?php echo $session['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Total Fees</label>
                                <input type="text" value="<?php echo $fee['total_fees']; ?>" class="validate" required name="total_fees">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Paid Ammount</label>
                                <input type="text" value="<?php echo $fee['PaidAmount']; ?>" class="validate" required name="paid_ammount">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Due Balance</label>
                                <input type="text" value="<?php echo $fee['due_balance']; ?>" class="validate" required name="due_balance">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Date</label>
                                <input type="date" value="<?php echo $fee['Date']; ?>" class="validate" required name="date">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Remarks</label>
                                <input type="text" value="<?php echo $fee['Remarks']; ?>" class="validate" required name="remarks">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="update_fees"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {
    $("#std-name-for-fees").focus(function(){
        var stdidfees = $("#std-id-for-fees").val();  
       
        $.get("bind/stddata.php",{ fid: stdidfees }, function(data){
            //alert(data);
            $("#std-name-for-fees").val(data);
        });
     });
});
</script>