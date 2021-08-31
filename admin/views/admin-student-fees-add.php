<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

$sessionSQL = "SELECT * FROM `session`";
$sessions = $crud->select($sessionSQL);

$feescatSQL = "SELECT * FROM `fees_cat`";
$feescats = $crud->select($feescatSQL);

if(isset($_POST['add_fees'])){
    extract($_POST);
    $addfeesSQL = "INSERT INTO `feescollection`( `student_id`, `student_name`, `Class`, `Session`, `fees_cat`,  `total_fees`, `PaidAmount`, `due_balance`, `Date`, `Remarks`) VALUES ('$std_id', '$std_name', '$class_id', '$session_id','$feescat', '$total_fees', '$paid_ammount', '$due_balance', '$date', '$remarks')";

    $returnSMS = $crud->insert($addfeesSQL);
    if(isset($returnSMS)){
        echo "<h2 class='text-success'>Fees Add Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Fees Added Error, Please Try Again!!</h2>";
    }
}
?>
<!--== Seminar Details ==-->
<h1>Add Student Fees</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add Fees</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student Id</label>
                                <input type="text" value="" class="validate" required name="std_id" id="std-id-for-fees">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Student Name</label>
                                <input type="text" value="" class="validate" required name="std_name" id="std-name-for-fees">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Class</label>
                                <select id="inputState" class="form-control" name="class_id"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                        <option value="<?php echo $classe['name']; ?>"><?php echo $classe['name']; ?></option>
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
                                        <option value="<?php echo $session['name']; ?>"><?php echo $session['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Fees Category</label>
                                <select id="inputState" class="form-control" name="feescat"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Fees Category---</option>
                                    <?php while($feescat = mysqli_fetch_assoc($feescats)){ ?>
                                        <option value="<?php echo $feescat['fees_cat_name']; ?>"><?php echo $feescat['fees_cat_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Total Fees</label>
                                <input type="text" value="" class="validate" required name="total_fees">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Paid Ammount</label>
                                <input type="text" value="" class="validate" required name="paid_ammount">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Due Balance</label>
                                <input type="text" value="" class="validate" required name="due_balance">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Date</label>
                                <input type="date" value="" class="validate" required name="date">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Remarks</label>
                                <input type="text" value="" class="validate" required name="remarks">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="add_fees"></i>
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

    <?php
    //var_dump($_POST);
    ?>