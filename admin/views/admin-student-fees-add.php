<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

$sessionSQL = "SELECT * FROM `session`";
$sessions = $crud->select($sessionSQL);


if(isset($_POST['add_fees'])){
    extract($_POST);
    $class_id = strtolower($class_id);
    $addfeesSQL = "INSERT INTO `feescollection`(`student_id`, `student_name`, `Class`, `Session`, `fees_cat`, `due_fees`, `current_fees`, `total_fees`, `PaidAmount`, `due_balance`, `Date`, `receipt_no`, `Remarks`) VALUES ('$std_id','$std_name','$class_id','$session_id','$feescat','$due_fees','$curent_fees','$total_fees','$paid_ammount','$due_balance', now(), '$receipt', '$remarks')";

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
                                <label for="clasnamee">Class</label>
                                <select class="form-control" name="class_id"
                                    style="font-size: 15px;" id="clasnamee">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                        <option value="<?php echo $classe['name']; ?>"><?php echo $classe['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="session-data">Session</label>
                                <select id="session-data" class="form-control" name="session_id"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Session---</option>
                                    <?php while($session = mysqli_fetch_assoc($sessions)){ ?>
                                        <option value="<?php echo $session['name']; ?>"><?php echo $session['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div>

                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="fees-cat">Fees Category</label>
                                <select id="fees-cat" class="form-control" name="feescat"
                                    style="font-size: 15px;">
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
                                        else{
                                        
                                        ?>
                                        <option value="<?php echo $feescat['Field']; ?>"><?php echo $feescat['Field']; ?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Due fees</label>
                                <input type="text" value="" class="validate" required name="due_fees" id="due-balance" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Current fees</label>
                                <input type="text" value="" class="validate" required name="curent_fees" id="current-fees" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Total Fees</label>
                                <input type="text" value="" class="validate" required name="total_fees" id="total-fees" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Paid Ammount</label>
                                <input type="text" value="" class="validate" required name="paid_ammount" id="paid-amount">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Due</label>
                                <input type="text" value="" class="validate" required name="due_balance" id="due-fees">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Receipt No</label>
                                <input type="text" value="" class="validate" required name="receipt">
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
    $("#std-name-for-fees").hover(function(){
        var stdidfees = $("#std-id-for-fees").val();  
       
        $.get("bind/stddata.php",{ fid: stdidfees }, function(data){
            //alert(data);
            $("#std-name-for-fees").val(data);
        });
     });
});
</script>
<script>
    $(document).ready(function () {

        $("#fees-cat").change(function(){

           var classn = $("#clasnamee").val();
           var fescat = $("#fees-cat").val();
           var sessiondat = $("#session-data").val();

           $.post("bind/feesdata.php",{className: classn, feesCat: fescat, SessionData: sessiondat}, function(data){
            $("#current-fees").val(data);
           });
        });


        $("#session-data").change(function(){

           var stdId = $("#std-id-for-fees").val();
           var classn = $("#clasnamee").val();
           var sessiondat = $("#session-data").val();

           $.post("bind/fessduedata.php",{className: classn, studentdId: stdId, SessionData: sessiondat}, function(data){
            $("#due-balance").val(data);
           });
        });


        $("#total-fees").focus(function(){
           var neatTotal = 0;
           var crntfees = $("#current-fees").val();
           var preduebal = $("#due-balance").val();

          // var totalfees = $("#total-fees").val();
          if($.isNumeric(preduebal)){
           neatTotal += parseInt(preduebal);
           neatTotal += parseInt(crntfees);

          }else{
            neatTotal += parseInt(crntfees);
          }


           //neatTotal += Number($("#due-balance").val());
          // neatTotal += Number($("#current-fees").val());

           $("#total-fees").val(neatTotal);
        });


        
        $("#paid-amount").blur(function(){

           var totalfees = $("#total-fees").val();
           var paidAmount = $("#paid-amount").val();
           var neatdue = parseInt(totalfees) - parseInt(paidAmount);
           $("#due-fees").val(neatdue);
        });




    });
</script>

    <?php
    //var_dump($_POST);
    ?>