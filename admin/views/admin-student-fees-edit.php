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
    $class_id = strtolower($class_id);
    $updatefees =  "UPDATE `feescollection` SET `student_id`='$std_id',`student_name`='$std_name',`Class`='$class_id',`Session`='$session_id',`fees_cat`='$feescat',`due_fees`='$due_fees',`current_fees`='$curent_fees',`total_fees`='$total_fees',`PaidAmount`='$paid_ammount',`due_balance`='$due_balance',`Date`='$date',`receipt_no`='$receipt',`Remarks`='$remarks' WHERE id = $up_id";
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
                                <input type="text" value="<?php echo $fee['student_id']; ?>" class="validate" required
                                    name="std_id" id="std-id-for-fees">
                            </div>
                        </div>
                        <input type="hidden" name="up_id" value="<?php echo $fee['id']; ?>">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student Name</label>
                                <input type="text" value="<?php echo $fee['student_name']; ?>" class="validate" required
                                    name="std_name" id="std-name-for-fees" readonly>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="clasnamee">Class</label>
                                <select id="clasnamee" class="form-control" name="class_id" style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                    <option value="<?php echo $classe['name']; ?>"
                                        <?php if($classe['name']==$fee['Class']){ echo "selected";} ?>>
                                        <?php echo $classe['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Session</label>
                                <select id="inputState" class="form-control" name="session_id" style="font-size: 15px;">
                                    <option selected disabled>---Choose Session---</option>
                                    <?php while($session = mysqli_fetch_assoc($sessions)){ ?>
                                    <option value="<?php echo $session['name']; ?>"
                                        <?php if($session['name']==$fee['Session']){ echo "selected";} ?>>
                                        <?php echo $session['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="fees-cat">Fees Category</label>
                                <select id="fees-cat" class="form-control" name="feescat" style="font-size: 15px;">
                                    <option selected disabled>---Choose Fees Category---</option>
                                    <?php
                                    $sql = "SHOW COLUMNS FROM all_class_fees_table";
                                    $feescats = $crud->select($sql);
                                     while($feescat = mysqli_fetch_array($feescats)){ 
                                        if($feescat['Field'] == 'all_class_fees_id'){
                                            continue;
                                        }
                                        elseif ($feescat['Field'] == 'class') {
                                            continue;
                                        }
                                        elseif ($feescat['Field'] == 'year') {
                                            continue;
                                        }
                                        else{?>
                                    <option value="<?php echo $feescat['Field']; ?>" 
                                    <?php if($feescat['Field']== $fee['fees_cat']){ echo "selected";} ?>
                                    ><?php echo $feescat['Field']; ?>
                                    </option>
                                    <?php } } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Due fees</label>
                                <input type="text" value="<?php echo $fee['due_fees']; ?>" class="validate" required name="due_fees" id="due-balance"
                                    readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Current fees</label>
                                <input type="text" value="<?php echo $fee['current_fees']; ?>" class="validate" required name="curent_fees"
                                    id="current-fees" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Total Fees</label>
                                <input type="text" value="<?php echo $fee['total_fees']; ?>" class="validate" required
                                    name="total_fees" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Paid Ammount</label>
                                <input type="text" value="<?php echo $fee['PaidAmount']; ?>" class="validate" required
                                    name="paid_ammount">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Due Balance</label>
                                <input type="text" value="<?php echo $fee['due_balance']; ?>" class="validate" required
                                    name="due_balance" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Date</label>
                                <input type="date" value="<?php echo $fee['Date']; ?>" class="validate" required
                                    name="date">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Receipt No</label>
                                <input type="text" value="<?php echo $fee['Remarks']; ?>" class="validate" required
                                    name="receipt">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Remarks</label>
                                <input type="text" value="<?php echo $fee['Remarks']; ?>" class="validate" required
                                    name="remarks">
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

    $("#fees-cat").change(function(){

    var classn = $("#clasnamee").val();
    var fescat = $("#fees-cat").val();
    var sessiondat = $("#session-data").val();

    $.post("bind/feesdata.php",{className: classn, feesCat: fescat, SessionData: sessiondat}, function(data){
    $("#current-fees").val(data);
    });
    });


});
</script>